@extends('admindesa.navside')

@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Peraturan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
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
                        <h5 class="card-title">Edit Peraturan</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action ="/updateperaturan/{{$data->id}}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label fw-bold">Peraturan</label>
                                <textarea class="form-control" id="editor" name="peraturan" cols="30" rows="10">{!!$data->peraturan!!}</textarea>
</div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form><!-- Vertical Form -->
                        <a href="/peraturan"> <button type="submit" class="btn btn-danger">Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
       CKEDITOR.replace('editor');
    </script>
@endsection