@extends('admindesa.navside')
@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Struktur Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/kelembagaan">Kelembagaan</a></li>
                    <li class="breadcrumb-item active"><a href="/struktur_desa">Struktur Desa</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 ms-auto me-auto">

                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Struktur Desa</h5>

                            <!-- Primary Color Bordered Table -->
                            <form action="/updatestrukturdesa" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered border-primary">
                                    <label for="inputNanme4" class="form-label">Contoh</label>
                                    <div class="col-4 mb-2">
                                        
                                        <img src="{{ asset('gambarstrukturdesa/' . $data->gambar) }}" alt=""
                                            title="" width="200px"> <br><br>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Upload gambar struktur</label>
                                        <input type="file" class="form-control" name="gambar" id="gambar"
                                            value="{{ $data->gambar }}">
                                    </div>
                                </table>
                                <!-- End Primary Color Bordered Table -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary" style="margin-left: 90%;">Simpan</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
