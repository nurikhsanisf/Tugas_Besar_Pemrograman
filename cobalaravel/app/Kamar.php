<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = ['no_kamar', 'nama_kamar', 'jenis_kamar', 'ukuran_kamar', 'fasilitas_kamar'];
}
