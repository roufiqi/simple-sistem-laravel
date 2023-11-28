<?php

namespace App\Http\Controllers;

use App\Models\nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data = nasabah::all();
        $data = nasabah::orderBy('nomor_identitas', 'desc')->paginate(5);
        return view('nasabah/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nasabah/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nomor_identitas', $request->nomor_identitas);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nomor_identitas' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required'
        ],[
            'nomor_identitas.required' => 'Nomor Identitas wajib diisi',
            'nomor_identitas.numeric' => 'Nomor Identitas wajib diisi dalam angka',
            'nama.required' => 'Nama wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);
        $data = [
            'nomor_identitas' => $request->input('nomor_identitas'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        nasabah::create($data);
        return redirect('nasabah')->with('success', 'Berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = nasabah::where('nomor_identitas', $id)->first();
        return view('nasabah/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = nasabah::where('nomor_identitas', $id)->first();
        return view('nasabah/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ],[
            'nama.required' => 'Nama wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        nasabah::where('nomor_identitas', $id)->update($data);
        return redirect('/nasabah')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        nasabah::where('nomor_identitas', $id)->delete();
        return redirect('/nasabah')->with('success', 'Berhasil hapus data');
    }
}
