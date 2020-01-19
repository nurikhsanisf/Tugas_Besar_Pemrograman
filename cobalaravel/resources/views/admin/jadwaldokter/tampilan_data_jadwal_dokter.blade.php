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
                @if(session('sukses'))
                    <div class="alert alert-dark" role="alert">
                        {{session('sukses')}}
                    </div> 
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2"><a href ="{{ route('admin.jadwal_dokter.create') }}" class="btn btn-block btn-primary" type="button">Tambah Data</a></div>
                            </div>
                        </div><br>
                        <table class="table table-bordered">
                            <thead>                  
                                <tr>
                                    <th rowspan="2" style="vertical-align : middle;text-align:center;">Nama Dokter</th>
                                    <th rowspan="2" style="vertical-align : middle;text-align:center;">Spesialis</th>
                                    <th colspan="2" style="text-align:center;">Jadwal Dokter</th>
                                    <th rowspan="2" style="vertical-align : middle;text-align:center;">Action</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;">Hari</th>
                                    <th style="text-align:center;">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwal_dokter as $key => $data)
                                <tr>    
                                    <td>{{ $data->data_jadwal_dokter->nama_dokter }}</td>
                                    <td>{{ $data->data_jadwal_dokter->spesifikasi_dokter }}</td>
                                    <td>{{ $data->dari_hari }} - {{ $data->sampai_hari }}</td> 
                                    <td>{{ $data->dari_jam }} - {{ $data->sampai_jam }}</td>  
                                    <td><a href="{{route('admin.jadwal_dokter.edit',$data->id_jadwal_dokter)}} "><button class="btn btn-block btn-warning">Edit</button></a>
                                        <form action="{{ route('admin.jadwal_dokter.destroy', $data->id_jadwal_dokter) }}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-block btn-danger">Hapus</button>
                                        </form>
                                    </td>         
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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