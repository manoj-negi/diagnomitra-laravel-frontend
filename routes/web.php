<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookTestController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\UserTestimonialController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OTPController;

// Route::post('/send-otp', [OTPController::class, 'sendLoginOtp']);
// Route::get('/send-otp', [OTPController::class, 'showOTPForm'])->name('otp.form');
// Route::get('/verify-otp', [OTPController::class, 'showOtpVerificationForm'])->name('otp.verify');
// Route::post('/verify-otp', [OTPController::class, 'verifyOtp'])->name('otp.verify.submit');
Route::middleware(['web'])->group(function () {
    Route::get('/send-otp', [OTPController::class, 'showOTPForm'])->name('otp.form');
    Route::post('/send-otp', [OTPController::class, 'sendLoginOtp'])->name('otp.send');
    Route::get('/verify-otp', [OTPController::class, 'showOtpVerificationForm'])->name('otp.verify');
    Route::post('/verify-otp', [OTPController::class, 'verifyOtp'])->name('otp.verify.submit');
    Route::get('/otp/delete-success', [OtpController::class, 'deleteSuccess'])->name('delete.success');

});
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', [RecommendationController::class, 'index'])->name('index');
Route::get('/blog', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogPostController::class, 'show'])->name('blog.show');
// Route::get('/', [UserTestimonialController::class, 'home'])->name('home');


Route::get('sitemap.xml', [SiteMapController::class, 'generateSitemap']);


Route::get('/form', function () {
    return view('upload');
});

Route::post('/testbooking', [BookTestController::class, 'testbooking'])->name('booktest.testbooking');


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/about-us', function () {
    return view('about-us');
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
Route::get('/our-services', function () {
    return view('our-services');
});
