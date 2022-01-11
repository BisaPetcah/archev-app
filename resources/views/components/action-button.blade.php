<div class="flex flex-row justify-between">
    <a href="{{ route('anggota.edit', ['member' => $data->id]) }}"
        class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-blue-100 border-2 border-gray-600"><i
            class="fas fa-edit"></i> Edit</a>
    <form action="{{ route('anggota.delete', ['member' => $data->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="bg-gray-400 px-2 py-1 text-sm rounded-sm text-red border-2 border-gray-600"><i
                class="fas fa-trash"></i> Delete</button>
    </form>
</div>
