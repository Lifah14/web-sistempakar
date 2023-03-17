@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Gejala</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Tambah Gejala</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content ">
      <div class="ml-3 mt-3">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Tambah Gejala</h3>
        </div>
        <form action="/gejalakulit/{{$edit->id}}" method="POST">
          @csrf
          @method('PUT')
            <div class="card-body">
                <div class="form-group">
                  <label for="kodejenis">Kode Gejala</label>
                  <input type="text" id="kode_gejala" name="kode_gejala" class="form-control" value="{{$edit->kode_gejala}}" placeholder="G04">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Gejala</label>
                  <input type="text" id="nama" name="nama_gejala" class="form-control" value="{{$edit->nama_gejala}}" placeholder="text">
                </div>
            </div>
            <div class="card-footer">
            <div class="row">
              <div class="col-12">
                <!-- <button href="/gejalakulit" class="btn btn-secondary">Cancel</button> -->
                <input type="submit" href="" value="Update" class="btn btn-success float-right">
              </div>
            </div>
            </div>
        </form>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection