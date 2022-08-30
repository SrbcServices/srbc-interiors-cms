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

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/admin/add-blog', function() {
    return view('admin.add-blog');
});


// Route::get('/admin/gallery', function() {
//     return view('admin.gallery');
// });

Route::get('/blogs', [BlogsController::class, 'loop']);
Route::get('/blogs/{Heading}', [BlogsController::class, 'individual']);


Route::post('/admin/add_blog', [BlogsController::class,'store']);
Route::get('admin/blogs', [BlogsController::class,'index']);
Route::get('admin/edit-blog/{id}', [BlogsController::class, 'edit']);
Route::post('/admin/update-blog', [BlogsController::class,'update']);
Route::get('/admin/blogdelete/{id}',[BlogsController::class,'delete']);
Route::post('uploadImage', [BlogsController::class, 'upload'])->name('upload');
Route::get('/admin/gallery', [GalleryController::class, 'index']);
Route::post('/admin/gallery', [GalleryController::class,'store']);
Route::get('/admin/gallerydelete/{id}',[GalleryController::class,'delete']);
Route::get('/portfolio',[GalleryController::class,'loop']);

