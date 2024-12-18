<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {return view('welcome');});

/* Login */
Route::get('/', \App\Livewire\Login::class)->name('login');



/* Dashboard */
Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

/* Menu - Pameran */
Route::get('/pameran', \App\Livewire\menu\Pameran::class)->name('pameran');
Route::get('/pameran/{id_pameran}', \App\Livewire\menu\DetailPameran::class)->name('detailPameran');
/* Menu - Pelatihan */
Route::get('/pelatihan', \App\Livewire\menu\Pelatihan::class)->name('pelatihan');
Route::get('/pelatihan/{id_pelatihan}', \App\Livewire\menu\DetailPelatihan::class)->name('detailPelatihan');
/* Menu - Foto Produk */
Route::get('/foto-produk', \App\Livewire\menu\FotoProduk::class)->name('fotoProduk');
Route::get('/foto-produk/{id_foto}', \App\Livewire\menu\DetailFotoProduk::class)->name('detailFotoProduk');
Route::get('/foto-produk-form', \App\Livewire\menu\FotoProdukForm::class)->name('form-fotoProduk');
Route::get('/foto-produk-form/{id_foto}', \App\Livewire\menu\FotoProdukForm::class)->name('form-fotoProduk-edit');



/* Kelengkapan Data */
Route::get('/kelengkapan-data', \App\Livewire\KelengkapanData::class)->name('kelengkapanData');

/* Kelengkapan Data (Data Usaha) - Data Pemilik Usaha */
Route::get('/kelengkapan-data/data-pemilik-usaha', \App\Livewire\KelengkapanData\DataPemilikUsaha::class)->name('dataPemilikUsaha');
Route::get('/kelengkapan-data/data-pemilik-usaha-form', \App\Livewire\KelengkapanData\DataPemilikUsahaForm::class)->name('form-dataPemilikUsaha');
/* Kelengkapan Data (Data Usaha) - Profil Usaha */
Route::get('/kelengkapan-data/profil-usaha', \App\Livewire\KelengkapanData\ProfilUsaha::class)->name('profilUsaha');
Route::get('/kelengkapan-data/profil-usaha-form', \App\Livewire\KelengkapanData\ProfilUsahaForm::class)->name('form-profilUsaha');
/* Kelengkapan Data (Data Usaha) - Berkas Usaha */
Route::get('/kelengkapan-data/berkas-usaha', \App\Livewire\KelengkapanData\BerkasUsaha::class)->name('berkasUsaha');
Route::get('/kelengkapan-data/berkas-usaha-form', \App\Livewire\KelengkapanData\BerkasUsahaForm::class)->name('form-berkasUsaha');
Route::get('/kelengkapan-data/berkas-usaha-form/{id_berkas}', \App\Livewire\KelengkapanData\BerkasUsahaForm::class)->name('form-berkasUsaha-edit');
/* Kelengkapan Data (Data Usaha) - Lokasi GPS */
Route::get('/kelengkapan-data/lokasi-gps', \App\Livewire\KelengkapanData\LokasiGps::class)->name('lokasiGps');
Route::get('/kelengkapan-data/lokasi-gps-form', \App\Livewire\KelengkapanData\LokasiGpsForm::class)->name('form-lokasiGps');
/* Kelengkapan Data (Data Usaha) - Media Pemasaran Online */
Route::get('/kelengkapan-data/media-pemasaran-online', \App\Livewire\KelengkapanData\MediaPemasaranOnline::class)->name('mediaPemasaranOnline');
Route::get('/kelengkapan-data/media-pemasaran-online-form', \App\Livewire\KelengkapanData\MediaPemasaranOnlineForm::class)->name('form-mediaPemasaranOnline');
Route::get('/kelengkapan-data/media-pemasaran-online-form/{id_media}', \App\Livewire\KelengkapanData\MediaPemasaranOnlineForm::class)->name('form-mediaPemasaranOnline-edit');
/* Kelengkapan Data (Data Usaha) - QRIS Dinamis BPD */
Route::get('/kelengkapan-data/qris-dinamis-bpd', \App\Livewire\KelengkapanData\QrisDinamisBpd::class)->name('qrisDinamisBpd');
Route::get('/kelengkapan-data/qris-dinamis-bpd-form', \App\Livewire\KelengkapanData\QrisDinamisBpdForm::class)->name('form-qrisDinamisBpd');



/* Markethub */
Route::get('/markethub', \App\Livewire\Markethub::class)->name('markethub');
Route::get('/markethub/{id_produk}', \App\Livewire\DetailProduk::class)->name('detailProduk');
Route::get('/markethub/tambah-produk/{jenis_produk}', \App\Livewire\TambahProduk::class)->name('tambahProduk');
