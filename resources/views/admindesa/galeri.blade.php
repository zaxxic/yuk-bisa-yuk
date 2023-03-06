@extends('admindesa.navside')
@section('isi')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Galeri Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
                    <li class="breadcrumb-item active">Galeri Desa</li>
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
                        <h5 class="card-title">Galeri Desa</h5>
                        <a href="tambah_galeri"><button style="margin-bottom: 20px; width:20ch" type="button" class="btn btn-primary btn-sm  ">Tambah Galeri
                        </button></a>
                        <!-- Vertical Form -->
                        <table class="table table-bordered table-responsive-sm">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>tanggal</th>
                                    <th>gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>


                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->tanggal }}</td>
                                        <td style="width: 23px">
                                            @foreach (json_decode($row->gambar) as $gambar)
                                                <img class="mx-1 my-1" src="{{ asset('imggaleri/' . $gambar) }}"
                                                    alt="" width="100px" height="100px">
                                            @endforeach
                                        </td>
                                        <td>
                                                                                           <a href="/deletegaleri/{{ $row->id }}" type="submit"
                                                class="button-79 mb-1" role="button"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg></a>
                                            <a href="/tampil/{{ $row->id }}" type="submit"
                                                class="button-79" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor"
                                                    class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                                </svg></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
            </div>
        </section>

    </main>
@endsection



