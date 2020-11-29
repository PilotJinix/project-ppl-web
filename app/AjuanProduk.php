<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjuanProduk extends Model
{
    protected $table = 'ajuan_produk_mitra';

    protected $fillable = [
        'nama_produk',
        'berat_produk',
        'foto_produk',
        'deskripsi_produk',
        'user_id'
    ];
}