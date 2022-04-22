<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImgController;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('img', ImgController::class)->middleware('auth');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');