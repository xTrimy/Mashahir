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
    return view('pages.home');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/celebrities', function () {
    return view('pages.celebrities');
});
Route::get('/message', function () {
    return view('pages.message');
});
Route::get('/messages', function () {
    return view('pages.messages');
});