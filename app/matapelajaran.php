<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matapelajaran extends Model
{
    protected $table = 'matapelajaran';

    protected $fillable = [
    'id_jurusan',
    'nama',
    'deskripsi',
    ];
    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_jurusan');
    }
}
