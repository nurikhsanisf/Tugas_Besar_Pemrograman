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
                        <h3 class="card-title">Data Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2"><a href ="{{ route('admin.data_dokter.create') }}" class="btn btn-block btn-primary" type="button">Tambah Data</a></div>
                            </div>
                        </div><br>
                        <table class="table table-bordered">
                            <thead>                  
                                <tr>
                                    <th style="vertical-align : middle;text-align:center;">Nama Dokter</th>
                                    <th style="vertical-align : middle;text-align:center;">Spesialis</th>
                                    <th style="vertical-align : middle;text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($dokter as $key => $data)
                                <tr>    
                                    <td>{{$data->nama_dokter }}</td>
                                    <td>{{$data->spesifikasi_dokter }}</td>
                                    <td><a href="{{ route('admin.data_dokter.edit', $data->id_dokter ) }}" class="btn btn-block btn-warning" type="button">Edit</a>
                                        <form action="{{ route('admin.data_dokter.destroy', $data->id_dokter) }}" method="post">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-block btn-danger">Hapus</button>
                                        </form>
                                        <!-- <a href="{{ url('/data_dokter/hapus', $data->id_dokter) }}"><button class="btn btn-block btn-danger">Hapus</button></a> -->
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