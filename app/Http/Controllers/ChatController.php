<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $pesan = \DB::table('chat')->first()->pesan;

        $emoticonMap = [
            ':))' => '1.png',
            ':3' => '2.png',
            ':P' => '3.png',
            ':C' => '4.png',
            ';)' => '5.png',
          ];

        return view('chat', compact('pesan', 'emoticonMap'));
    }
}
