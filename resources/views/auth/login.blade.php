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

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Masukkan Password" required autocomplete="current-password" />
        </div>

        <x-jet-button class="mt-6 w-full">
            {{ __('Masuk') }}
        </x-jet-button>

        <div class="mt-6 flex flex-col items-center text-sm">
            <p>Belum punya akun? <a class="underline hover:text-gray-900 font-semibold" href="{{ route('register') }}">
                    {{ __('Daftar disini') }}
                </a>
            </p>

            @if (Route::has('password.request'))
                <a class="mt-6 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Lupa Kata Sandi?') }}
                </a>
            @endif

        </div>
    </form>
</x-auth-layout>
