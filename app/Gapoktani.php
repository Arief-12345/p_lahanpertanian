<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gapoktani extends Model
{
    protected $table = 'gapoktani_baru';
    protected $fillable = ['nama_gapoktani', 'ketua_gapoktani', 'kecamatan_id'];
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
