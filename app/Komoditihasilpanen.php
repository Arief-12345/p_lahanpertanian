<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditihasilpanen extends Model
{
    protected $table = 'komoditi';
    protected $fillable = ['nama_komoditi', 'warna'];
    protected $guarded = [];

    public function produksi()
    {
        return $this->hasOne(Produksi::class);
    }
}
