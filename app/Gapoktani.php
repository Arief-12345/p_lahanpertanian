<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gapoktani extends Model
{
    protected $table = 'gapoktani';
    protected $fillable = ['nama_gapoktani', 'ketua_gapoktani', 'jmlh_anggota', 'lokasi_gapoktani'];
    protected $guarded = [];
}
