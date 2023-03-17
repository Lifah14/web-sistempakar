@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
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
          <h3 class="card-title">Tambah jenis kulit</h3>
        </div>
        <form action="/insertdata" method="POST">
          @csrf
            <div class="card-body">
                <div class="form-group">
                  <label for="kodejenis">Kode Jenis</label>
                  <input type="text" id="kode_jenis" name="kode_jenis" class="form-control" value="{{ old('kodejenis', '') }}" placeholder="Jk04">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama_jeniskulit" class="form-control" value="{{ old('nama', '') }}" placeholder="kulit normal">
                </div>
                <div class="form-group">
                  <label for="Deskripsi">Deskripsi</label>
                  <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ old('deskripsi', '') }}" placeholder="text">
                </div>
                <div class="form-group">
                  <label for="rekomendasi">Rekomendasi treatment</label>
                  <textarea id="rekomendasi" name="rekomen_treatment" class="form-control" rows="4" value="{{old('Rekomendasi', '')}}" placeholder=""></textarea>
                </div>
            </div>
            <div class="card-footer">
            <div class="row">
              <div class="col-12">
              <!-- <button href="/jeniskulit" class="btn btn-secondary">Cancel</button> -->
                <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
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