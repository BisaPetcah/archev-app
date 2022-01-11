<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\User;
use App\Models\Generation;
use App\Models\Member;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function all(Request $request)
    {
        $dataAnggota = Member::with(['division', 'generation']);

        if ($request->ajax()) {
            return $this->dataTableMember($dataAnggota);
        }
        return view('anggota');
    }

    public function active(Request $request)
    {
        $dataAnggota = Member::where('status', 'aktif')->with(['division', 'generation']);

        if ($request->ajax()) {
            return $this->dataTableMember($dataAnggota);
        }

        return view('anggota');
    }

    public function passive(Request $request)
    {
        $dataAnggota = Member::where('status', 'pasif')->with(['division', 'generation']);

        if ($request->ajax()) {
            return $this->dataTableMember($dataAnggota);
        }
        return view('anggota');
    }

    public function create(Request $request)
    {
        return view('anggota.create', [
            'divisions' => Division::all(),
            'generations' => Generation::orderBy('name', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:members',
            'foto' => 'required|image|file|max:1024',
            'generation_id' => 'required',
            'status' => 'required',
            'division_id' => 'required'
        ]);

        $validated['photo_path'] =
            $request->file('foto')->store('member-photo');

        $user = User::firstWhere('email', $validated['email']);
        if ($user) {
            $validated['user_id'] = $user->id;
        }

        Member::create($validated);

        return redirect()->back()->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(Request $request, Member $member)
    {
        return $member;
    }

    public function update(Request $request, Member $member)
    {
        return $member;
    }

    public function destroy(Request $request, Member $member)
    {
        $member->delete();

        return redirect()->back()->with('success', 'data berhasil terhapus');
    }

    private function dataTableMember($dataAnggota)
    {
        return datatables()->eloquent($dataAnggota)
            ->addColumn('divisi', function ($dataAnggota) {
                return $dataAnggota->division->name;
            })
            ->addColumn('angkatan', function ($dataAnggota) {
                return $dataAnggota->generation->name;
            })
            ->addColumn('aksi', function ($dataAnggota) {
                return view('components.action-button', ['data' => $dataAnggota]);
            })
            ->rawColumns(['divisi', 'angkatan', 'aksi'])
            ->toJson();
    }
}
