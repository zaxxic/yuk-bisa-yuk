3@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Penduduk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_penduduk">Data Penduduk</a></li>
                    <li class="breadcrumb-item active">Tambah Penduduk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Penduduk</h5> 

                        <!-- Vertical Form -->
                        <form class="row g-3" action="/insertpenduduk" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="inputEmail4" class="form-label">TTL</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="agama" required>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    <label for="floatingSelect">Pilih Agama Anda</label>
                                </div>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="jk"
                                            value="Laki-Laki" required>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="jk"
                                            value="Perempuan" required>
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                    name="pendidikan" required>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="Sarjana/D4">Sarjana/D4</option>
                                    <option value="S2">S2</option>
                                </select>
                                <label for="floatingSelect">Pendidikan Terakhir</label>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Sudah Menikah</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status"
                                            value="Sudah" required>
                                        <label class="form-check-label" for="udin1">
                                            Sudah
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status"
                                            value="Belum" required>
                                        <label class="form-check-label" for="udin2">
                                            Belum
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Rumah"
                                    name="alamat" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/data_desa"> <button type="submit" class="btn btn-danger"> Back</button></a>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
@endsection
