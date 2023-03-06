@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Galeri</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item"><a href="data-penduduk.html">Galeri</a></li>
                    <li class="breadcrumb-item active">edit gambar</li>
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
                        <h5 class="card-title">Edit galeri</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action ="/tampilgaleri/{{ $data -> id }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="nama" name="judul" value="{{ $data->judul}}">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="inputEmail4" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$data->tanggal}}">
                            </div>

                            <label for="defaultFormControlInput" class="form-label mb-3">Gambar</label>
                            <div class="mb-3 row">
                                <?php $key = 0; ?>
                                @foreach (json_decode($data->gambar) as $gambar)
                                    <div class="col-4">
                                        <img src="{{ asset('imggaleri/' . $gambar) }}" alt="" width="200px"
                                            height="200px" class="my-3">
                                        <input type="file" name="gambar[{{ $key++ }}]" class="form-control w-75"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            value="{{ $data->judul }}" />
                                    </div>
                                @endforeach
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/galeri"> <button type="submit" class="btn btn-danger"> Back</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
