@php
$listData = [
    [
        'title' => 'Total Anggota',
        'total' => $totalAnggota,
        'icon' => 'fas fa-user-friends',
        'route' => route('anggota'),
    ],
    [
        'title' => 'Anggota Aktif',
        'total' => $totalAnggotaAktif,
        'icon' => 'fas fa-user-friends',
        'route' => route('anggota.aktif'),
    ],
    [
        'title' => 'Anggota Pasif',
        'total' => $totalAnggotaPasif,
        'icon' => 'fas fa-user-friends',
        'route' => route('anggota.pasif'),
    ],
    [
        'title' => 'Divisi',
        'total' => $totalDivisi,
        'icon' => 'fas fa-briefcase',
        'route' => route('divisi'),
    ],
];
@endphp
<x-main-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div class="mt-6 flex flex-wrap justify-between">
        @foreach ($listData as $data)
            <a href="{{ $data['route'] }}"
                class="p-10 hover:bg-orange-400 bg-white-900 flex border-2 hover:border-none flex-col items-center hover:shadow-lg rounded-sm text-gray-300 hover:text-white-900 w-full sm:w-56 m-6 transition-all duration-300">
                <i class="{{ $data['icon'] }} text-5xl"></i>
                <h3 class="text-2xl font-semibold">{{ $data['total'] }}</h3>
                <p>{{ $data['title'] }}</p>
            </a>
        @endforeach
</x-main-layout>
