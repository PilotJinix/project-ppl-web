<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailCheckOut extends Model
{
    protected $table = 'detail_checkout';

    protected $fillable = [
        'jumlah',
        'metode_pembayaran',
        'biaya_pengiriman',
        'diskon',
        'total_harga',
        'nama_penerima',
        'email_penerima',
        'no_hp_penerima',
        'alamat_penerima',
        'label_alamat_penerima',
        'kode_pos_penerima',
        'kurir',
        'status',
        'user_id',
        'produk_id',
        'batas_pembayaran',
        'time'
    ];
}