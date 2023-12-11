<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function tambah()
    {
        return view('karyawan.tambah');
    }

    public function simpan()
    {
        $input = request()->all();

        $validator = Validator::make($input, [
            'kodepegawai' => 'required|unique:karyawan',
            'namalengkap' => 'required|string',
            'divisi' => 'required|string',
            'departemen' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/karyawan/tambah')
                ->withErrors($validator)
                ->withInput();
        }

        $karyawan = new Karyawan();
        $karyawan->kodepegawai = $input['kodepegawai'];
        $karyawan->namalengkap = strtoupper($input['namalengkap']);
        $karyawan->divisi = strtolower($input['divisi']);
        $karyawan->departemen = strtolower($input['departemen']);

        $karyawan->save();

        return redirect('/karyawan')
            ->with('success', 'Data berhasil disimpan!');
    }

    public function index()
    {
        $karyawan = Karyawan::all();

        return view('karyawan.index', [
            'karyawan' => $karyawan,
        ]);
    }

    public function hapus($kodepegawai)
    {
        $karyawan = Karyawan::where('kodepegawai', $kodepegawai)->first();

        if (!$karyawan) {
            return redirect('/karyawan')
                ->with('error', 'Data karyawan tidak ditemukan!');
        }

        $karyawan->delete();

        return redirect('/karyawan')
            ->with('success', 'Data berhasil dihapus!');
    }
}
