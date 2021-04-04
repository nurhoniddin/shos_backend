<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GcategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\CKEditorController;
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
    return view('auth.login');
});

//Route::group(['middleware' => 'auth','prefix'=>'admin'],function (){
//
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);
Route::resource('posts',PostController::class);
Route::resource('videos',VideoController::class);
Route::resource('gcategory',GcategoryController::class);
Route::resource('gallery',GalleryController::class);
Route::post('ckeditor/image_upload', CKEditorController::class)->name('upload');
Route::resource('event',EventController::class);
Route::resource('ads',AdsController::class);

