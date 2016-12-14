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
/*
Route::get('/', function () {
    return view('login');
});
*/

Route::get('/','Adminauth\AuthController@showLoginForm');

Route::post('login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],function(){
    Route:: get('/dashboard','Admin\AdminController@dashboard');
    Route:: get('/logout','Adminauth\AuthController@logout');
});

Route::get('/create',function(){
    App\User::create([
        'name' => 'sabeena',
        'username' => 'sabeena',
        'email' => 'sabeena1217@gmail.com',
        'password' => bcrypt('123'),
    ]);
});
