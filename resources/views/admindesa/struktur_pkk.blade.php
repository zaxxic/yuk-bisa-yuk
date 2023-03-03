@extends('admindesa.navside')
@section('isi')
    @include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Struktur PKK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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
                                            <td><a href="storage/gambarpkk/{{ $row->id }}"><button class="button-79"
                                                        role="button">Edit</button></a>

                                                @if ($row->jabatans->id == 5)
                                                    <a href="#" data-id="{{ $row->id }}"
                                                        data-nama="{{ $row->nama }}" class="button-79 delete">Hapus</a>
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
