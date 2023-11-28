@extends('layout/aplikasi')

@section('konten')
    <table class="table">
        <thead>
            <tr>
                <th>Nomor Identitas</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nomor_identitas }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td><a class='btn btn-secondary btn-sm' href='{{ url('/nasabah/'.$item->nomor_identitas) }}'>Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $data->links() }} --}}
@endsection
