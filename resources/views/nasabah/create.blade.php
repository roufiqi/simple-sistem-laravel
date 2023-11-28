@extends('layout/aplikasi')

@section('konten')
    <form method="POST" action="/nasabah">
        @csrf
        <div class="mb-3">
            <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
            <input type="text" class="form-control" name="nomor_identitas" id="nomor_identitas" value="{{ Session::get('nomor_identitas') }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{ Session::get('alamat') }}</textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection
