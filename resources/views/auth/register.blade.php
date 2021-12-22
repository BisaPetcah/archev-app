<x-auth-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-quando text-orange-400 text-center">{{ __('Daftar Akun Archev') }}</h1>
    </x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <x-jet-label for="name" value="{{ __('Nama') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                placeholder="John Chena" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-jet-label for="username" value="{{ __('Nama Pengguna') }}" />
            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                placeholder="john123" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="john@example.com" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Kata Sandi') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
        @endif

        <x-jet-button class="mt-6 w-full">
            {{ __('Register') }}
        </x-jet-button>

        <div class="mt-6 flex flex-col items-center text-sm">
            <p>Sudah punya akun?
                <a class="underline hover:text-gray-900 font-semibold" href="{{ route('login') }}">
                    {{ __('Masuk') }}
                </a>
            </p>
        </div>
    </form>
</x-auth-layout>
