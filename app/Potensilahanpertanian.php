<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potensilahanpertanian extends Model
{
    protected $table = 'potensi_lahan_pertanian';
    protected $fillable = ['kecamatan_id', 'luas_lahan_kosong', 'tahun'];
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
