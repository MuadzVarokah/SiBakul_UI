<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Carbon\Carbon;

#[Title('Markethub')]

class Markethub extends Component
{
    public $jenis_produk;  // Properti untuk menyimpan nilai jenis_produk dari select

    public function render()
    {
        //Membuat syarat
        $dataSyarat = collect([
            ["menu" => "Profil Usaha", "is_done" => "true", "url" => "#", "icon" => "<i class='fa-solid fa-building-user w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Lokasi GPS", "is_done" => "true", "url" => "#", "icon" => "<i class='fa-solid fa-map-location-dot w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Rekening Pembayaran", "is_done" => "true", "url" => "#", "icon" => "<i class='fa-solid fa-credit-card w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
        ]);

        //Membuat barang
        $listBarang = collect([
            [
                "gambar" => "https://placehold.co/80",
                "nama" => "Kue Lebaran Premium Choco Stick 400 Gram",
                "harga" => 69000,
                "kurasi" => 1,
                "status" => null,
                "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-26 11:53:20')
            ],
            [
                "gambar" => "https://placehold.co/80",
                "nama" => "Lorem ipsum dolor sit amet consectetur.",
                "harga" => 420000,
                "kurasi" => 2,
                "status" => 1,
                "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', '2024-11-25 11:53:20')
            ],
            [
                "gambar" => "https://placehold.co/80",
                "nama" => "Lorem ipsum dolor sit.",
                "harga" => 6000,
                "kurasi" => 2,
                "status" => 0,
                "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', '2024-11-24 11:53:20')
            ],
            [
                "gambar" => "https://placehold.co/80",
                "nama" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolorum.",
                "harga" => 6942000,
                "kurasi" => 3,
                "status" => null,
                "created_at" => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-23 11:53:20')
            ],
        ]);

        //Membuat list produk
        $listProduk = collect([
            ["id" => 1, "produk" => "Makanan/Minuman Kemasan"],
            ["id" => 2, "produk" => "Makanan/Minuman Siap Saji"],
            ["id" => 3, "produk" => "Home Decor"],
            ["id" => 4, "produk" => "Fashion dan Kerajinan Fashion"],
            ["id" => 5, "produk" => "Produk Hasil Pertanian"],
            ["id" => 6, "produk" => "Herbal, Kecantikan, dan Kesehatan"],
            ["id" => 99, "produk" => "Lain-lain"]
        ]);

        // Mengubah setiap item data syarat menjadi objek stdClass
        $dataSyarat = $dataSyarat->map(function ($item) {
            $object = new \stdClass();
            $object->menu = $item['menu'];
            $object->is_done = $item['is_done'];
            $object->url = $item['url'];
            $object->icon = $item['icon'];
            return $object;
        });

        // Mengecek status tampil syarat
        $persenSyarat = round(($dataSyarat->where('is_done', 'true')->count() / $dataSyarat->count()) * 100);
        if($persenSyarat == 100) {
            $showSyarat = false;
        } else {
            $showSyarat = true;
        }

        // Mengubah setiap item list barang menjadi objek stdClass
        $listBarang = $listBarang->map(function ($item) {
            $object = new \stdClass();
            $object->gambar = $item['gambar'];
            $object->nama = $item['nama'];
            $object->harga = number_format($item['harga'], 0, ',', '.');
            $object->kurasi = $item['kurasi'];
            $object->status = $item['status'];
            Carbon::setLocale('id');
            $today = Carbon::today()->format('Y-m-d');
            $yesterday = Carbon::yesterday()->format('Y-m-d');
            if(Carbon::parse($item['created_at'])->format('Y-m-d') == $today){
                $object->created_at = "Hari ini, ".Carbon::parse($item['created_at'])->translatedFormat('h:i');
            } elseif (Carbon::parse($item['created_at'])->format('Y-m-d') == $yesterday) {
                $object->created_at = "Kemarin, ".Carbon::parse($item['created_at'])->translatedFormat('h:i');
            } else {
                $object->created_at = Carbon::parse($item['created_at'])->translatedFormat('d M Y, h:i');
            }
            return $object;
        });

        // Mengubah setiap item list produk menjadi objek stdClass
        $listProduk = $listProduk->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->produk = $item['produk'];
            return $object;
        });

        // dd($listBarang);

        return view('livewire.markethub', [
                'dataSyarat' => $dataSyarat,
                'showSyarat' => $showSyarat,
                'listBarang' => $listBarang,
                'listProduk' => $listProduk,
            ])
            ->layout('components.layouts.app');
    }

    public function tambahProduk()
    {
        // Validasi jika nilai jenis_produk kosong
        if (!$this->jenis_produk) {
            session()->flash('error', 'Harap pilih opsi terlebih dahulu!');
            return;
        }

        // Redirect ke halaman lain dengan parameter nilai jenis_produk
        return $this->redirect(route('tambahProduk', ['jenis_produk' => $this->jenis_produk]), navigate: true);
    }
}
