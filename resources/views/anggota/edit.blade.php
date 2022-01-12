<x-main-layout>
    <x-slot name="title">
        Edit Anggota
    </x-slot>

    <div class="container pl-10 pr-48 mt-10">
        <form action="{{ route('anggota.update', ['member' => $data->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mt-4 flex flex-row">
                <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" class="w-56" />
                <div class="mt-1 w-full">
                    <x-jet-input id="name" class="w-full" type="text" name="name"
                        :value="old('name') ?? $data->name" placeholder="dewi123" required autofocus
                        autocomplete="name" />
                    <x-jet-input-error for="name" />
                </div>
            </div>
            <div class="mt-4 flex flex-row">
                <x-jet-label for="email" value="{{ __('Alamat Email') }}" class="w-56" />
                <div class="mt-1 w-full">
                    <x-jet-input id="email" class="w-full" type="email" name="email"
                        :value="old('email') ?? $data->email" placeholder="dewi123@exaple.com" required autofocus
                        autocomplete="email" />
                    <x-jet-input-error for="email" />
                </div>
            </div>
            <div class="mt-4 flex flex-row">
                <x-jet-label for="generation" value="{{ __('Tahun Angkatan') }}" class="w-56" />
                <div class="w-full">
                    <select name="generation_id" id="generation"
                        class="w-24 border-orange-200 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50 shadow-sm rounded-lg">
                        @foreach ($generations as $generation)
                            <option value="{{ $generation->id }}"
                                {{ old('generation_id') ?? $data->generation_id == $generation->id ? 'selected' : '' }}>
                                {{ $generation->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="generation" />
                </div>
            </div>
            <div class="mt-4 flex flex-row">
                <x-jet-label for="division" value="{{ __('Divisi') }}" class="w-56" />
                <div class="w-full">
                    <select name="division_id" id="division"
                        class="w-48 border-orange-200 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50 shadow-sm rounded-lg">
                        @foreach ($divisions as $division)
                            <option value="{{ $division->id }}"
                                {{ old('division_id') ?? $data->division_id == $division->id ? 'selected' : '' }}>
                                {{ $division->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="division" />
                </div>
            </div>
            <div class="mt-4 flex flex-row">
                <x-jet-label for="status" value="{{ __('Status') }}" class="w-56" />
                <div class="w-full">
                    <select name="status" id="status"
                        class="w-24 border-orange-200 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50 shadow-sm rounded-lg">
                        @foreach (['Aktif', 'Pasif'] as $status)
                            <option value="{{ strtolower($status) }}"
                                {{ old('status') ?? $data->status == strtolower($status) ? 'selected' : '' }}>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <x-jet-input-error for="status" />
            </div>
            <div class="mt-4 flex flex-row">
                <x-jet-label for="foto" value="{{ __('Foto') }}" class="w-56" />
                <div class="w-full mt-1">
                    <x-jet-input id="foto" type="file" name="foto" />
                    <x-jet-input-error for="foto" />
                </div>
            </div>
            <div class="flex flex-row mt-3 justify-end w-full">
                <button type="reset"
                    class="bg-red rounded-md px-6 py-2 text-white-900 font-semibold mr-3">Batal</button>
                <x-modal>
                    <x-slot name="trigger">
                        <div class="bg-blue-600 rounded-md px-6 py-2 text-white-900 font-semibold">Simpan</div>
                    </x-slot>
                    <x-slot name="title">
                        Edit Anggota
                    </x-slot>
                    <x-slot name="text">
                        <p>Apakah kamu ingin menyimpan data anggota tersebut?</p>
                    </x-slot>
                    <x-slot name="action">
                        <button type="submit" class="text-black">Simpan</button>
                    </x-slot>
                </x-modal>
            </div>
        </form>
    </div>
</x-main-layout>
