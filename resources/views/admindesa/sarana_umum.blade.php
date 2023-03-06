@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sarana</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item">Sarana</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Sarana Umum</h5>
              <input type="text" class="form-control mb-3" placeholder="Cari&hellip;">



              <!-- Primary Color Bordered Table -->
              <form action ="/updatesarana/{{ $data->id }}" method="POST">
              @csrf
              <table  class="table table-bordered border-primary" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Sarana</th>
                    <th scope="col">Jumlah</th>
                  </tr>
                </thead>
                <tbody>
      
                  <tr>
                    <th scope="row">1</th>
                    <td>Balai RW</td>
                    <td>
                    <input type="number" class="form-control" id="rw" name="rw"  value="{{ $data->rw }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Balai RT</td>
                    <td>
                    <input type="number" class="form-control" id="rt" name="rt" value="{{ $data->rt }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>PAUD</td>
                    <td>
                    <input type="number" class="form-control" id="paud" name="paud" value="{{ $data->paud }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>TK</td>
                    <td>
                    <input type="number" class="form-control" id="tk" name="tk" value="{{ $data->tk }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>SD</td>
                    <td>
                    <input type="number" class="form-control" id="sd" name="sd" value="{{ $data->sd }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>SMP</td>
                    <td>
                    <input type="number" class="form-control" id="smp" name="smp" value="{{ $data->smp }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>SMA/SMK</td>
                    <td>
                    <input type="number" class="form-control" id="sma" name="sma" value="{{ $data->sma }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Rumah Sakit</td>
                    <td>
                    <input type="number" class="form-control" id="rumah" name="rumah" value="{{ $data->rumah }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Puskismas</td>
                    <td>
                    <input type="number" class="form-control" id="puskesmas" name="puskesmas" value="{{ $data->puskesmas }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Pos Kesehatan Desa</td>
                    <td>
                    <input type="number" class="form-control" id="kesehatan" name="kesehatan" value="{{ $data->kesehatan }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Posyandu</td>
                    <td>
                    <input type="number" class="form-control" id="posyandu" name="posyandu" value="{{ $data->posyandu }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Pos KB</td>
                    <td>
                    <input type="number" class="form-control" id="kb" name="kb" value="{{ $data->kb }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Praktek Dokter</td>
                    <td>
                    <input type="number" class="form-control" id="dokter" name="dokter" value="{{ $data->dokter }}">
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Praktek Bidam</td>
                    <td>
                    <input type="number" class="form-control" id="bidan" name="bidan" value="{{ $data->bidan }}">
                    </td>
                  </tr>


                </tbody>
              </table>
              <button type="submit" style="margin-left: 90%" class="btn btn-primary">Simpan</button>
            </form>
              <!-- End Primary Color Bordered Table -->
            </div>
          </div>


    </section>

  </main><!-- End #main -->

@endsection
