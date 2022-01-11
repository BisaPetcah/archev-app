<x-main-layout>
    <x-slot name="title">
        Divisi {{ $divisi->name }}
    </x-slot>
    <div class="container px-10">
        <div class="flex flex-wrap justify-between">
            @foreach ($divisi->members as $data)
                <div
                    class="flex flex-col justify-center items-center px-10 rounded-lg w-64 h-48 mt-6 mx-auto bg-white-900 hover:border-orange-400 hover:shadow-none border-2 border-gray-400 transition-all duration-200 shadow-lg">
                    <img src="{{ asset('storage/' . $data->photo_path) }}" alt="" class="w-20 rounded-full">
                    <h2 class="font-semibold mt-2">{{ $data->name }}</h2>
                    <h5 class="text-sm text-gray-500">{{ $data->email }}</h5>
                    <h5 class="text-sm font-semibold text-gray-500">{{ $data->generation->name }}</h5>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
