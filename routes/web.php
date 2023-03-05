<?php

use App\Http\Controllers\DashAdminController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\StrukturKarangController;
use App\Http\Controllers\StrukturPKKController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('webadmin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

       Route::middleware(['auth:sanctum','verified','adminweb'])->group(function(){

           Route::get('/dataadmin', [DataAdminController::class, 'DataAdmin']);
           Route::get('/dashwebadmin', [DashAdminController::class, 'dashadmin']);
           Route::post('/update-status/{id}', [DataAdminController::class, 'updateStatus'])->name('update.status');
           Route::delete('/deleteadmin/{id}', [DataAdminController::class, 'deleteadmin'])->name('deleteadmin');
           Route::get('/user/{id}', [DataAdminController::class, 'show'])->name('user.show');
           Route::get('/cek', [DataAdminController::class, 'lihat']);
           
           
        });
        
        Route::middleware(['auth:sanctum','verified','admindesa'])->group(function(){
        Route::get('/dashboardadmindesa',[DashboardController::class, 'dashboard'])->name('dashboard');


        // berita
Route::get('/berita',[BeritaController::class,'berita'])->name('berita');
Route::get('/tambah_berita',[BeritaController::class,'tambahberita'])->name('tambah_berita');
Route::post('/uploadberita',[BeritaController::class,'uploadberita'])->name('uploadberita');
Route::get('/edit/{id}',[BeritaController::class,'edit'])->name('edit');
Route::post('/editberita/{id}',[BeritaController::class,'editberita'])->name('editberita');
Route::get('/deleteberita/{id}',[BeritaController::class,'deleteberita'])->name('deleteberita');

//galeri
Route::get('/galeri',[GaleriController::class, 'galeri'])->name('galeri');
Route::get('/tampil/{id}',[GaleriController::class, 'tampil'])->name('tampil');
Route::get('/tambah_galeri',[GaleriController::class, 'tambahgaleri'])->name('tambah_galeri');
Route::post('/upload', [GaleriController::class, 'upload'])->name('upload');
Route::post('/tampilgaleri/{id}',[GaleriController::class, 'tampilgaleri'])->name('tampilgaleri');
Route::get('/deletegaleri/{id}',[GaleriController::class, 'deletegaleri'])->name('deletegaleri');

//data penduduk
Route::get('/data_penduduk',[DataPendudukController::class,'datapenduduk'])->name('data_penduduk');
Route::get('/data_penduduk/searchh', [DataPendudukController::class, 'searchh'])->name('searchh');
Route::get('/tambahpenduduk',[DataPendudukController::class,'tambahpenduduk'])->name('tambahpenduduk');
Route::post('/insertpenduduk',[DataPendudukController::class, 'insertpenduduk'])->name('insertpenduduk');
Route::get('/tampilpenduduk/{id}',[DataPendudukController::class, 'tampilpenduduk'])->name('tampilpenduduk');
Route::post('/updatependuduk/{id}',[DataPendudukController::class, 'updatependuduk'])->name('updatependuduk');
Route::get('/deletependuduk/{id}',[DataPendudukController::class, 'deletependuduk'])->name('deletependuduk');

// pariwisatas
Route::get('/pariwisata',[PariwisataController::class,'pariwisata'])->name('pariwisata');
Route::get('/tambah_pariwisata',[PariwisataController::class,'tambahpariwisata'])->name('tambah_pariwisata');
Route::post('/uploadpariwisata',[PariwisataController::class,'uploadpariwisata'])->name('uploadpariwisata');
Route::get('/editpar/{id}',[PariwisataController::class,'editpar'])->name('editpar');
Route::post('/editpariwisata/{id}',[PariwisataController::class,'editpariwisata'])->name('editpariwisata');
Route::get('/deletepariwisata/{id}',[PariwisataController::class,'deletepariwisata'])->name('deletepariwisata');



// penghargaan
Route::get('/penghargaan',[PenghargaanController::class,'penghargaan'])->name('penghargaan');
Route::get('/tambah_penghargaan',[PenghargaanController::class,'tambahpenghargaan'])->name('tambah_penghargaan');
Route::post('/uploadpenghargaan',[PenghargaanController::class,'uploadpenghargaan'])->name('uploadpenghargaan');
Route::get('/editpeng/{id}',[PenghargaanController::class,'editpeng'])->name('editpeng');
Route::post('/editpenghargaan/{id}',[PenghargaanController::class,'editpenghargaan'])->name('editpenghargaan');
Route::get('/deletepenghargaan/{id}',[PenghargaanController::class,'deletepenghargaan'])->name('deletepenghargaan');


//struktur desa
Route::post('/updatestrukturdesa',[StrukturDesaController::class, 'updatestrukturdesa'])->name('updatestrukturdesa');
Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');

//struktur kt
Route::get('/struktur_karang',[StrukturKarangController::class,'strukturkarang'])->name('struktur_karang');
Route::get('/struktur_karang/cari', [StrukturKarangController::class, 'cari'])->name('cari');
Route::get('/tambahanggota',[StrukturKarangController::class,'tambahanggota'])->name('tambahanggota');
Route::post('/insertanggota',[StrukturKarangController::class, 'insertanggota'])->name('insertanggota');
Route::get('/tampilkt/{id}',[StrukturKarangController::class, 'tampilkt'])->name('tampilkt');
Route::post('/updatekt/{id}',[StrukturKarangController::class, 'updatekt'])->name('updatekt');
Route::get('/deletekt/{id}',[StrukturKarangController::class, 'deletekt'])->name('deletekt');


//struktur pkk

Route::get('/struktur_pkk',[StrukturPKKController::class,'strukturpkk'])->name('struktur_pkk');
Route::get('/struktur_pkk/search', [StrukturPKKController::class, 'search'])->name('search');
Route::get('/tambahpkk',[StrukturPKKController::class,'tambahpkk'])->name('tambahpkk');
Route::post('/insertpkk',[StrukturPKKController::class, 'insertpkk'])->name('insertpkk');
Route::get('/tampilpkk/{id}',[StrukturPKKController::class, 'tampilpkk'])->name('tampilpkk');
Route::post('/updatepkk/{id}',[StrukturPKKController::class, 'updatepkk'])->name('updatepkk');
Route::get('/deletepkk/{id}',[StrukturPKKController::class, 'deletepkk'])->name('deletepkk');

//data peraturan
Route::get('/peraturan',[PeraturanController::class,'peraturan'])->name('peraturan');
Route::get('/tambahperaturan',[PeraturanController::class,'tambahperaturan'])->name('tambahperaturan');
Route::post('/insertperaturan',[PeraturanController::class, 'insertperaturan'])->name('insertperaturan');
Route::get('/tampilperaturan/{id}',[PeraturanController::class, 'tampilperaturan'])->name('tampilperaturan');
Route::post('/updateperaturan/{id}',[PeraturanController::class, 'updateperaturan'])->name('updateperaturan');
Route::get('/deleteperaturan/{id}',[PeraturanController::class, 'deleteperaturan'])->name('deleteperaturan');



//profil desa
Route::get('/profil_desa',[ProfilDesaController::class,'profildesa'])->name('profil_desa');
Route::post('/updateprofildesa/{id}',[ProfilDesaController::class, 'updateprofildesa'])->name('updateprofildesa');


Route::resource('products', ProductController::class);







    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
