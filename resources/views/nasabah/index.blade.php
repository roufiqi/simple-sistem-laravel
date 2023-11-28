@extends('layout/aplikasi')

@section('konten')
    <a href="/nasabah/create" class="btn btn-primary">+ Tambah Data Nasabah</a>
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
                    <td>
                        <a class='btn btn-secondary btn-sm' href='{{ url('/nasabah/'.$item->nomor_identitas) }}'>Detail</a>
                        <a class='btn btn-warning btn-sm' href='{{ url('/nasabah/'.$item->nomor_identitas.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ '/nasabah/'.$item->nomor_identitas }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
