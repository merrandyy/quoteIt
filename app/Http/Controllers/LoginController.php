<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(LoginRequest $request) {
        $request->validated();
        if(Auth::attempt($request->validated())) {
            return redirect()->route('home');
        }
        return redirect()
        ->back()
        ->withInput($request->only('email'))
        ->withErrors(['email' => 'The entered information is not correct']);
    }
}
