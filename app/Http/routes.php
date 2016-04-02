<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('/login', 'IndexController@login');
Route::post('/login', 'IndexController@login');

Route::get('/logout', 'IndexController@logout');

Route::get('/register', 'IndexController@register');
Route::post('/register', 'IndexController@register');

Route::get('/active', 'IndexController@active');

Route::get('/glogin', 'IndexController@glogin');

Route::get('member', [
    'middleware' => 'auth',
    'uses' => 'MemberController@index'
]);
