<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    private $nama="Dimas Gistha";
    private $nrp ="5026221057";
    private $matkuls = ["Pweb","ASD","RKPL"];
    // public function index()
    // {
    //    $nama="Dimas Gistha";
    //     $nrp ="5026221057";
    //     $matkuls = ["Pweb","ASD"];
    //     return view("blog",[
    //         "nama_panjang" => $nama,
    //         "nrp" => $nrp,
    //         "matkuls"=> $matkuls,
    //     ]);
    // }
    public function mahasiswa($nama){
        return view("blog",[
            "nama_panjang" => $nama,
            "nrp" => $this->nrp,
            "matkuls"=> $this->matkuls
        ]);

    }
    public function formulir(){
        return view("form");

    }
    public function submitformulir(Request $request){
        $nama = $request->input('Nama');
        $nrp = $request->input('NRP');

        return $nama . " " . $nrp;
    }

    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);

    }
    public function tambah()
    {
    	return view('tambah');
    }
    public function store(request $request)
    {

	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);

	return redirect('/pegawai');

    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['pegawai' => $pegawai]);
    }
    public function update(Request $request)
{
	// update data pegawai
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

}
