<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store (Request $request) {
        $validate = $request->validate([
            'username' => ['required', 'string', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'username' => $validate['username'],
            'email' => $validate['email'],
            'password' => $validate['password'],
        ]);

        Auth::login($user);

        return redirect()->route('posts.index');
    }
}
