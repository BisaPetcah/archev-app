<div class="w-full border-gray-100 border-r-2 basis-1/5 bg-white-900">
    <div class="p-7 flex items-center justify-center border-b-2 border-gray-100">
        <img src="{{ asset('image/logo.png') }}" alt="">
    </div>
    <ul class="px-3">
        <li class="w-full h-full rounded-sm bg-orange-900 text-orange-600 my-4">
            <a href="#" class="block p-2">
                <img src="{{ asset('icon/dashboard_active.svg') }}" alt="" class="inline mr-10">Dashboard</a>
        </li>
        <li class="w-full h-full my-4">
            <div x-data="{ open: false }">
                <div @click="open = ! open" class="hover:bg-orange-900 hover:text-orange-600">
                    <span class="block p-2">
                        <img src="{{ asset('icon/people.svg') }}" alt="" class="inline mr-10">Anggota</span>
                </div>
                <div x-show="open" class=" mt-2 rounded-md" style="display: none;" @click="open = false">
                    <div class="rounded-sm ring-2 ring-orange-200">
                        <ul class="text-sm list-disc list-inside">
                            <li
                                class="px-3 hover:ring-2 my-2 rounded-sm ring-orange-200 text-black hover:bg-orange-900 hover:text-orange-600">
                                <a href="#" class="inline-block py-2 px-3">Semua</a>
                            </li>
                            <li
                                class="px-3 hover:ring-2 my-2 rounded-sm ring-orange-200 text-black hover:bg-orange-900 hover:text-orange-600">
                                <a href="#" class="inline-block py-2 px-3">Aktif</a>
                            </li>
                            <li
                                class="px-3 hover:ring-2 my-2 rounded-sm ring-orange-200 text-black hover:bg-orange-900 hover:text-orange-600">
                                <a href="#" class="inline-block py-2 px-3">pasif</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="w-full h-full my-4 hover:bg-orange-900 hover:text-orange-600">
            <a href="#" class="block p-2">
                <img src="{{ asset('icon/bag.svg') }}" alt="" class="inline mr-10">Divisi</a>
        </li>
    </ul>
    <hr class="border-t-2 border-gray-100">
    <div class="px-3">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button onclick="event.preventDefault();
                                    this.closest('form').submit();"
                class="text-left block p-2 hover:bg-orange-900 hover:text-orange-600 w-full rounded-sm my-4"><img
                    src="{{ asset('icon/exit.svg') }}" alt="" class="inline mr-10"></a>{{ __('Keluar') }}</button>
        </form>
    </div>
</div>
