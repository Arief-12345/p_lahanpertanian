<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi_panen';
    protected $fillable = ['kecamatan_id', 'komoditi_id', 'tahun', 'jmlh_produksi', 'luas_penggunaan_lahan'];
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function komoditi()
    {
        return $this->belongsTo(komoditihasilpanen::class);
    }
}
