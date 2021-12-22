<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white-900 bg-orange-300 py-2 border-transparent tracking-widest hover:bg-orange-900 active:bg-orange-900 focus:outline-none focus:border-orange-900 focus:ring focus:ring-orange-900 disabled:opacity-25 transition font-semibold']) }}>
    {{ $slot }}
</button>
