@php
$menu = [
    [
        'name' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'route' => 'dashboard',
    ],
    [
        'name' => 'Anggota',
        'icon' => 'fas fa-user-friends',
        'submenu' => [
            [
                'name' => 'Semua',
                'route' => 'anggota',
            ],
            [
                'name' => 'Aktif',
                'route' => 'anggota.aktif',
            ],
            [
                'name' => 'Pasif',
                'route' => 'anggota.pasif',
            ],
        ],
    ],
    [
        'name' => 'Divisi',
        'icon' => 'fas fa-briefcase',
        'route' => 'divisi',
    ],
];
@endphp
<div class="w-full border-gray-100 border-r-2 basis-1/5 bg-white-900">
    <div class="p-7 flex items-center justify-center border-b-2 border-gray-100">
        <img src="{{ asset('image/logo.png') }}" alt="">
    </div>
    <ul class="px-3">
        <li class="w-full h-full rounded-sm bg-orange-900 text-orange-600 my-4">
            <a href="#" class="block px-4 py-2"><i class="fas fa-tachometer-alt mr-10"></i>Dashboard</a>
        </li>
        <li class="w-full h-full my-4 hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block px-4 py-2"><i class="fas fa-user-friends mr-10"></i>Semua Anggota</a>
        </li>
        <li class="w-full h-full my-4 hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block px-4 py-2"><i class="fas fa-user-friends mr-10"></i>Anggota Aktif</a>
        </li>
        <li class="w-full h-full my-4 hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block px-4 py-2"><i class="fas fa-user-friends mr-10"></i>Anggota Pasif</a>
        </li>
        <li class="w-full h-full my-4 hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block px-4 py-2"><i class="fas fa-briefcase mr-10"></i>Divisi</a>
        </li>
    </ul>
    <hr class="border-t-2 border-gray-100">
    <ul class="px-3">
        <li class="w-full my-4 h-full hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block px-4 py-2"><i class="fas fa-cog mr-10"></i>Profile</a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button onclick="event.preventDefault();
                                    this.closest('form').submit();"
                    class="text-left px-4 py-2 hover:bg-orange-900 hover:text-orange-600 w-full rounded-sm"><i
                        class="fas fa-sign-out-alt mr-10"></i></a>{{ __('Keluar') }}</button>
            </form>
        </li>
    </ul>
</div>
