<x-auth-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-quando text-orange-400 text-center">{{ __('Daftar Akun Archev') }}</h1>
    </x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="flex justify-between space-x-4">
            <div class="w-full">
                <x-jet-label for="first_name" value="{{ __('Nama Depan') }}" />
                <x-jet-input id="first_name" class="block mt-1" type="text" name="first_name"
                    :value="old('first_name')" placeholder="Dewi" required autofocus autocomplete="first_name" />
                <x-jet-input-error for="first_name" />
            </div>
            <div class="w-full">
                <x-jet-label for="last_name" value="{{ __('Nama Belakang') }}" />
                <x-jet-input id="last_name" class="block mt-1" type="text" name="last_name" :value="old('last_name')"
                    placeholder="Sartika" required autofocus autocomplete="last_name" />
                <x-jet-input-error for="last_name" />
            </div>
        </div>

        <div class="mt-4">
            <x-jet-label for="username" value="{{ __('Nama Pengguna') }}" />
            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                placeholder="dewi123" required autofocus autocomplete="username" />
            <x-jet-input-error for="username" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="dewi@email.com" required />
            <x-jet-input-error for="email" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-jet-input-error for="password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Kata Sandi') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2 text-sm text-gray-600">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                        </div>
                    </div>
                </x-jet-label>
                <x-jet-input-error for="terms" />
            </div>
        @endif

        <x-jet-button class="mt-6 w-full">
            {{ __('Daftar') }}
        </x-jet-button>

        <p class="text-center mt-6 text-gray-600 text-sm">Sudah punya akun? <a
                class="underline hover:text-gray-900 font-semibold" href="{{ route('login') }}">
                {{ __('Masuk disini') }}
            </a>
        </p>
    </form>
</x-auth-layout>
