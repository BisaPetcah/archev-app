<x-guest-layout>
    <div class="flex flex-row h-screen">
        <div class="basis-1/2 bg-orange-100 lg:block sm:hidden">
            <div class="h-screen content-center grid justify-center">
                <img src="{{ asset('image/login_image.png') }}" alt="" width="600">
            </div>
        </div>
        <div class="lg:basis-1/2 w-full bg-white overflow-auto 2xl:flex 2xl:items-center">
            <div class="container mx-auto px-24 py-10">
                {{ $header }}


                <div class="mt-8">

                    <a href="#"
                        class="border-2 border-black hover:border-gray-300 hover:text-gray-300 flex justify-center content-center rounded-lg py-2 font-semibold"><img
                            src="{{ asset('icon/google.svg') }}" alt="google" width="20" class="mr-3"> Masuk
                        Dengan Google</a>

                    <div class="flex my-3 items-center">
                        <hr class="basis:1/2 inline-block w-full">
                        <span class="inline-block mx-2 text-gray-300 text-sm font-light">atau</span>
                        <hr class="basis:1/2 inline-block w-full">
                    </div>

                    {{ $slot }}
                </div>
            </div>
        </div>
</x-guest-layout>
