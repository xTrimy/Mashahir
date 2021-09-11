<?php

use App\Http\Controllers\API\CalenderController;
use App\Http\Controllers\API\MessageController;
use App\Http\Controllers\API\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/calender', [CalenderController::class, 'getTasks'])->middleware('auth.apicustom');
Route::get('/calender/{username}', [CalenderController::class, 'getTasks'])->middleware('auth.apicustom', 'agency.hasCelebrity');



Route::get('/messages/{ticket}', [MessageController::class, 'updateMessages'])->middleware(['auth.apicustom', 'user.hasTicket']);
Route::get('/notifications', [NotificationController::class, 'updateNotification'])->middleware(['auth.apicustom']);
Route::post('/messages/{ticket}', [MessageController::class, 'store'])->middleware(['auth.apicustom', 'user.hasTicket:api', 'user.doesnothaverole:governmental organization']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
