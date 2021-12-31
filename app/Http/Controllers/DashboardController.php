<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        return view('dashboard', [
            'totalAnggota' => Member::count(),
            'totalAnggotaAktif' => Member::where('status', 'ACTIVE')->count(),
            'totalAnggotaPasif' => Member::where('status', 'PASSIVE')->count(),
            'totalDivisi' => Division::count(),
        ]);
    }
}
