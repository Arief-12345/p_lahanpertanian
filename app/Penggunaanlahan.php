<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggunaanlahan extends Model
{
    protected $table = 'penggunaan_lahan';
    protected $fillable = ['kecamatan_id', 'luas_penggunaan_lahan', 'komoditi_id', 'tahun'];
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function komoditi()
    {
        return $this->belongsTo(Komoditihasilpanen::class);
    }
}
