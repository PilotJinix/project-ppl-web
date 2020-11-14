<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjuanUser extends Model
{
    protected $table = 'ajuan_user';

    protected $fillable = [
        'nama_lengkap','email','alamat','nik','ktp','no_rekening','no_hp','user_id',
    ];
}