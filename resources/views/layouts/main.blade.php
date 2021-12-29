<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/cr-1.5.5/sb-1.3.0/sp-1.4.0/datatables.min.css" />
    {{-- icons --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <style>
        table.dataTable.no-footer {
            border-bottom: none;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen w-full lg:mx-auto">
        @livewire('component.sidebar')
        <div class="basis-4/5 w-full">
            <main class="bg-white-100 h-screen px-16 container py-3">
                <x-jet-banner />
                <x-topbar>
                    <x-slot name="title">
                        {{ $title }}
                    </x-slot>
                </x-topbar>
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('modals')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    @livewireScripts
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/cr-1.5.5/sb-1.3.0/sp-1.4.0/datatables.min.js"></script>
    @yield('js')
</body>

</html>
