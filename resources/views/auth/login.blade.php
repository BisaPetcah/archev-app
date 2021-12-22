<x-auth-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-quando text-orange-400 text-center">{{ __('Selamat Datang di ArChev') }}</h1>
    </x-slot>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Masukkan Email" required autofocus />
        </div>

        <div class="mt-6">
            <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Masukkan Password" required autocomplete="current-password" />
        </div>
        <div class="flex items-center justify-between mt-4">
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="text-sm mt-6 underline hover:text-gray-900 text-gray-600"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa Kata Sandi?') }}
                </a>
            @endif
        </div>

        <x-jet-button class="mt-6 w-full">
            {{ __('Masuk') }}
        </x-jet-button>

        <p class="text-center mt-6 text-gray-600 text-sm">Belum punya akun? <a
                class="underline hover:text-gray-900 font-semibold" href="{{ route('register') }}">
                {{ __('Daftar disini') }}
            </a>
        </p>
    </form>
</x-auth-layout>
