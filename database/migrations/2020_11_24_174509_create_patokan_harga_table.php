<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatokanHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patokan_harga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('jenis');
            $table->string('harga');
            $table->string('berat')->default('1 kg');
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
        Schema::dropIfExists('patokan_harga');
    }
}