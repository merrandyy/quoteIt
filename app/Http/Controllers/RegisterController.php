<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store(RegisterRequest $request) {
        // dd($request);
        $user = User::create($request->validated());
        Auth::login($user, remember:true);
        // dd(Auth::user());
        // return response()->json(["success" => "yeey"]);
        return redirect()->route('home');
    }
}
