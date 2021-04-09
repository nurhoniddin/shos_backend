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

// Route Calendars All
Route::get('/calendar', [\App\Http\Controllers\Api\CalendarController::class,'index'])->name('calendar');


// Route Event  All
Route::get('/event', [\App\Http\Controllers\Api\EventController::class,'index'])->name('event');

// Route Management  All

Route::get('/event', [\App\Http\Controllers\Api\EventController::class,'index']);
//event single
Route::get('/event/{id}', [\App\Http\Controllers\Api\EventController::class,'single_event']);
Route::get('/manage', [\App\Http\Controllers\Api\ManagementController::class,'index'])->name('management');

// Route Staff  All
Route::get('/staff', [\App\Http\Controllers\Api\StaffController::class,'index'])->name('staff');

// Route Video  All
Route::get('/video', [\App\Http\Controllers\Api\VideoController::class,'index'])->name('video');

// Route Gallery  All
Route::get('/gallery', [\App\Http\Controllers\Api\GalleryController::class,'index'])->name('gallery');

// Route Gallery Category_id All
Route::get('/gallery/{gcategory_id}', [\App\Http\Controllers\Api\GalleryController::class,'gallerys']);

// Route Gallery Category All
Route::get('/gcategory', [\App\Http\Controllers\Api\GcategoryController::class,'index'])->name('gcategory');

// Route Category All
Route::get('/category', [\App\Http\Controllers\Api\CategoryController::class,'index'])->name('category');

// Route Post All
Route::get('/post', [\App\Http\Controllers\Api\PostController::class,'index'])->name('post');
// Route Post Details
Route::get('/post/{id}', [\App\Http\Controllers\Api\PostController::class,'details']);
// Route Post Category_id All
Route::get('/posts/{category_id}', [\App\Http\Controllers\Api\PostController::class,'posts']);

// Route Notification All
Route::get('/notification', [\App\Http\Controllers\Api\NotificationController::class,'index'])->name('notification');
Route::get('/notification', [\App\Http\Controllers\Api\NotificationController::class,'index']);
Route::get('/notification/{id}', [\App\Http\Controllers\Api\NotificationController::class,'single_notification']);


