<x-main-layout>
    <x-slot name="title">
        Anggota
    </x-slot>
    <div class="mt-4 bg-white-900 rounded-xl shadow-lg text-center p-4">
        <table id="table-anggota">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
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
