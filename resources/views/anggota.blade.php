<x-main-layout>
    <x-slot name="title">
        Anggota
    </x-slot>
    <div class="mt-4">
        <table class="bg-white-900 rounded-xl shadow-lg text-center py-4" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 0;
                @endphp
                @foreach ($dataAnggota as $anggota)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{ $anggota->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @section('js')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
    @endsection
</x-main-layout>
