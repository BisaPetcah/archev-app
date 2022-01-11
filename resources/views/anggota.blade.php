<x-main-layout>
    <x-slot name="title">
        Anggota
    </x-slot>
    <div class="flex flex-row mt-8 items-center h-8">
        <a href="{{ route('anggota.create') }}"
            class="bg-orange-400 text-white-900 rounded-lg px-5 text-sm h-full items-center flex"><i
                class="fas fa-plus mr-2"></i>Tambah
            Anggota</a>
    </div>
    <div class="mt-4 bg-white-900 rounded-xl shadow-lg text-center p-4">
        <table class="compact stripe" id="table-anggota">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th class="w-10">Divisi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th class="w-32">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
    @push('js')
        @php
            $url = '';
            $routes = ['anggota', 'anggota.aktif', 'anggota.pasif'];
            foreach ($routes as $route) {
                if (Route::is($route)) {
                    $url = route($route);
                }
            }
        @endphp
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table-anggota').DataTable({
                    serverside: true,
                    responsive: true,
                    ajax: {
                        url: "{{ $url }}"
                    },
                    columns: [{
                            "data": "id",
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'divisi',
                            name: 'divisi'
                        },
                        {
                            data: 'angkatan',
                            name: 'angkatan'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'aksi',
                            name: 'aksi',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });
        </script>
    @endpush
</x-main-layout>
