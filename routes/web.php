<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('start');
});

//guestPosting
Route::get('guest-posting', function () {
    return view('guest-posting');
});
//linkInsert
Route::get('link-insert', function () {
    return view('link-insert');
});
//backLinking
Route::get('home-page-backlinks', function () {
    return view('home-page-backlinks');
});

//ContactUs
Route::get('contact', function () {
    return view('contact');
});

//reviews
Route::get('reviews', function () {
    return view('reviews');
});

//whyUs
Route::get('whyUs', function () {
    return view('whyUs');
});
//start
Route::get('start', function () {
    return view('start');
});


//faq
Route::get('faqs', function () {
    return view('faqs');
});

//privacy policy
Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

//TermsOfServices
Route::get('terms-of-services', function () {
    return view('terms-of-services');
});

//RefundPolicy
Route::get('refund-policy', function () {
    return view('refund-policy');
});

//delivery POlicy

Route::get('delivery-policy', function () {
    return view('delivery-policy');
});

Route::get('admin', function () {
    return view('admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('sites', App\Http\Controllers\SiteController::class);
