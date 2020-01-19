<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JadwalDokter;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal_dokter = JadwalDokter::with('data_jadwal_dokter')->get();
        return view("users/jadwaldokter/tampilan_data_jadwal_dokter")->with('jadwal_dokter', $jadwal_dokter);
    }
}
