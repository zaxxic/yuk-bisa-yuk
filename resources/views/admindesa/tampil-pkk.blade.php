@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit PKK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Struktur PKK</a></li>
                    <li class="breadcrumb-item active">Edit PKK</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit PKK</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="/updatepkk/{{ $data->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Gambar</label><br><br>
                                <img src="{{ asset('storage/' . $data->gambar) }}" alt="" title=""
                                    width="200px"> <br><br>
                                <div class="col-12">
                                    <input type="file" class="form-control" name="gambar" id="gambar"
                                        value="{{ $data->gambar }}">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/struktur_pkk"> <button type="submit" class="btn btn-danger">Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
