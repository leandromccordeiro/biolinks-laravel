<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request) {
        if($request->tryToLogin()){
            return to_route('dashboard');
        }
        return back()->with(['message' => 'Não deu certo!!']);
    }
}
