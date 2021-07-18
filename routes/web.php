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


//service centre routes

Route::get('/booking', 'App\Http\Controllers\BookingController@create')->name('create_appointment');

Route::post('/booking', 'App\Http\Controllers\BookingController@store')->name('store_appointment');


Route::get('/appointment_book_success/{booking_id}/{attendee_name}/{start_date_time}/{end_date_time}/{appointment_token}/{msg}', 'App\Http\Controllers\BookingController@appointment_book_success')->name('appointment_book_success');

Route::get('/appointment_book_failure/{msg}', 'App\Http\Controllers\BookingController@appointment_book_failure')->name('appointment_book_failure');

Route::post('/cancel_booking','App\Http\Controllers\BookingController@cancel_booking')->name('cancel_booking');




Route::get('/convertDocToPDF', 'App\Http\Controllers\UserController@convertDocToPDF')->name('convertDocToPDF');