@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Anggota</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="/struktur_pkk">Struktur PKK</a></li>
                    <li class="breadcrumb-item active">Tambah Anggota</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Anggota</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="/insertpkk" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger mt-4" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-12">
                                <label class="fw-bold">Jabatan</label>
                                <input class="form-control" name="id_jabatan" id="jabatan" disabled
                                    value="{{ $jabatan->jabatan }}">
                            </div>
                            <input type="hidden" name="id_jabatan" value="{{ $jabatan->id }}">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label>Gambar</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="gambar" id="gambar" required>
                                </div>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/struktur_pkk"> <button type="submit" class="btn btn-danger"> Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
