<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function all(Request $request)
    {
        $dataAnggota = Member::with(['division', 'generation']);
        // dd($dataAnggota->first()->id);

        if ($request->ajax()) {
            return datatables()->eloquent($dataAnggota)
                ->addIndexColumn()
                ->addColumn('divisi', function ($dataAnggota) {
                    return $dataAnggota->division->name;
                })
                ->addColumn('angkatan', function ($dataAnggota) {
                    return $dataAnggota->generation->name;
                })
                ->addColumn('aksi', function ($dataAnggota) {
                    // return $dataAnggota->id;
                    $button = '<div class="flex flex-wrap justify-between">
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-blue-100 border-2 border-gray-600"><i
                    class="fas fa-edit"></i> Edit</a>
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-red border-2 border-gray-600"><i
                    class="fas fa-trash"></i> Delete</a>
        </div>';
                    return $button;
                })
                ->rawColumns(['divisi', 'angkatan', 'aksi'])
                ->toJson();
        }
        return view('anggota');
    }

    public function active(Request $request)
    {
        $dataAnggota = Member::where('status', 'aktif')->with(['division', 'generation']);

        if ($request->ajax()) {
            return datatables()->eloquent($dataAnggota)
                ->addIndexColumn()
                ->addColumn('divisi', function ($dataAnggota) {
                    return $dataAnggota->division->name;
                })
                ->addColumn('angkatan', function ($dataAnggota) {
                    return $dataAnggota->generation->name;
                })
                ->addColumn('aksi', function ($dataAnggota) {
                    // return $dataAnggota->id;
                    $button = '<div class="flex flex-wrap justify-between">
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-blue-100 border-2 border-gray-600"><i
                    class="fas fa-edit"></i> Edit</a>
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-red border-2 border-gray-600"><i
                    class="fas fa-trash"></i> Delete</a>
        </div>';
                    return $button;
                })
                ->rawColumns(['divisi', 'angkatan', 'aksi'])
                ->toJson();
        }

        return view('anggota');
    }

    public function passive(Request $request)
    {
        $dataAnggota = Member::where('status', 'pasif')->with(['division', 'generation']);

        if ($request->ajax()) {
            return datatables()->eloquent($dataAnggota)
                ->addIndexColumn()
                ->addColumn('divisi', function ($dataAnggota) {
                    return $dataAnggota->division->name;
                })
                ->addColumn('angkatan', function ($dataAnggota) {
                    return $dataAnggota->generation->name;
                })
                ->addColumn('aksi', function ($dataAnggota) {
                    // return $dataAnggota->id;
                    $button = '<div class="flex flex-wrap justify-between">
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-blue-100 border-2 border-gray-600"><i
                    class="fas fa-edit"></i> Edit</a>
            <a href="#" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-red border-2 border-gray-600"><i
                    class="fas fa-trash"></i> Delete</a>
        </div>';
                    return $button;
                })
                ->rawColumns(['divisi', 'angkatan', 'aksi'])
                ->toJson();
        }

        return view('anggota');
    }
}
