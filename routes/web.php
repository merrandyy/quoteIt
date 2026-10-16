<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);

// Route::post('/logout', LogoutController::class);


Route::get('/', [QuoteController::class, 'index'])->name('home');

Route::get('/signup', function () {
    return view('Authentication.SignUp', ['page'=>'Sign Up']);
});
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/login', function () {
    return view('Authentication.LogIn', ['page'=>'Log In']);
});
Route::post('/login', [LoginController::class, 'store']);

Route::post('/', [QuoteController::class, 'store'])->name('create_quote');
Route::put('/quotes/{quote}', [QuoteController::class, 'update'])->name('edit_quote');
Route::delete('/quotes/{quote}', [QuoteController::class, 'destroy'])->name('delete_quote');