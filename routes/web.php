<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GalleryController;
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
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/service', function () {
    return view('frontend.services');
});

Route::get('/portfolio', function () {
    return view('frontend.gallery');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/portfolio', [GalleryController::class, 'loop']);

Route::get('/logout', [GalleryController::class, 'logout'])->name('logout');



Route::get('/blogs', [BlogsController::class, 'loop']);
Route::get('/blogs/{Heading}', [BlogsController::class, 'individual']);

Route::get('/login',[GalleryController::class,'login'])->name('login')->middleware('guest');

Route::post('/login', [GalleryController::class, 'userLogin']);

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/add-blog', function () {
        return view('admin.add-blog');
    });


    Route::post('/add_blog', [BlogsController::class, 'store']);
    Route::get('/blogs', [BlogsController::class, 'index']);
    Route::get('/edit-blog/{id}', [BlogsController::class, 'edit']);
    Route::post('/update-blog', [BlogsController::class, 'update']);
    Route::get('/blogdelete/{id}', [BlogsController::class, 'delete']);
    Route::post('uploadImage', [BlogsController::class, 'upload'])->name('upload');
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::post('/gallery', [GalleryController::class, 'store']);
    Route::get('/gallerydelete/{id}', [GalleryController::class, 'delete']);
});
