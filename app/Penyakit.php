<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $fillable = [
    'kode', 'nama', 'penyebab', 'definisi', 'pengobatan',
    ];

    public function gejala() {
        return $this->belongsToMany('App\Gejala', 'aturan');
    }

    public function bobot() {
        return $this->belongsToMany('App\Bobot', 'aturan');
    }
}
