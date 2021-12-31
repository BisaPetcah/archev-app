<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function all(Request $request)
    {
        return view('anggota', [
            'dataAnggota' => Member::all(),
        ]);
    }

    public function active(Request $request)
    {
        return view('anggota', [
            'dataAnggota' => Member::where('status', 'ACTIVE')->get()
        ]);
    }

    public function passive(Request $request)
    {
        return view('anggota', [
            'dataAnggota' => Member::where('status', 'PASSIVE')->get()
        ]);
    }
}
