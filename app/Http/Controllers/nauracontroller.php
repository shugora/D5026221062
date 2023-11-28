<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nauracontroller extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h3> Hasil Perkalian : " . (string)$c . "</h3>";
    }

    public function showBlog(){
        $nama = "Hasna";
        $alamat = "Bandung";
        $umur = 20;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

}
