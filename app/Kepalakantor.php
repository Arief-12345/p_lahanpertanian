<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepalakantor extends Model
{
    protected $table = 'kepalakantor';
    protected $fillable = ['user_id', 'nip', 'email', 'name', 'username', 'password'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}