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

Route::get('/', \App\Livewire\Login::class)->name('login');


Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');


Route::get('/kelengkapan-data', \App\Livewire\KelengkapanData::class)->name('kelengkapanData');

Route::get('/kelengkapan-data/data-pemilik-usaha', \App\Livewire\KelengkapanData\DataPemilikUsaha::class)->name('dataPemilikUsaha');
Route::get('/kelengkapan-data/data-pemilik-usaha/form', \App\Livewire\KelengkapanData\DataPemilikUsahaForm::class)->name('form-dataPemilikUsaha');

Route::get('/kelengkapan-data/profil-usaha', \App\Livewire\KelengkapanData\ProfilUsaha::class)->name('profilUsaha');
Route::get('/kelengkapan-data/profil-usaha/form', \App\Livewire\KelengkapanData\ProfilUsahaForm::class)->name('form-profilUsaha');

Route::get('/kelengkapan-data/berkas-usaha', \App\Livewire\KelengkapanData\BerkasUsaha::class)->name('berkasUsaha');
Route::get('/kelengkapan-data/berkas-usaha/form', \App\Livewire\KelengkapanData\BerkasUsahaForm::class)->name('form-berkasUsaha');
Route::get('/kelengkapan-data/berkas-usaha/form/{id_berkas}', \App\Livewire\KelengkapanData\BerkasUsahaForm::class)->name('form-berkasUsaha-edit');

Route::get('/kelengkapan-data/lokasi-gps', \App\Livewire\KelengkapanData\LokasiGps::class)->name('lokasiGps');
Route::get('/kelengkapan-data/lokasi-gps/form', \App\Livewire\KelengkapanData\LokasiGpsForm::class)->name('form-lokasiGps');

Route::get('/kelengkapan-data/media-pemasaran-online', \App\Livewire\KelengkapanData\MediaPemasaranOnline::class)->name('mediaPemasaranOnline');
Route::get('/kelengkapan-data/media-pemasaran-online/form', \App\Livewire\KelengkapanData\MediaPemasaranOnlineForm::class)->name('form-mediaPemasaranOnline');
Route::get('/kelengkapan-data/media-pemasaran-online/form/{id_media}', \App\Livewire\KelengkapanData\MediaPemasaranOnlineForm::class)->name('form-mediaPemasaranOnline-edit');

Route::get('/kelengkapan-data/qris-dinamis-bpd', \App\Livewire\KelengkapanData\QrisDinamisBpd::class)->name('qrisDinamisBpd');
Route::get('/kelengkapan-data/qris-dinamis-bpd/form', \App\Livewire\KelengkapanData\QrisDinamisBpdForm::class)->name('form-qrisDinamisBpd');


Route::get('/markethub', \App\Livewire\Markethub::class)->name('markethub');
Route::get('/markethub/{id_produk}', \App\Livewire\DetailProduk::class)->name('detailProduk');
Route::get('/markethub/tambah-produk/{jenis_produk}', \App\Livewire\TambahProduk::class)->name('tambahProduk');
