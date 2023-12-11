<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaikuliahTable extends Migration
{
    public function up()
    {
        Schema::create('nilaikuliahs', function (Blueprint $table) {
            $table->id(); // AutoIncrement
            $table->char('nrp', 6);
            $table->integer('nilai_angka');
            $table->integer('sks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilaikuliahs');
    }
}
