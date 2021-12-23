<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectDashboardController extends Controller
{
    public function redirect(Request $request)
    {
        return
            Auth::user()->is_admin ?
            redirect()->route('admin.dashboard') :
            redirect()->route('user.dashboard');
    }
}
