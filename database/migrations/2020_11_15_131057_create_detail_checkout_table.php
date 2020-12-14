<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_checkout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jumlah');
            $table->string('metode_pembayaran');
            $table->string('batas_pembayaran');
            $table->string('biaya_pengiriman');
            $table->string('diskon');
            $table->string('total_harga');
            $table->string('nama_penerima');
            $table->string('email_penerima');
            $table->string('no_hp_penerima');
            $table->string('alamat_penerima');
            $table->string('struk');
            $table->string('label_alamat_penerima')->nullable();
            $table->string('kode_pos_penerima');
            $table->string('kota_penerima');
            $table->string('catatan_pembelian')->nullable();
            $table->string('status_checkout')->default('Menunggu Pembayaran');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('produk_id')->unsigned();
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_checkout');
    }
}