<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_dosen');
            $table->string('jabatan_fungsional');
            $table->string('homebase');
            $table->string('jabatan_struktural')->nullable();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('_id')
            ->references('id')->on('pegawai')
            ->onDelete('cascade');
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
        Schema::dropIfExists('dosen');
    }
}