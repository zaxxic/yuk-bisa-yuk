@extends('webadmin.navside')
@section('isi')
<main id="main" class="main">
    
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    

      <div class="col-xl-8" style="margin-left: 210px;">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              

            </ul>
            <div class="tab-content pt-2">

              <div style="margin-left: 120px;" class="tab-pane fade show active profile-overview" id="profile-overview">
                {{-- @dd($data) --}}
                <h5 class="card-title">Data Desa {{ $data->username }}</h5>
                <div  >
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nama Desa</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->username }}</div>
                </div>

                <div class="row" >
                  <div class="col-lg-3 col-md-4 label">Propinsi</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->provinsi }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->kabupaten }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->kecamatan }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->email }}</div>
                </div>

                <div class="row"><br>
                  <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                  <div class="col-lg-9 col-md-8"> {{ $data->kode_pos }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Gambar Persetujuan Desa</div>
                  <div class="col-lg-9 col-md-8" style="margin-top: 40px; margin-right: 60px;"><img style="height:450px;width:450px;" src="/img/{{$data->gambar}}" alt=""></div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Logo Desa</div>
                  <div class="col-lg-9 col-md-8" style="margin-top: 40px; margin-right: 60px;"><img style="height:450px;width:450px;" src="/logo/{{$data->logo}}" alt=""></div>
                </div>
                <a href="/dataadmin/" style="margin-left: 210px;"><button class="button-79 ms-0 mb-3" role="button">Kembali</button></a>
              </div>
              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

               

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection