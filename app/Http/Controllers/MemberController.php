<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user != null) {
            $model = User::find($user->id);
            $ageInRange = $model->ageInRange();
            if($ageInRange != null) {
                $nowDate = new \DateTime();
                if (isset($ageInRange[1])) {
                    $models = User::where('birthday', '<=', $nowDate->modify('-' . $ageInRange[0] . ' year')->format('Y-m-d'))
                        ->where('birthday', '>=', $nowDate->modify('-' . $ageInRange[1] . ' year'))
                        ->get();
                } else {
                    $models = User::where('birthday', '<=', $nowDate->modify('-' . $ageInRange[0] . ' year'))->format('Y-m-d')
                        ->get();
                }

                return view('member/index', ['models' => $models]);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}