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
Route::get('guestPosting', function () {
    return view('guestPosting');
});
//linkInsert
Route::get('linkInsert', function () {
    return view('linkInsert');
});
//backLinking
Route::get('backlinking', function () {
    return view('backlinking');
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
Route::get('faq', function () {
    return view('faq');
});

//privacy policy
Route::get('privacy', function () {
    return view('privacy');
});

//TermsOfServices
Route::get('termsofservices', function () {
    return view('termsofservices');
});

//RefundPolicy
Route::get('refundpolicy', function () {
    return view('refundpolicy');
});

//delivery POlicy

Route::get('deliverypolicy', function () {
    return view('deliverypolicy');
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