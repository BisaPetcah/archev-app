@php
$menus = [
    [
        'name' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'route' => 'user.dashboard',
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
                class="w-full h-full rounded-sm hover:bg-orange-900 hover:text-orange-600 @if (Route::currentRouteName() === $menu['route'])
                bg-orange-900 text-orange-600
            @endif  my-4">
                <a href="{{ route($menu['route']) }}" class="block px-4 py-2"><i
                        class="{{ $menu['icon'] }} mr-10"></i>{{ $menu['name'] }}</a>
            </li>
        @endforeach
    </ul>
    <hr class="border-t-2 border-gray-100">
    <ul class="px-3">
        <li class="w-full my-4 h-full hover:bg-orange-900 hover:text-orange-600">
            <a href="{{ route('profile.show') }}" class="block px-4 py-2"><i class="fas fa-cog mr-10"></i>Profile</a>
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
