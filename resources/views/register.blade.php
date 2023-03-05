<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA.COM</title>
    <link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="reg/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-theme23.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<div class="form-body on-top-mobile">
        <div class="website-logo">
                    <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="reg/image-reg/graphic6.svg" alt=""></div>
                    <div><h3>Registrasi</h3></div>
                    <div><p>Masukkan data yang sesuai untuk mendaftarkan desa anda</p></div>
                </div>
            </div>    
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-items" >
            <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
           
            
            <div class="row">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                                <div class="col-12">
                                    <input type="text " class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Desa">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Desa">
                                </div>
                               
           
            
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                                        <option selected>Provinsi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" placeholder="Kabupaten/Kota">
                                        <option value="kabupate" selected>Kabupaten/Kota</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" placeholder="Kecamatan">
                                        <option selected>Kecamatan</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="koordinat" placeholder="Titik Koordinat">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="custom-file">
                                        <label  >Unggah Persetujuan</label>
                                        <input type="file" class="" style="margin-bottom: 7px" name="gambar" >
                                    </div>
                                </div>
                                
                                <div class="col-12 ">
                                    <div class="custom-file">
                                        <label  style="margin-top: 20px">Unggah logo</label>
                                        <input type="file" class="" style="" name="logo" >
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <label for="chk1">Sudah punya akun ? <a href="login.html" style="text-decoration: none;">Kembali ke login</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; color: #ffffff">Daftar</button>
                                    </div>
                                </div>
                            </div>
            </form>
        </div>
    </div>
</body>
</html>
