<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

// Show the registration form
Route::get('/', function () {
    return view('mail');
});

// Alternative URL for the registration form
Route::get('/register', function () {
    return view('mail');
});

// Handle form submission - ONLY ONE ROUTE
Route::post('/register', [MailController::class, 'SendEmail'])
    ->name('register.submit');