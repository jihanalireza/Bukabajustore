<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'master_settings';
    protected $fillable = ['foto','lokasifoto','nama_web','id_kota','alamat','no_telp','email','deskripsi'];
}
