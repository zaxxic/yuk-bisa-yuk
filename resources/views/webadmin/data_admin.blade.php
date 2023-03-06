  @extends('webadmin.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Daftar Admin Desa</h1>
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
            <h5 class="card-title">Terima Pendaftaran</h5>  
            <input type="text" class="form-control mb-3" placeholder="Cari&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Pos</th>
                  <th scope="col">Foto Surat</th>
                  <th scope="col">Logo desa</th>
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
                  <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->gambar) }}" width="120px" height="120px" alt=""></td>   
                  <td><img style="margin-left: 0px;"  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>   
                  <td> <a href="{{ route('user.show', $item->id) }}"><button class="btn btn-primary" style="font-size: 15px;margin-bottom:7px" role="button">Lihat</button></a>
                    <form action="{{ route('update.status', $item->id) }}" method="post">
                      @csrf
                    <button type="submit" style="font-size: 15px;margin-bottom:7px" class="btn btn-primary">Terima</button>
                    </form>  
                      <a href="#" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" class="delete"><button style="font-size: 15px" class="btn btn-primary" type="submit" role="button">Hapus</button></a>
                </tr>
              @endforeach
              

                
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $data->links('pagination::bootstrap-4') }}
          </div>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>

      
  </section>

  <section class="section" style="margin-top: 40px;">
    <div class="row">
      <div class="col-lg-17 ms-auto me-auto">
        
        
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Edit Admin Desa</h5>  
            <input type="text" class="form-control mb-3" placeholder="Cari&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Pos</th>
                  <th scope="col">Foto Surat</th>
                  <th scope="col">Logo desa</th>
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
                <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->gambar) }}" width="120px" height="120px" alt=""></td>
                <td><img style="margin-left:8px ;" class=""  src="{{ asset('storage/' . $item->logo) }}" width="120px" height="120px" alt=""></td>   
                <td> <a href="{{ route('user.show', $item->id) }}"><button style="font-size: 15px;" class="btn btn-primary" role="button">Lihat</button></a>
                  <a href="#" data-id="{{ $item->id }}" data-nama="{{ $item->name }}" class="delete"><button style="font-size: 15px" class="btn btn-primary" type="submit" role="button">Hapus</button></a>
              </td>              
                
              </tr>
              <div class="pagination">

</div>
            @endforeach
            </table>
            <!-- End Primary Color Bordered Table -->
            <div class="d-flex justify-content-center">
              {{ $data2->links('pagination::bootstrap-4') }}
          </div>

          </div>
        </div>
       
      
  </section>

  

</main><!-- End #main -->
@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var dataid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data desa dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteadmin/" + dataid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        })
    </script>
@endsection