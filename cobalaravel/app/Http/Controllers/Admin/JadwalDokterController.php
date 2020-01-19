<?php

namespace App\Http\Controllers\Admin;

use App\JadwalDokter;
use App\Dokter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwal_dokter = JadwalDokter::with('data_jadwal_dokter')->get();
        return view("admin/jadwaldokter/tampilan_data_jadwal_dokter")->with('jadwal_dokter', $jadwal_dokter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokter = Dokter::all();
        return view("admin/jadwaldokter/form_create_data_jadwal_dokter")->with('dokter', $dokter);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal_dokter = new JadwalDokter();
        $jadwal_dokter->dari_hari        = $request->dari_hari;
        $jadwal_dokter->sampai_hari      = $request->sampai_hari;
        $jadwal_dokter->dari_jam         = $request->dari_jam;
        $jadwal_dokter->sampai_jam       = $request->sampai_jam;
        $jadwal_dokter->id_dokter        = $request->id_dokter;
        $data = $jadwal_dokter->save();

        if($data){
            $response = "Data berhasil disimpan!!!";
        }else{
            $response = "Data gagal disimpan!!!";
        }

        return redirect('/admin/jadwal_dokter')->with('sukses', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalDokter $jadwalDokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalDokter $jadwalDokter)
    {
        $dokter = Dokter::all();
        return view("admin/jadwaldokter/form_edit_data_jadwal_dokter")->with('dokter', $dokter)->with('jadwal_dokter', $jadwalDokter);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jadwalDokter)
    {
        $data = JadwalDokter::findOrFail($jadwalDokter);
        $data->dari_hari            = $request->dari_hari;
        $data->sampai_hari          = $request->sampai_hari;
        $data->dari_jam             = $request->dari_jam;
        $data->sampai_jam           = $request->sampai_jam;
        $data->id_dokter            = $request->id_dokter;
        $data_jadwal_dokter = $data->save();
        if($data_jadwal_dokter){
            $response = "Data berhasil disimpan!!!";
        }else{
            $response = "Data gagal disimpan!!!";
        }
        return redirect('/admin/jadwal_dokter')->with('sukses', $response);
        // return $jadwalDokter;
        //
        // $data = $jadwalDokter->update($request->all());
        // if($data){
        //     $response = "Data berhasil diupdate!!!";
        // }else{
        //     $response = "Data gagal diupdate!!!";
        // }

        // return redirect('/admin/data_dokter')->with('sukses', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($jadwalDokter)
    {
        //
        $data_dokter = JadwalDokter::findOrFail($jadwalDokter);
        $data = $data_dokter->destroy($jadwalDokter);
        if($data){
            $response = "Data berhasil dihapus!!!";
        }else{
            $response = "Data gagal dihapus!!!";
        }

        return redirect('/admin/jadwal_dokter')->with('sukses', $response);
    }
}
