<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';

    public function gejala() {
        return $this->belongsToMany('App\Gejala', 'aturan');
    }

    public function attachGejala($gejala_id) {
        $gejala = Gejala::find($gejala_id);
    return $this->gejala()->attach($gejala);
    }
}
