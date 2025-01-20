<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function login(){

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($user = User::query()
            ->where('email', '=', request()->email)
            ->first()){
                Auth::login($user);
                return to_route('dashboard');
            };

        return back()->with(['message' => 'Não encontrado']);
    }
}
