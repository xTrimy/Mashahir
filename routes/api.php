<?php

use App\Http\Controllers\API\CalenderController;
use App\Http\Controllers\API\MessageController;
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
Route::get('/Messages/{ticket}', [MessageController::class, 'updateMessages'])->middleware(['auth.apicustom', 'user.hasTicket']);
Route::post('/Messages/{ticket}', [MessageController::class, 'store'])->middleware(['auth.apicustom', 'user.hasTicket:api']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
