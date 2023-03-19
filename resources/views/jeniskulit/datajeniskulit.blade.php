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
                    <a href="/tambahjeniskulit" method="POST" class="btn btn-primary mb-3">Tambah Jenis Kulit</a>
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
                            @foreach ($jeniskulits as $jk)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jk->kode_jenis }}</td>
                                    <td>{{ $jk->nama_jeniskulit }}</td>
                                    <td>{{ $jk->deskripsi }}</td>
                                    <td>{{ $jk->rekomen_treatment }}</td>
                                    <td>
                                        <a href='{{ url('/editdata') }}/{{ $jk->id }}' class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i> Edit</a>
                                        <button id="deleteJenisKulit" data-id="{{ $jk->id }}"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
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
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script>
        $('body').on('click', '#deleteJenisKulit', function() {
            let idJenisKulit = $(this).data('id');

            swal({
                title: "Apakah Anda Yakin?",
                text: "Untuk menghapus data ini",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((result) => {
                if (result) {
                    form_confirmation =
                        "<form method=\"POST\" action=\"{{ url('/delete') }}/" +
                        idJenisKulit +
                        "\" accept-charset=\"UTF-8\"><input name=\"_method\" type=\"hidden\" value=\"DELETE\"><input name=\"_token\" type=\"hidden\" value=\"{{ csrf_token() }}\"></form>"
                    form = $(form_confirmation)
                    form.appendTo('body');
                    form.submit();
                } else {
                    swal('Konfirmasi Diterima!', 'Data Anda Masih Terdata', 'success');
                }
            })
        })
    </script>
@endsection
