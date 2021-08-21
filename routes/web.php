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
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/profile-ads', function () {
    return view('pages.profile-ads');
});


Route::prefix('/dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.main');
    });
    Route::get('/tasks', function () {
        return view('dashboard.tasks');
    });
    Route::get('/celebrities', function () {
        return view('dashboard.celebrities');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.main');
});
Route::get('/profile-services', function () {
    return view('pages.profile-services');
});

Route::get('/profile-agent', function () {
    return view('pages.profile-agent');
});
