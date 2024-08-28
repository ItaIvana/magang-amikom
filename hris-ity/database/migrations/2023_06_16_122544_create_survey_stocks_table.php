<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sales');
            $table->string('nama_barang');
            $table->string('nama_outlet');
            $table->integer('jumlah_stok');
            $table->integer('jumlah_display');
            $table->dateTime('visit_datetime');
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
        Schema::dropIfExists('survey_stocks');
    }
}
