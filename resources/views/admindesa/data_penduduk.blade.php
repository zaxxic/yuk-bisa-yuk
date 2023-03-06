@extends('admindesa.navside')
@section('isi')
    @include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Penduduk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item">Data Penduduk</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 ms-auto me-auto">

                    <div class="card">

                        <div class="card-body">
                            <form class="form" method="get" action="{{ route('searchh') }}">
                                <h5 class="card-title">Data Penduduk</h5>
                                <input type="text" class="form-control mb-3" name="searchh" id="search"
                                    placeholder="Cari&hellip;">
                            </form>
                            <a href="/tambahpenduduk"><button class="btn btn-primary mb-3">Tambah Penduduk</button></a>

                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#basicModal">
                                Import Excel
                              </button>
                              <div class="modal fade" id="basicModal" tabindex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Basic Modal</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <input type="file">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button> 
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- End Basic Modal-->


                            <!-- Primary Color Bordered Table -->
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">No. </th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Agama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Pendidikan Terakhir</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $index => $row)
                                        <tr>
                                            <th> {{ $index + $data->firstItem() }} </th>
                                            <td> {{ $row->nama }} </td>
                                            <td> {{ $row->tanggal }} </td>
                                            <td> {{ $row->agama }} </td>
                                            <td> {{ $row->jk }} </td>
                                            <td> {{ $row->pendidikan }} </td>
                                            <td> {{ $row->status }} </td>
                                            <td> {{ $row->alamat }} </td>
                                            <td>
                                                <a href="#" type="submit" class="button-79 mb-1 delete"
                                                    data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"
                                                    role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg></a>
                                                <a href="/tampilpenduduk/{{ $row->id }}" type="submit"
                                                    class="button-79" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                                    </svg></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $data->links() }}
                            <!-- End Primary Color Bordered Table -->
                        </div>
                    </div>
        </section>

        </div>
        </div>
        </div>

        {{-- sweetalert hapus --}}

    </main><!-- End #main -->
@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var pendudukid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data penduduk dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletependuduk/" + pendudukid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        })
    </script>
@endsection
