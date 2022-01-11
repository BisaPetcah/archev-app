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
            'totalAnggotaAktif' => Member::where('status', 'aktif')->count(),
            'totalAnggotaPasif' => Member::where('status', 'pasif')->count(),
            'totalDivisi' => Division::count(),
        ]);
    }
}
