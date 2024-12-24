<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kelengkapan Data')]

class KelengkapanData extends Component
{
    public function render()
    {
        //Membuat menu data usaha
        $dataUsaha = collect([
            ["menu" => "Data Pemilik Usaha", "is_done" => "true", "url" => route('dataPemilikUsaha'), "icon" => "<i class='fa-solid fa-id-card-clip w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Profil Usaha", "is_done" => "true", "url" => route('profilUsaha'), "icon" => "<i class='fa-solid fa-building-user w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Berkas Usaha", "is_done" => "false", "url" => route('berkasUsaha'), "icon" => "<i class='fa-solid fa-file-circle-check w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Katalog Produk", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-cart-shopping w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            // ["menu" => "Legalitas Usaha", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-building-circle-check w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            // ["menu" => "Legalitas Produk", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-file-circle-check w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            // ["menu" => "Arsip Lainnya", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-file-zipper w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Lokasi GPS", "is_done" => "false", "url" => route('lokasiGps'), "icon" => "<i class='fa-solid fa-map-location-dot w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Media Pemasaran Online", "is_done" => "false", "url" => route('mediaPemasaranOnline'), "icon" => "<i class='fa-solid fa-mobile-screen w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Kontak Usaha", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-phone-volume w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Rekening Pembayaran", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-credit-card w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "SIKP", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-money-check-dollar w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "QRIS Dinamis BPD", "is_done" => "false", "url" => route('qrisDinamisBpd'), "icon" => "<i class='fa-solid fa-qrcode w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
        ]);

        //Membuat menu data perkembangan
        $dataPerkembangan = collect([
            ["menu" => "Omset", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-sack-dollar w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aset", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-file-invoice-dollar w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Jumlah Pegawai", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-address-book w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Jumlah Transaksi", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-money-bill-transfer w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek Kelembagaan", "is_done" => "false", "url" => route('aspekKelembagaan'), "icon" => "<i class='fa-solid fa-sitemap w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek SDM", "is_done" => "false", "url" => route('aspekSdm'), "icon" => "<i class='fa-solid fa-person-chalkboard w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek Produktifitas", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-list-check w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek Keuangan", "is_done" => "false", "url" => route('aspekKeuangan'), "icon" => "<i class='fa-solid fa-money-bill-wave w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek Pemasaran (Branding)", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-cart-flatbed w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
            ["menu" => "Aspek Pemasaran Online", "is_done" => "false", "url" => "#", "icon" => "<i class='fa-solid fa-truck-ramp-box w-3.5 h-3.5 text-gray-500 dark:text-gray-400'></i>"],
        ]);

        // Mengubah setiap item pada data usaha menjadi objek stdClass
        $dataUsaha = $dataUsaha->map(function ($item) {
            $object = new \stdClass();
            $object->menu = $item['menu'];
            $object->is_done = $item['is_done'];
            $object->url = $item['url'];
            $object->icon = $item['icon'];
            return $object;
        });

        // Mengubah setiap item pada data perkembangan menjadi objek stdClass
        $dataPerkembangan = $dataPerkembangan->map(function ($item) {
            $object = new \stdClass();
            $object->menu = $item['menu'];
            $object->is_done = $item['is_done'];
            $object->url = $item['url'];
            $object->icon = $item['icon'];
            return $object;
        });

        $persenDataUsaha = round(($dataUsaha->where('is_done', 'true')->count() / $dataUsaha->count()) * 100);
        $persenDataPerkembangan = round(($dataPerkembangan->where('is_done', 'true')->count() / $dataPerkembangan->count()) * 100);

        // dd($persenDataUsaha);

        return view('livewire.kelengkapan-data', [
                'dataUsaha' => $dataUsaha,
                'dataPerkembangan' => $dataPerkembangan,
                'persenDataUsaha' => $persenDataUsaha,
                'persenDataPerkembangan' => $persenDataPerkembangan,
            ])
            ->layout('components.layouts.app');

    }
}
