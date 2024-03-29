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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// =========== 3 Party Login ======== 
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('https://danceforce.herokuapp.com/login/google/callback', 'Auth\LoginController@handleProviderCallback');