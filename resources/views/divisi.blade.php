<x-main-layout>
    <x-slot name="title">
        Divisi
    </x-slot>
    <div class="mt-14 flex flex-wrap justify-center overflow-auto">
        @forelse ($listDivisi as $divisi)
            <a href="{{ route('divisi.detail', $divisi->name) }}"
                class="py-8 bg-white-900 hover:border-orange-400 hover:shadow-none border-2 border-gray-400 flex flex-row shadow-lg rounded-lg justify-center items-center w-full sm:w-64 m-6 transition-all duration-200">
                <div class="bg-orange-400 p-3 rounded-md w-15">
                    <img src="{{ asset('icon/divisi/' . ($divisi->icon_name ?? 'web.svg')) }}" alt=""
                        class="w-10 h-10 bg-cover">
                </div>
                <div class="ml-5 w-32">
                    <h3 class="text-xl truncate overflow-hidden font-semibold">{{ $divisi->name }}</h3>
                    <p>{{ $divisi->members->count() }} Anggota</p>
                </div>
            </a>
        @empty

        @endforelse
    </div>
</x-main-layout>
