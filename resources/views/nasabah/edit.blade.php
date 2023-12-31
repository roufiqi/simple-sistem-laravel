@extends('layout/aplikasi')

@section('konten')
    <a href="/nasabah" class="btn btn-secondary"><< Kembali</a>
    <form method="POST" action="{{'/nasabah/'.$data->nomor_identitas }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Nomor Identitas : {{ $data->nomor_identitas }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
