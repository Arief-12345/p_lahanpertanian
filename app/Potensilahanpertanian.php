<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potensilahanpertanian extends Model
{
    protected $table = 'potensi_lahan_pertanian';
    protected $fillable = ['luas_lahan', 'lokasi_lahan', 'status_lahan'];
    protected $guarded = [];
}
