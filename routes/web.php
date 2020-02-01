<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TopController@index')->name('top');

// ログイン
Route::get('login', function () {
    return view('login');
})->name('login');

// 会員登録
Route::get('signup', function () {
    return view('signup');
});

Route::get('signup/form', function () {
    return view('signupForm');
})->name('signup.form');

Route::post('signup/form', 'AuthController@signup')->name('signup');

// ログアウト
Route::get('logout', 'AuthController@logout')->name('logout');