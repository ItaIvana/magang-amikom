<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nik');
            $table->integer('npwp');
            $table->string('no_pegawai');
            $table->integer('no_kk');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('divisi');
            $table->dateTime('tmt');
            $table->dateTime('purna_tugas');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}