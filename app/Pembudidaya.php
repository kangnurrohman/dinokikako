<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembudidaya extends Model
{
    protected $table = 'pembudidaya';
    protected $fillable = [
        'nama', 'email', 'alamat', 'user_id',
    ];
}
