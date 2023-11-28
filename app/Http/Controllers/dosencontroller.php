<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosencontroller extends Controller
{
    public function shownama(){
        return "anda telah mengasih". $nama;
    }
    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
