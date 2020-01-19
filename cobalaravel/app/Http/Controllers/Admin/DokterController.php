<?php

namespace App\Http\Controllers\Admin;

use App\Dokter;
use App\JadwalDokter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::all();
        // foreach($dokter as $key){
        //     print_r($key->data_jadwal_dokter->hari);
        // }
        return view("admin/dokter/tampilan_data_dokter")->with('dokter', $dokter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/dokter/form_create_data_dokter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dokter = new Dokter();
        $dokter->nama_dokter        = $request->nama;
        $dokter->spesifikasi_dokter = $request->spesialis;
        $data_dokter = $dokter->save();

        if($data_dokter){
            $response = "Data berhasil disimpan!!!";
        }else{
            $response = "Data gagal disimpan!!!";
        }

        return redirect('/admin/data_dokter')->with('sukses', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dokter = Dokter::findOrFail($id);
        return view("admin/dokter/form_edit_data_dokter")->with('dokter', $dokter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dokter)
    {
        
        $data = Dokter::findOrFail($dokter);
        $data->nama_dokter  = $request->nama;
        $data->spesifikasi_dokter = $request->spesialis;
        $data_dokter = $data->save();
        if($data_dokter){
            $response = "Data berhasil disimpan!!!";
        }else{
            $response = "Data gagal disimpan!!!";
        }
        return redirect('/admin/data_dokter')->with('sukses', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($dokter)
    {
        $data_dokter = Dokter::findOrFail($dokter);
        $data_jadwal = JadwalDokter::where('id_dokter', $data_dokter->id_dokter)->first();
        // return $data_jadwal;
        if ($data_jadwal!= null){
            $response = "Mohon maaf data tersambung dengan tabel jadwal. harap menghapus data jadwal terlebih dahulu";
        }else{
            $data = $data_dokter->destroy($dokter);
            if($data){
                $response = "Data berhasil dihapus!!!";
            }else{
                $response = "Data gagal dihapus!!!";
            }
        }
        return redirect('/admin/data_dokter')->with('sukses', $response);
    }
}
