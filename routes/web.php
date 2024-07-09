<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookTestController;


use App\Http\Controllers\BlogPostController;

Route::get('/blogposts', [BlogPostController::class, 'index'])->name('blogposts.index');
Route::get('/blogposts/{slug}', [BlogPostController::class, 'show'])->name('blogposts.show');




Route::get('/form', function () {
    return view('upload');
});

Route::post('/store', [BookTestController::class, 'store'])->name('booktest.store');


Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/refund-policy', function () {
    return view('refund-policy');
});
Route::get('/refund-policy', function () {
    return view('refund-policy');
});
Route::get('/terms-of-service', function () {
    return view('terms-of-service');
});