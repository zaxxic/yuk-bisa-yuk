  @extends('webadmin.navside')
@section('isi')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Struktur Karang Taruna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
        <li class="breadcrumb-item">Data Admin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-18 ms-auto me-auto">
        
        
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Teriama Pendaftaraam</h5>  
            <input type="text" class="form-control mb-3" placeholder="Search&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Propinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kode Pos</th>
                  <th scope="col">Photo Surat Persetujuan</th>
                  <th scope="col">logo desa</th>
                  <th scope="col">Aksi</th>


                  
                
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->provinsi}}</td>                       
                  <td>{{$item->kabupaten}}</td>                       
                  <td>{{$item->kecamatan}}</td>                       
                  <td>{{$item->kode_pos}}</td>                       
                  <td><img style="margin-left: 0px;"  src="img/{{$item->gambar}}" width="100px" height="100px" alt=""></td>   
                  <td><img style="margin-left: 0px;"  src="logo/{{$item->logo}}" width="100px" height="100px" alt=""></td>   
                  <td> <a href="{{ route('user.show', $item->id) }}"><button class="button-79" role="button">lihat</button></a> <br>
                    <form action="{{ route('update.status', $item->id) }}" method="post">
                      @csrf
                    <a href=""><button class="button-79" type="submit" role="button">Terima</button>
                    </form>  
                                   
                    <form action="{{ route('deleteadmin', $item->id) }}" method="post">
                      @csrf
                      @method('delete')
                    <a href=""><button class="button-79" type="submit" role="button">Tolak</button>
                    </form>
                </tr>
              @endforeach

                
              </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>

      
  </section>

  <section class="section" style="margin-top: 40px;">
    <div class="row">
      <div class="col-lg-17 ms-auto me-auto">
        
        
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Edit Pendaftaran</h5>  
            <input type="text" class="form-control mb-3" placeholder="Search&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Propinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kode Pos</th>
                  <th scope="col">Photo Surat Persetujuan</th>
                  <th scope="col">logo desa</th>
                  <th scope="col">Aksi</th>


                  
                
                </tr>
              </thead>
              @foreach ($data2 as $item)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->provinsi}}</td>                       
                <td>{{$item->kabupaten}}</td>                       
                <td>{{$item->kecamatan}}</td>                       
                <td>{{$item->kode_pos}}</td>                       
                <td><img style="margin-left: 0px;"  src="img/{{$item->gambar}}" width="100px" height="100px" alt=""></td>   
                <td><img style="margin-left: 0px;"  src="logo/{{$item->logo}}" width="100px" height="100px" alt=""></td>   
                <td> <a href="{{ route('user.show', $item->id) }}"><button class="button-79" role="button">lihat</button></a> <br>

                  <form action="{{ route('deleteadmin', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                  <a href=""><button class="button-79" type="submit" role="button">hapus</button>
                  </form>
              </td>              
                
              </tr>
            @endforeach
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>
       
      
  </section>

  

</main><!-- End #main -->
@endsection