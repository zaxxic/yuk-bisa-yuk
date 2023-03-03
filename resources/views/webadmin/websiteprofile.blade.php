@extends('webadmin.navside')
@section('isi')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Profile Desa</h5>

            <!-- General Form Elements -->
            <form action="" method="post">
              {{-- @dd($data) --}}
             
                  
              
              <div class="row mb-4">
                <div class="col-lg-12">
           <div class="card-sa col-12 mb-3 d-flex flex-row">
           <div class="col-3 mx-auto">
             <label class="d-block" for="">Gambar 1</label>
             <img src="img/{{$data->gambar1}}"  class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input class="ms-0" type="file" name="gambar1" style="margin: 3% 0% 3% 0%;">
           </div>
           <div class="col-3 mx-auto">
             <label for="" class="d-block">Gambar 2</label>
             <img src="img/{{$data->gambar2}}" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input name="gambar2" class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
           </div>
           <div class="col-3 mx-auto">
             <label for="" class="d-block">Gambar 3</label>
             <img src="img/{{$data->gambar3}}" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input class="ms-0" name="gambar3" type="file" style="margin: 3% 0% 3% 0%;">
           </div>
           
             </div>
             
          
                </div>
             </div>


              <div class="row mb-5">
                <label class="mb-4" for="">{{$data->visi}}</label>
                <label for="inputText" class="col-sm-2 col-form-label">Visi Website</label>
                <div class="col-sm-10">
                  <textarea class="form-control" placeholder="" name="vis" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
              </div>
              <div class="row mb-5">
                <label class="mb-4" for="">{{$data->misi}}</label>
                <label for="inputEmail" class="col-sm-2 col-form-label">Misi Website</label>
                <div class="col-sm-10">
                  <textarea class="form-control" placeholder="" name="misi" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
              </div>
              <button type="submit" class="button-79">simpan</button>

              </div>
   
            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection