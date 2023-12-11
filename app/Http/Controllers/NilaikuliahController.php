<?php

namespace App\Http\Controllers;

use App\Models\NilaiKuliah;
use Illuminate\Http\Request;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliahs = NilaiKuliah::all();

        return view('nilaikuliah.index', compact('nilaikuliahs'));
    }

    public function store(Request $request)
    {
        $nilaikuliah = new NilaiKuliah();
        $nilaikuliah->nrp = $request->input('nrp');
        $nilaikuliah->nilai_angka = $request->input('nilai_angka');
        $nilaikuliah->sks = $request->input('sks');

        $nilaikuliah->save();

        return redirect()->route('nilaikuliah.index');
    }
    public function create()
{
    return view('nilaikuliah.create');
}

}
