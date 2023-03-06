@extends('admindesa.navside')
@section('isi')
    @include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Struktur PKK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item">Kelembagaan</li>
                    <li class="breadcrumb-item active">Struktur PKK</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 ms-auto me-auto">


                    <div class="card">

                        <div class="card-body">
                            <form class="form" method="get" action="{{ route('search') }}">
                                <h5 class="card-title">Struktur PKK </h5>
                                <input type="text" class="form-control mb-3" name="search" id="search"
                                    placeholder="Cari&hellip;">
                            </form>
                            <td><a href="/tambahpkk"><button class="button-79 ms-0 mb-3" role="button">Tambah
                                        Anggota</button></a></td>



                            <!-- Primary Color Bordered Table -->
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp

                                    @foreach ($data as $index => $row)
                                        <tr>
                                            <td>{{ $index + $data->firstItem() }}</td>
                                            <td>{{ $row->jabatans->jabatan }}</td>
                                            <td>{{ $row->nama }}</td>
                                             <td><img src={{ asset('storage/' . $row->gambar) }} alt=""
                                                title="" width="100px"></td>
                                            <td><a href="tampilpkk/{{ $row->id }}"><button class="button-79"
                                                        role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                          </svg></button></a>

                                                @if ($row->jabatans->id == 5)
                                                    <a href="#" data-id="{{ $row->id }}"
                                                        data-nama="{{ $row->nama }}" class="button-79 delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                          </svg></a>
                                            </td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                            <!-- End Primary Color Bordered Table -->
                        </div>
                    </div>

        </section>

    </main><!-- End #main -->
@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var ktid = $(this).attr('data-id');
            var nama = $(this).data('nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data PKK dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletepkk/" + ktid + ""
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
