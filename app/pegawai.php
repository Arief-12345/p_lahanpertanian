<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['user_id', 'nip', 'username', 'password'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
