<x-main-layout>
    <x-slot name="title">
        Divisi {{ $divisi->name }}
    </x-slot>
    <div class="container px-10 mb-5">
        <div class="flex flex-wrap justify-between mb-5">
            @foreach ($members as $data)
                <a href="{{ route('anggota.detail', ['member' => $data->id]) }}" class="block mx-auto">
                    <div
                        class="flex flex-col justify-center items-center px-10 rounded-lg w-64 h-48 mt-6 bg-white-900 hover:border-orange-400 hover:shadow-none border-2 border-gray-400 transition-all duration-200 shadow-lg">
                        <div alt="" class="w-20 h-20 bg-cover rounded-full"
                            style="background-image: url({{ asset('storage/' . $data->photo_path) }})"></div>
                        <h2 class="font-semibold mt-2 text-center">{{ $data->name }}</h2>
                        <h5 class="text-sm text-gray-500">{{ $data->email }}</h5>
                        <h5 class="text-sm font-semibold text-gray-500">{{ $data->generation->name }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
        {{ $members->links() }}
    </div>
</x-main-layout>
