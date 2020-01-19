@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>E - Hospital</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">E -Hospital</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Jadwal Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" action="{{route('admin.jadwal_dokter.update',$jadwal_dokter->id_jadwal_dokter)}}" method="post">
                            {{ csrf_field() }} {{ method_field('patch') }}
                            <div class="form-group">
                                <label>Nama Dokter</label>
                                <select class="form-control" name ="id_dokter" value="{{$jadwal_dokter->id_dokter}}">
                                @foreach($dokter as $key => $data)
                                    <option value="{{$data->id_dokter}}"  {{ $jadwal_dokter->id_dokter == $data->id_dokter ? 'selected="selected"' : '' }}>{{$data->nama_dokter}}</option>
                                    <!-- <option value="{{ $data->id_dokter}}">{{ $data->nama_dokter}}</option> -->
                                @endforeach
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Spesialis</label>
                                <input type="text" class="form-control" id="spesialis" name="spesialis" placeholder="Spesialis Bedah" value = "{{ $jadwal_dokter->data_dokter_spesifikasi_dokter}}" readonly>
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hari</label>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control" name="dari_hari" value="{{$jadwal_dokter->dari_jadwal}}">
                                                <option value="Senin" {{ $jadwal_dokter->dari_hari == "Senin" ? 'selected="selected"' : '' }}>Senin</option>
                                                <option value="Selasa" {{ $jadwal_dokter->dari_hari == "Selasa" ? 'selected="selected"' : '' }}>Selasa</option>
                                                <option value="Rabu" {{ $jadwal_dokter->dari_hari == "Rabu" ? 'selected="selected"' : '' }}>Rabu</option>
                                                <option value="Kamis" {{ $jadwal_dokter->dari_hari == "Kamis" ? 'selected="selected"' : '' }}>Kamis</option>
                                                <option value="Jum'at" {{ $jadwal_dokter->dari_hari == "Jum'at" ? 'selected="selected"' : '' }}>Jum'at</option>
                                                <option value="Sabtu" {{ $jadwal_dokter->dari_hari == "Sabtu" ? 'selected="selected"' : '' }}>Sabtu</option>
                                                <option value="Minggu" {{ $jadwal_dokter->dari_hari == "Minggu" ? 'selected="selected"' : '' }}>Minggu</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="sampai_hari" value="{{$jadwal_dokter->sampai_hari}}">
                                            <option value="Senin" {{ $jadwal_dokter->sampai_hari == "Senin" ? 'selected="selected"' : '' }}>Senin</option>
                                                <option value="Selasa" {{ $jadwal_dokter->sampai_hari == "Selasa" ? 'selected="selected"' : '' }}>Selasa</option>
                                                <option value="Rabu" {{ $jadwal_dokter->sampai_hari == "Rabu" ? 'selected="selected"' : '' }}>Rabu</option>
                                                <option value="Kamis" {{ $jadwal_dokter->sampai_hari == "Kamis" ? 'selected="selected"' : '' }}>Kamis</option>
                                                <option value="Jum'at" {{ $jadwal_dokter->sampai_hari == "Jum'at" ? 'selected="selected"' : '' }}>Jum'at</option>
                                                <option value="Sabtu" {{ $jadwal_dokter->sampai_hari == "Sabtu" ? 'selected="selected"' : '' }}>Sabtu</option>
                                                <option value="Minggu" {{ $jadwal_dokter->sampai_hari == "Minggu" ? 'selected="selected"' : '' }}>Minggu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jam</label>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="dari_jam" name="dari_jam" placeholder="Dari Jam" value="{{ $jadwal_dokter->dari_jam }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="sampai_jam" name="sampai_jam" placeholder="Sampai Jam" value ="{{ $jadwal_dokter->sampai_jam }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Welcome Admin
                    </div>
                    <!-- <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div> -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection