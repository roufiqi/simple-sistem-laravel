<?php

namespace App\Http\Controllers;

use App\Models\nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    //
    public function index()
    {
        $data = nasabah::all();
        //$data = nasabah::orderBy('nomor_identitas', 'desc')->paginate(1);
        return view('nasabah/index')->with('data', $data);
    }

    public function detail($id)
    {
        $data = nasabah::where('nomor_identitas', $id)->first();
        return view('nasabah/show')->with('data', $data);
    }
}
