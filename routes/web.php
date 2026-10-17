<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// home
Route::get('/', [QuoteController::class, 'index'])->name('home');

// quotes handling
Route::post('/', [QuoteController::class, 'store'])->name('create_quote');
Route::put('/quotes/{quote}', [QuoteController::class, 'update'])->name('edit_quote');
Route::delete('/quotes/{quote}', [QuoteController::class, 'destroy'])->name('delete_quote');

// sign up
Route::get('/signup', function () {
    return view('Authentication.SignUp', ['page'=>'Sign Up']);
});
Route::post('/signup', [RegisterController::class, 'store']);

// login
Route::get('/login', function () {
    return view('Authentication.LogIn', ['page'=>'Log In']);
});
Route::post('/login', [LoginController::class, 'store']);

// logout
Route::get('/logout', LogoutController::class);