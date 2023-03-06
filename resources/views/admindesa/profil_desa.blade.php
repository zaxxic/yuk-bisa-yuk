@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/profil_desa">Profil Desa</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profil Desa</h5>

                            <!-- General Form Elements -->
                            <form action="/updateprofildesa/{{ $data->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="card-sa col-12 mb-3 d-flex flex-row">
                                            <div class="col-3 mx-auto">
                                                <label class="d-block" for="">Gambar 1</label>
                                                <img src="{{ asset('storage/' . $data->gambar1) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar1">
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <label for="" class="d-block">Gambar 2</label>
                                                <img src="{{ asset('storage/' . $data->gambar2) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar2">
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <label for="" class="d-block">Gambar 3</label>
                                                <img src="{{ asset('storage/' . $data->gambar3) }}"
                                                    class="img-fluid rounded-start col-10 mx-auto" alt="..."
                                                    style="border-radius: 6px; width:80%; height: 70%;">
                                                <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;"
                                                    name="gambar3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label for="inputText" class="col-sm-2 col-form-label"><b>Visi Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;" name="visi">{{ $data->visi }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <label for="inputEmail" class="col-sm-2 col-form-label"><b>Misi Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;" name="misi">{{ $data->misi }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Sejarah Desa :</b></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="editor" name="sejarah" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu...">{!! $data->sejarah !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <h5 for="" class="mb-4"><b>Batas-batas Desa</b></h5>
                                    <label for="inputNumber" class="col-sm-2 col-form-label"><b>Utara Desa</b></label>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="batasutara"
                                            value="{{ $data->batasutara }}">
                                    </div>
                                    <label for="inputNumber" class="col-sm-2 col-form-label"><b>Selatan Desa</b></label>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="batasselatan"
                                            value="{{ $data->batasselatan }}">
                                    </div>
                                    <label for="inputNumber" class="col-sm-2 col-form-label"><b>Timur Desa</b></label>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="batastimur"
                                            value="{{ $data->batastimur }}">
                                    </div>
                                    <label for="inputNumber" class="col-sm-2 col-form-label"><b>Barat Desa</b></label>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text" class="form-control" name="batasbarat"
                                            value="{{ $data->batasbarat }}">
                                    </div>
                                </div>

                                <div class="row align-items-top">
                                    <div class="col-lg-12 ">

                                        <!-- Card with an image on left -->
                                        <div class="card-sa mb-3 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="inputNumber"
                                                        class="col-sm-2 col-form-label"><b>Maps</b></label>
                                                    <div class="d-flex">
                                                        <iframe class="col-7 mx-auto"
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9521455536983!2d112.60469731437782!3d-7.900068680795382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1676113690021!5m2!1sid!2sid"
                                                            style="border:1px solid rgb(255, 255, 255); margin-left: 189px;height: 300px;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" >Simpan</button>
                                            </div>
                                        </div><!-- End Card with an image on left -->

                                    </div>
                                </div>

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
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
       CKEDITOR.replace('editor');
    </script>
@endsection
