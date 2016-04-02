<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use Hash;
use \App\User;

class IndexController extends Controller
{
    public function index()
    {
        return view('index/index');
    }

    public function login(Request $request)
    {
        $message = null;
        $data = $request->all();
        if ($request->isMethod('post')) {
            $model = new User;
            $message = $model->validate($data);
            if ($message === true) {
                if ($a = Auth::attempt([
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'active_token' => ''
                ])) {
                    return redirect('/member');
                } else {
                    $message = [
                        'summary' => 'Username or password wrong.'
                    ];
                }
            }  
        }

        $code = $request->get('code');
        \OAuth::setHttpClient('CurlClient');
        $googleService = \OAuth::consumer('Google');
        $data['gLogin'] = $googleService->getAuthorizationUri();
        if (!is_null($code)) {
            $token = $googleService->requestAccessToken($code);
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
            // Using Google profile for register or login

        }

        return view('index/login', ['data' => $data, 'message' => $message]);
    }

    public function register(Request $request)
    {
        $user = Auth::user();
        if($user != null)
            return redirect('/');

        $data = $request->all();
        $message = null;
        if ($request->isMethod('post')) {
            $birthday = explode('/', $data['birthday']);
            $data['birthday'] = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
            $model = new User;
            $message = $model->validate($data, 'register');
            if ($message === true) {
                $model->fill($data);
                $model->password = Hash::make($model->password);
                $model->active_token = md5(md5($model->username));
                $model->save();

                Mail::send('email.active', ['user' => $model], function ($m) use ($model) {
                    $m->from('tinhphong007@gmail.com', 'The Laravel Test');
                    $m->to($model->email, $model->name)->subject('Active!');
                });
                $data['success'] = 'Register successfully, please check your email to active your account!';
            }
        }
        return view('index/register', ['data' => $data, 'message' => $message]);
    }

    public function active(Request $request)
    {
        $code = $request->get('code');
        $model = User::where('active_token', $code)->first();
        if($model != null) {
            $model->active_token = '';
            $model->save();
            return view('index/active');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        if (!Auth::guest())
            Auth::logout();
        return redirect('/');
    }
}