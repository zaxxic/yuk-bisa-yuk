@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pariwisata Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item active">Pariwisata</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <a href="tambah_pariwisata"><button style="margin-left: 69px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Pariwisata</button></a>

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
              <a href="/editpar/{{ $row->id }}" style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</a>
              <a href="/deletepariwisata/{{ $row->id }}" style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm  ">Hapus</a>
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
