@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Gejala Kulit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Gejala</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Gejala</h3>
        </div>
        <div class="card-body">
        <a href="/gejalakulit/create"  method="POST" class="btn btn-primary mb-3">Tambah Gejala</a>
        @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
        @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Nama Gejala</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                  @php
                    $no = 1;
                  @endphp
                    @foreach($gejalakulit as $gk)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$gk->kode_gejala}}</td>
                        <td>{{$gk->nama_gejala}}</td>
                        <td>
                          <form action="gejalakulit/{{$gk->id}}" method="POST">
                            <a href="{{ route('gejalakulit.edit',$gk->id)}}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    </div>
   
    </section>
</div>
@endsection