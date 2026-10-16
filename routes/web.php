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


Route::get('/', function (Request $request) {
    $myQuotes = array_filter((array) $request->query('quotes', []), 'is_string');
    ksort($myQuotes);

    return view('welcome', [
        'myQuotes' => $myQuotes,
        'editingIndex' => $request->integer('edit', -1),
        'otherQuotes' => [
            'The best way to predict the future is to invent it.',
            'Simplicity is the soul of efficiency.',
            'Code is like humor. When you have to explain it, it’s bad.',
            'First, solve the problem. Then, write the code.',
        ],
    ]);
})->name('home');

Route::get('/signup', function () {
    return view('Authentication.SignUp', ['page'=>'Sign Up']);
});
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/login', function () {
    return view('Authentication.LogIn', ['page'=>'Log In']);
});
Route::post('/login', [RegisterController::class, 'store']);

Route::post('/', [QuoteController::class, 'store'])->name('create_quote');