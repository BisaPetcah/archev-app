<x-main-layout>
    <x-slot name="title">
        Edit Profil
    </x-slot>
    <div class="container px-10 flex flex-row w-full justify-between space-x-10 mt-10">
        <div class="bg-white-900 w-full rounded-lg shadow-lg flex flex-col items-center">
            <img src="{{ $user->profile_photo_path ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&color=7F9CF5&background=EBF4FF' }}"
                alt="" class="rounded-full w-24 my-7">
            <div class="border-2 w-full"></div>
            <div class="w-full px-10 py-5">
                <div class="">
                    <h4 class="font-semibold text-orange-200">Nama Lengkap:</h4>
                    <h5 class="font-semibold mt-2">{{ $user->name }}</h5>
                </div>
                <div class="mt-3">
                    <h4 class="font-semibold text-orange-200">Email:</h4>
                    <h5 class="font-semibold mt-2">{{ $user->email }}</h5>
                </div>
                <div class="mt-3">
                    <h4 class="font-semibold text-orange-200">Name Pengguna:</h4>
                    <h5 class="font-semibold mt-2">{{ $user->username }}</h5>
                </div>
            </div>
        </div>
        <div class="bg-white-900 w-full rounded-lg shadow-lg flex flex-col items-center">
            <h2 class="font-semibold text-xl my-5">Detail Personal</h2>
            <div class="border-2 w-full"></div>
            <div class="w-full px-10">
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mt-4">
                        <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name') ?? $user->name" placeholder="{{ $user->name }}" required />
                        <x-jet-input-error for="email" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email') ?? $user->email" placeholder="{{ $user->email }}" required />
                        <x-jet-input-error for="email" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="username" value="{{ __('Nama Pengguna') }}" />
                        <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username"
                            :value="old('username') ?? $user->username" placeholder="{{ $user->username }}"
                            required />
                        <x-jet-input-error for="username" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                            autocomplete="new-password" />
                        <x-jet-input-error for="password" />
                    </div>
                    <x-jet-button class="my-6 w-full">
                        {{ __('Simpan') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
