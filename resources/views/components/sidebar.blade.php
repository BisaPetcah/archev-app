@php
$menus = [
    [
        'name' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'route' => 'dashboard',
    ],
    [
        'name' => 'Semua Anggota',
        'icon' => 'fas fa-user-friends',
        'route' => 'anggota',
    ],
    [
        'name' => 'Anggota Aktif',
        'icon' => 'fas fa-user-friends',
        'route' => 'anggota.aktif',
    ],
    [
        'name' => 'Anggota Pasif',
        'icon' => 'fas fa-user-friends',
        'route' => 'anggota.pasif',
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
        @foreach ($menus as $menu)
            <li
                class="w-full h-full rounded-sm @if (Route::is($menu['route']))
                bg-orange-900 text-orange-600 @else hover:bg-orange-900 hover:text-orange-600 transition-all duration-100
            @endif  my-4 ">
                <a href="{{ route($menu['route']) }}" class="block px-4 py-2"><i
                        class="{{ $menu['icon'] }} mr-10"></i>{{ $menu['name'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
