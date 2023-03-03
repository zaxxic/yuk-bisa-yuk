@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Peraturan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Data Peraturan</a></li>
                    <li class="breadcrumb-item active">Tambah Peraturan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                </div>
            </div>
            </div>
            <div class="col-lg-12 ms-auto me-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Peraturan</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="/insertperaturan" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Peraturan</label>
                                <input type="text" class="form-control" id="peraturan" name="peraturan">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
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
