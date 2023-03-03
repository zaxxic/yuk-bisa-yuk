@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Berita Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Berita Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <a href="tambah_berita"><button style="margin-left: 69px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Berita      </button></a>

    <section class="section" style="margin-left:70px;">
      <div class="row align-items-top">
        <div class="col-lg-11 d-flex flex-row">


            @foreach ($data as $row)

          <!-- Card with an image on top -->
          <div class="card me-5">

            <div class="card-body">
              <h5 class="card-title">{{ $row->judul }}</h5>
              <p class="card-text">{{ $row->subjudul }}</p>
              <div class="d-flex">
              <a href="/edit/{{ $row->id }}" style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</a>
              <a href="/deleteberita/{{ $row->id }}" style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm  ">Hapus</a>
            </div>
            </div>
          </div><!-- End Card with an image on top -->


                  @endforeach
                              <!-- Card with an image on top -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
