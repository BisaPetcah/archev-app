<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\View\Components\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function show(Request $request)
    {
        return view('divisi', [
            'listDivisi' => Division::with('members')->get(),
        ]);
    }

    public function detail(Request $request, Division $divisi)
    {
        return $divisi->load('members');
    }
}
