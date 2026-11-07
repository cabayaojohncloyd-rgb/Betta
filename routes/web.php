<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\BackendStatusController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;


// ==============================
// PUBLIC PAGES
// ==============================

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/sc', function () {
    return view('sc');
})->name('sc');

Route::get('/req', function () {
    return view('req');
})->name('req');


// SIGN IN / REGISTER PAGE
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return redirect()->route('register');
})->name('login');

Route::get('/sign', function () {
    return view('sign');
})->name('sign');

// USER REGISTRATION
Route::post('/sign', [
    RegistrationController::class,
    'store'
])->name('registration.store');


// ==============================
// ADMIN PAGES
// ==============================

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/adminlog', function () {
    return view('adminlog');
})->name('adminlog');

Route::get('/admind', function () {
    return view('admind');
})->name('admind');

Route::get('/admingoods', function () {
    return view('admingoods');
})->name('admingoods');

Route::get('/adminr', function () {
    return view('adminr');
})->name('adminr');

Route::get('/adminc', function () {
    return view('adminc');
})->name('adminc');

Route::get('/adminu', function () {
    return view('adminu');
})->name('adminu');

Route::get('/adminreport', function () {
    return view('adminreport');
})->name('adminreport');

Route::get('/adminset', function () {
    return view('adminset');
})->name('adminset');

Route::get('/admin/monitor', function () {
    return view('adminmonitor');
})->name('adminmonitor');


// ==============================
// OTHER PAGES
// ==============================

Route::get('/foodpack1', function () {
    return view('foodpack1');
})->name('foodpack1');

Route::get('/foodpack2', function () {
    return view('foodpack2');
})->name('foodpack2');

Route::get('/submitted', function () {
    return view('submitted');
})->name('submitted');

Route::get('/fund', function () {
    return view('fund');
})->name('fund');

Route::get('/ourimpact', function () {
    return view('ourimpact');
})->name('ourimpact');


// ==============================
// DONATION REQUEST
// ==============================

Route::post('/request-donation', [DonationRequestController::class, 'store'])
    ->name('req.store');

Route::get('/request-donation/confirmation', [DonationRequestController::class, 'confirmation'])
    ->name('req.confirmation');


// ==============================
// USER LOGIN / LOGOUT
// ==============================

Route::post('/login', [
    LoginController::class,
    'store'
])->name('login.submit');

Route::post('/logout', [
    LoginController::class,
    'destroy'
])->middleware('auth')->name('logout');


// ==============================
// FORGOT / RESET PASSWORD
// ==============================

Route::view('/password-reset', 'password-reset')->name('password.reset.page');

// =====================================
// BACKEND DEVELOPMENT STATUS
// =====================================

if (app()->environment('local')) {
    Route::get('/backend-status', [
        BackendStatusController::class,
        'index'
    ])->name('backend.status');
}