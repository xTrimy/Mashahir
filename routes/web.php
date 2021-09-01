<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\CelebrityController;
use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\AddServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ticketController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/logout', [SignInController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
    Route::get('/signup/{type}', [SignUpController::class, 'signup'])->name('signup_form');
    Route::post('/signup/{type}', [SignUpController::class, 'signup_action']);


    Route::get('/signin',[SignInController::class,'index'])->name('signin');
    Route::get('/login', function(){
        return redirect()->route('signin');
    })->name('login');
    Route::post('/signin',[SignInController::class,'signin']);
});

Route::prefix('/email')->group(function(){
    Route::get('/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');


    Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect()->route('home');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::get('/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});

Route::prefix('/profile/{username}')->middleware('profile.exists')->group(function(){
    Route::get('/', [ProfileController::class, 'index'])
        ->name('profile');

    Route::get('/services', [ProfileController::class, 'services'])
        ->name('profile.services')
        ->middleware('profile.tabRoles:celebrity,digital marketer');

    Route::get('/agent', [ProfileController::class, 'agent'])
        ->name('profile.agent')
        ->middleware('profile.tabRoles:celebrity');

    Route::get('/celebrities', [ProfileController::class, 'celebrities'])
        ->name('profile.celebrities')
        ->middleware('profile.tabRoles:advertising agency');

    Route::get('/ads', [ProfileController::class, 'ads'])
        ->name('profile.ads')
        ->middleware('profile.tabRoles:celebrity,digital marketer,advertising agency');
});

Route::prefix('/messages')->middleware(['auth', 'verified'])->group(function(){

    Route::get('/create/{username}', [ticketController::class, 'index'])->middleware('profile.exists', 'user.notHimSelf')->name('new-ticket');
    Route::post('/create/{username}', [ticketController::class, 'store'])->middleware('profile.exists', 'user.notHimSelf');
    Route::get('/{ticket}',[ticketController::class, 'read'])->middleware('user.hasTicket:web')->name('ticket');

});


Route::get('/agencies', [AgencyController::class,'search'])->name('agencies');
Route::get('/agency/request/{id}',[AgencyController::class,'agency_request'])->name('agency-request');
Route::get('/celebrities', [CelebrityController::class, 'index']);

Route::get('/service/{id}', [ServiceController::class, 'index'])->name('service');
Route::post('/service/{id}', [ServiceController::class, 'purchase']);


Route::prefix('/dashboard')->as('dashboard.')->middleware('verified')->group(function () {

    Route::get('/', function () {
        return view('dashboard.main');
    })->name('main');
    Route::get('/tasks', function () {
        return view('dashboard.tasks');
    })->name('tasks');
    Route::get('/celebrities', function () {
        return view('dashboard.celebrities');
    })->name('celebrities');
    Route::get('/credit', function () {
        return view('dashboard.credit');
    })->name('credit');

    Route::get( '/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::post('/edit-profile', [ProfileController::class, 'saveChanges']);


    Route::get('/requests', [RequestController::class,'index'])->name('requests');
    Route::middleware('user.hasPermission:view all tasks')->group(function () {
        Route::get('/requests/accept/{id}', [RequestController::class, 'accept'])->name('accept-request');
        Route::get('/requests/decline/{id}', [RequestController::class, 'decline'])->name('decline-request');
    });
    
    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');

    Route::middleware(['user.hasPermission:send important notifications'])->group(function () {
        Route::get('/send-notification', [NotificationsController::class, 'create'])->name('send-notification');
        Route::post('/send-notification', [NotificationsController::class, 'store']);
    });


    Route::prefix('/services')->as('services.')->middleware('user.hasPermission:publish services')->group(function () {
        Route::get('/', [ServiceController::class,'dashboard_review'])->name('main');
        Route::get('/add', [AddServiceController::class, 'index'])->name('add');
        Route::post('/add', [AddServiceController::class, 'store']);

        Route::get('/edit/{id}', [AddServiceController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [AddServiceController::class, 'store']);
    });
    Route::prefix('/ads')->as('ads.')->middleware('user.hasPermission:publish services')->group(function () {
        Route::get('/', [AdController::class,'review'])->name('main');
        Route::get('/add', [AdController::class, 'add'])->name('add');
        Route::post('/add', [AdController::class, 'store']);

        // Route::get('/edit/{id}', [AddServiceController::class, 'edit'])->name('edit');
        // Route::post('/edit/{id}', [AddServiceController::class, 'store']);
    });
    /**
     * Notice that you can check any user permission by add it's role after the middleware
     * ex: user.hasPermission:manage celebrities
     * @author Mohammad Salah
     */
    Route::group(['prefix'=>'/celebrity/{username}','as'=>"celebrity", 'middleware'=>['user.hasPermission:manage celebrities', 'profile.exists', 'agency.hasCelebrity']], function(){

        /**
         * ANY CONTROLLER HERE SHOULD Check if there is username parameter in the request first.
         * THIS IS AN EXAMPLE YOU SHOULD FOLLOW
         */
        Route::group(['prefix'=>'/services','as'=>'services.'],function ()  {
            Route::get('/add', [AddServiceController::class, 'index'])->name('add');
            Route::post('/add', [AddServiceController::class, 'store']);

            Route::get('/edit/{id}', [AddServiceController::class, 'edit_as_agency'])->name('edit');
            Route::post('/edit/{id}', [AddServiceController::class, 'store']);
        });


    });


});


    // Route::post('/saveChanges', [SignUpController::class, 'saveChanges']);

