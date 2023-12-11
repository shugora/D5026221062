<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));

    }
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nrp = $request->input('nrp');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->ipk = $request->input('ipk');
        $mahasiswa->save();

        return redirect()->route('mahasiswa');
    }
    public function delete($id)
        {
            $mahasiswa = Mahasiswa::findOrFail($id);
            $mahasiswa->delete();

            return redirect()->route('mahasiswa');
        }
}
