<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user*/
        $user = Auth::user();

        // dd($user, $user->links, $user->links->count());
        return view('dashboard');
    }
}
