@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jenis Kulit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Jenis Kulit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Jenis Kulit</h3>
          </div>
          <div class="card-body">
            <a href="/tambahjeniskulit"  method="POST" class="btn btn-primary mb-3">Tambah Jenis Kulit</a>
            @if ($message = Session::get('success'))
              <div class="alert alert-success" role="alert">
                {{ $message }}
              </div>
            @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Jenis</th>
                        <th scope="col">Nama Jenis Kulit</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Rekomen Treatment</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @php
                        $no = 1;
                      @endphp
                        @foreach($jeniskulits as $jk)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$jk->kode_jenis}}</td>
                            <td>{{$jk->nama_jeniskulit}}</td>
                            <td>{{$jk->deskripsi}}</td>
                            <td>{{$jk->rekomen_treatment}}</td>
                            <td>
                                <a href='{{ url("/editdata")}}/{{ $jk->id }}' class="btn btn-warning">Edit</a>
                                <a href='' class="btn btn-danger delete" data-id="{{ $jk->id }}">Delete</a>
                                <!-- <a href='{{ url("/delete")}}/{{ $jk->id }}' class="btn btn-danger">Delete</a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
          </div>
      </div>
    </section>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<script>
  $('.delete').click(function(){
    var jeniskulitid = $(this).attr('data-id');
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    });
  });
</script>


@endsection

