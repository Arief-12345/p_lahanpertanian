<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakantor extends Model
{
    protected $table = 'kepala_kantor';
    protected $fillable = ['user_id', 'nip', 'username', 'password'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}