<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAjuanUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuan_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomer_hp');
            $table->string('alamat');
            $table->string('nik');
            $table->string('ktp');
            $table->string('no_rekening');
            $table->string('status')->default('proses');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('ajuan_user');
    }
}