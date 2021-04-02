<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi';
    protected $fillable = ['jmlh_produksi', 'lokasi_produksi', 'jenis_produksi'];
    protected $guarded = [];
}
