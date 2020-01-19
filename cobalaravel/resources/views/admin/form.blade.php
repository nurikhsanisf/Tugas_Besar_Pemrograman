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

            <div class="card card-primary col-sm-10">
              <div class="card-header">
                <h3 class="card-title">Tambah Kamar</h3>
              </div>
<form action="{{ route('tag.store') }}" method="POST">
  @csrf
              <div class="form-group">
                <h5>Masukan No Kamar</h5>
                <input class="form-control" type="text" name="no_kamar" placeholder=". . .">
                <br>
                <h5>Masukan Nama Kamar</h5>
                <input class="form-control" type="text" name="nama_kamar" placeholder=". . .">
                <br>
                <h5>Masukan Jenis Kamar</h5>
                <input class="form-control" type="text" name="jenis_kamar" placeholder=". . .">
                <br>
                <h5>Masukan Ukuran Kamar</h5>
                <input class="form-control" type="text" name="ukuran_kamar" placeholder=". . .">
                <br>
                <h5>Masukan Fasilitas Kamar</h5>
                <input class="form-control" type="text" name="fasilitas_kamar" placeholder=". . .">
                <br>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Tambah</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

      <!-- /.content -->

@endsection