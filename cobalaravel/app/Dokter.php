<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table = "tbl_dokter";
    protected $primaryKey = "id_dokter";
    public $incrementing = true;
    protected $fillable = ['nama_dokter', 'spesifikasi_dokter'];
}
