<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/calendar', [\App\Http\Controllers\Api\CalendarController::class,'index'])->name('calendar');
Route::get('/event', [\App\Http\Controllers\Api\EventController::class,'index'])->name('event');
Route::get('/manage', [\App\Http\Controllers\Api\ManagementController::class,'index'])->name('management');
Route::get('/staff', [\App\Http\Controllers\Api\StaffController::class,'index'])->name('staff');
Route::get('/video', [\App\Http\Controllers\Api\VideoController::class,'index'])->name('video');
