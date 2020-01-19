<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    protected $table = "tbl_jadwal_dokter";
    protected $primaryKey = "id_jadwal_dokter";
    public $incrementing = true;
    protected $fillable = ['dari_hari', 'sampai_hari', 'dari_jam', 'sampai_jam', 'id_dokter'];

    public function data_jadwal_dokter()
    {
        return $this->belongsTo('App\Dokter', 'id_dokter');
    }
}
