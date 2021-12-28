<x-main-layout>
    <x-slot name="title">
        Divisi
    </x-slot>
    <div class="mt-14 flex justify-between space-x-10">
        <div>
            <a href="#"
                class="basis-1/3 px-10 py-8 bg-white-900 hover:shadow-none border-2 border-orange-400 flex flex-row shadow-lg rounded-lg justify-center items-center">
                <div class="bg-orange-400 p-3 rounded-md">
                    <img src="{{ asset('icon/web.svg') }}" alt="">
                </div>
                <div class="ml-5">
                    <h3 class="text-2xl font-semibold">Divisi Web</h3>
                    <p>45 Anggota</p>
                </div>
            </a>
        </div>
        <div>
            <a href="#"
                class="basis-1/3 px-10 py-8 bg-white-900 border-2 border-gray-400 flex flex-row  rounded-lg justify-center items-center">
                <div class="bg-orange-400 p-3 rounded-md">
                    <img src="{{ asset('icon/android.svg') }}" alt="">
                </div>
                <div class="ml-5">
                    <h3 class="text-2xl font-semibold">Divisi Android</h3>
                    <p>45 Anggota</p>
                </div>
            </a>
        </div>
        <div>
            <a href="#"
                class="basis-1/3 px-10 py-8 bg-white-900 border-2 border-gray-400 flex flex-row  rounded-lg justify-center items-center">
                <div class="bg-orange-400 p-3 rounded-md">
                    <img src="{{ asset('icon/game.svg') }}" alt="">
                </div>
                <div class="ml-5">
                    <h3 class="text-2xl font-semibold">Divisi Game</h3>
                    <p>45 Anggota</p>
                </div>
            </a>
        </div>
    </div>
    <div class="mt-14 flex justify-between space-x-10">
        <div
            class="basis-1/3 px-10 py-8 bg-white-900 border-2 border-gray-400 flex flex-row  rounded-lg justify-center items-center">
            <div class="bg-orange-400 p-3 rounded-md">
                <img src="{{ asset('icon/startup.svg') }}" alt="">
            </div>
            <div class="ml-5">
                <h3 class="text-2xl font-semibold">Divisi Startup</h3>
                <p>45 Anggota</p>
            </div>
        </div>
        <div
            class="basis-1/3 px-10 py-8 bg-white-900 border-2 border-gray-400 flex flex-row  rounded-lg justify-center items-center">
            <div class="bg-orange-400 p-3 rounded-md">
                <img src="{{ asset('icon/uiux.svg') }}" alt="">
            </div>
            <div class="ml-5">
                <h3 class="text-2xl font-semibold">Divisi UI/UX</h3>
                <p>45 Anggota</p>
            </div>
        </div>
        <div class="basis-1/3 p-10">

        </div>
    </div>
</x-main-layout>
