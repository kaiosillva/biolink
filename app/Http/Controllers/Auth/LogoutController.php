<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __invoke()
    {
        auth()->logout();
        session()->invalidate();

        return to_route('login');
    }
}
