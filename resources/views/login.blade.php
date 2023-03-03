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
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-login.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="form-body on-top-mobile">
<div class="website-logo" style="margin-left: 1050px;">
                    <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder" style="margin-left: 800px;">
                <div class="bg"></div>
                <div class="info-holder simple-info" >
                    <div><img src="reg/image-reg/graphic6.svg" alt=""></div>
                    
                    <div><h3>Login</h3></div>
                    <div><p>Masukkan email dan password untuk login</p></div>
                </div>
            </div>
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="form-items" style="margin-left: 250px;">
                           

                        
</div>
            <form action="{{ route('login') }}" method="POST">
            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="email" class="form-control" placeholder="Email Desa">
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                   
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <label for="chk1">Belum punya akun ? <a href="/register" style="text-decoration: none;">Daftar sekarang</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        {{-- <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; color: #ffffff">Login</button> --}}
                                        <button type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
            </form>
        </div>
    </div>
</body>
</html>