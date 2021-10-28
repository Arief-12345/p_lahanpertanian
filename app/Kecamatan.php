<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = ['nama_kecamatan', 'warna', 'geojson'];
    protected $guarded = [];

    public function gapoktani()
    {
        return $this->hasOne(Gapoktani::class);
    }

    public function produksi()
    {
        return $this->hasOne(Produksi::class);
    }

    public function potensilahanpertanian()
    {
        return $this->hasOne(Potensilahanpertanian::class);
    }

    public function penggunaanlahan()
    {
        return $this->hasOne(Penggunaanlahan::class);
    }
}
