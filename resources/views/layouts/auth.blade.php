<x-guest-layout>
    <div class="flex flex-row h-screen">
        <div class="basis-1/2 bg-orange-100 lg:block sm:hidden">
            <div class="h-screen content-center grid justify-center">
                <img src="{{ asset('image/login_image.png') }}" alt="" width="600">
            </div>
        </div>
        <div class="lg:basis-1/2 w-full bg-white">
            <div class="container mx-auto p-24 flex flex-col justify-center content-center h-screen">
                {{ $header }}
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
</x-guest-layout>
