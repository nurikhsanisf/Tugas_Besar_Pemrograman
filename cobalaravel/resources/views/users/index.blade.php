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

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Welcome Users</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <h2>PESAN KAMAR ANDA DENGAN CEPAT</h2>
          </div>
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">No. Kamar</th>
      <th scope="col">Nama Kamar</th>
      <th scope="col">Jenis</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <tbody>
  @foreach ( $kamar as $kmr )
    <tr>
      <th scope="row">{{ $kmr->id }}</th>
      <td>{{ $kmr->no_kamar }}</td>
      <td>{{ $kmr->nama_kamar }}</td>
      <td>{{ $kmr->jenis_kamar }}</td>
      <td>{{ $kmr->ukuran_kamar }}</td>
      <td>{{ $kmr->fasilitas_kamar }}</td>
      <td>
        <a href=""class="badge badge-success">Booking</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
          <div class="card-footer">
            Welcome Users
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
@endsection