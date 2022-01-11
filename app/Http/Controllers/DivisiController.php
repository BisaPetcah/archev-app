<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Member;
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
        $members = Member::where('division_id', $divisi->id)->paginate(9);

        return view('divisi.detail', [
            'divisi' => $divisi,
            'members' => $members,
        ]);
    }
}
