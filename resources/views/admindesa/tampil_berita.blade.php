@extends('admindesa.navside')
@section('isi')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Berita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="berita">Berita</a></li>
                    <li class="breadcrumb-item">Edit Berita</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">




                </div>
            </div>

            </div>

            <div class="col-lg-12 ms-auto me-auto">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Berita</h5>
                        <form class="row g-3" action ="/editberita/{{ $data -> id }}" method="POST">
                            @csrf
                            <!-- Vertical Form -->
                            <form class="row g-3">
                                <label for="defaultFormControlInput" class="form-label mb-3">Gambar</label>
                                <div class="mb-3 row">
                                    <?php $key = 0; ?>
                                    @foreach (json_decode($data->gambar) as $gambar)
                                        <div class="col-4">
                                            <img src="{{ asset('imgberita/' . $gambar) }}" alt="" width="200px"
                                                height="200px" class="my-3">
                                            <input type="file" name="gambar[{{ $key++ }}]" class="form-control w-75"
                                                id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                                value="{{ $data->judul }}" />
                                        </div>
                                    @endforeach
                                </div>

                                <div class="col-12">
                                    <label for="judul" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $data->judul }}">
                                </div>
                                <div class="col-12">
                                    <label for="subjudul" class="form-label">Subjudul Berita</label>
                                    <input type="text" class="form-control" name="subjudul" id="subjudul" value="{{ $data->subjudul }}">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}">
                                </div>
                                <div class="col-12">
                                    <label for="isiberita" class="col-sm-2 col-form-label">Isi Berita</label>
                                    <textarea class="form-control" id="editor" name="isi" cols="30" rows="10" placeholder="Tuliskan isi berita disini">{!!$data->isi!!}</textarea>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form><!-- Vertical Form -->
                            <a href="/berita"> <button type="submit" class="btn btn-danger">Kembali</button></a>

                    </div>
                </div>


            </div>
            </div>
        </section>



        <script>
            jQuery(document).ready(function() {
                ImgUpload();
            });

            function ImgUpload() {
                var imgWrap = "";
                var imgArray = [];
                $('.upload__inputfile').each(function() {
                    $(this).on('change', function(e) {
                        imgWrap = $(this).closest('.upload_box').find('.upload_img-wrap');
                        var maxLength = $(this).attr('data-max_length');

                        var files = e.target.files;
                        var filesArr = Array.prototype.slice.call(files);
                        var iterator = 0;
                        filesArr.forEach(function(f, index) {

                            if (!f.type.match('image.*')) {
                                return;
                            }

                            if (imgArray.length > maxLength) {
                                return false
                            } else {
                                var len = 0;
                                for (var i = 0; i < imgArray.length; i++) {
                                    if (imgArray[i] !== undefined) {
                                        len++;
                                    }
                                }
                                if (len > maxLength) {
                                    return false;
                                } else {
                                    imgArray.push(f);

                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var html =
                                            "<div class='upload__img-box'><div style='background-image: url(" +
                                            e.target.result + ")' data-number='" + $(
                                                ".upload__img-close").length + "' data-file='" + f
                                            .name +
                                            "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                        imgWrap.append(html);
                                        iterator++;
                                    }
                                    reader.readAsDataURL(f);
                                }
                            }
                            // console.log(imgArray);
                        });
                    });
                });

                $('body').on('click', ".upload__img-close", function(e) {
                    var file = $(this).parent().data("file");
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i].name === file) {
                            imgArray.splice(i, 1);
                            break;
                        }
                    }
                    $(this).parent().parent().remove();
                });
            }
        </script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    quill.root.innerHTML = document.querySelector('#content').value;

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Update hidden input with content from Quill editor
        var contentInput = document.querySelector('#content');
        contentInput.value = quill.root.innerHTML;

        // Submit form
        return true;
    };
</script>
    </main>
@endsection
@section('editor')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script>
       CKEDITOR.replace('editor');
    </script>
@endsection