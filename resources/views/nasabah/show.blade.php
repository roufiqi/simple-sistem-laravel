@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href='/nasabah' class="btn btn-secondary"><< Kembali</a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Nomor Identitas </b>{{ $data->nomor_identitas }}
        </p>
        <p>
            <b>Alamat </b>{{ $data->alamat }}
        </p>
    </div>
@endsection
