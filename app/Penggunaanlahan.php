<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggunaanlahan extends Model
{
    protected $table = 'penggunaan_lahan';
    protected $fillable = ['kecamatan_id', 'luas_penggunaan_lahan'];
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
