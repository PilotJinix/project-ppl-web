<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewProduk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama','harga','gambar','deskripsi','diskon','stok','kondisi','berat','kategori'
    ];
}