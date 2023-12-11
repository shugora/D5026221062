<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilaikuliah extends Model
{
    protected $table = 'nilaikuliah';

    protected $fillable = [
        'nrp',
        'nilai_angka',
        'sks',
    ];

    public function getNilaiHuruf()
    {
        if ($this->nilai_angka <= 40) {
            return 'D';
        } elseif ($this->nilai_angka <= 60) {
            return 'C';
        } elseif ($this->nilai_angka <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }
    public function getBobot()
    {
        if ($this->nilai_angka <= 40) {
            return 0;
        } elseif ($this->nilai_angka <= 60) {
            return 1;
        } elseif ($this->nilai_angka <= 80) {
            return 2;
        } else {
            return 3;
        }
    }
}
