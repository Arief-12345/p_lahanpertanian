<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditihasilpanen extends Model
{
    protected $table = 'komoditi_hasil_panen';
    protected $fillable = ['nama_komoditi', 'jmlh_komoditi', 'lokasi_komoditi'];
    protected $guarded = [];
}
