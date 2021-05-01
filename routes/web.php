<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'App\Http\Controllers\UserController@home');
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::get('/registration', 'App\Http\Controllers\UserController@registration');
Route::get('/forgot_password', 'App\Http\Controllers\UserController@forgot_password');
Route::post('/forgot_password', 'App\Http\Controllers\UserController@retrieve_password');

Route::resource('/users', 'App\Http\Controllers\UserController');
Route::post('/login', 'App\Http\Controllers\UserController@vertifyUser');
