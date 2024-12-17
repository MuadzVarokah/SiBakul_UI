<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Beranda')]

class Dashboard extends Component
{
    public function render()
    {
        //Membuat aspek
        $listAspek = collect([
            ["aspek" => "SDM", "skor" => 36],
            ["aspek" => "Produktifitas", "skor" => 49],
            ["aspek" => "Pemasaran", "skor" => 58],
            ["aspek" => "Pemasaran Online", "skor" => 29],
            ["aspek" => "Kelembagaan", "skor" => 18],
            ["aspek" => "Keuangan", "skor" => 25],
        ]);

        //Membuat menu cepat
        $listMenu = collect([
            ["title" => "PKG YIA", "type" => "icon", "icon" => "<i class='fa-solid fa-shop'></i>", "url" => "#"],
            ["title" => "Pasar Ekspor", "type" => "icon", "icon" => "<i class='fa-solid fa-globe'></i>", "url" => "#"],
            ["title" => "QUAT BPD", "type" => "img", "icon" => "<img class='rounded-lg' src='".asset('qris2.png')."' alt='QUAT_BPD'>", "url" => "#"],
            ["title" => "SIKP", "type" => "icon", "icon" => "<i class='fa-solid fa-money-check-dollar'></i>", "url" => "#"],
            ["title" => "Pelatihan", "type" => "icon", "icon" => "<i class='fa-solid fa-person-chalkboard'></i>", "url" => route('pelatihan')],
            ["title" => "Foto Produk", "type" => "icon", "icon" => "<i class='fa-solid fa-camera'></i>", "url" => route('fotoProduk')],
            ["title" => "Toko Saya", "type" => "icon", "icon" => "<i class='fa-solid fa-store'></i>", "url" => "#"],
            // ["title" => "lorem ipsum", "type" => "img", "icon" => "<img src='https://sibakuljogja.jogjaprov.go.id/files/berkasweb/60.png' alt='Markethub'>", "url" => "#"],
        ]);

        // Mengubah setiap item aspek menjadi objek stdClass
        $listAspek = $listAspek->map(function ($item) {
            $object = new \stdClass();
            $object->aspek = $item['aspek'];
            $object->skor = $item['skor'];
            return $object;
        });

        // Menghitung total skor aspek
        $totalSkorAspek = $listAspek->sum('skor');

        // Mengubah setiap item menu cepat menjadi objek stdClass
        $listMenu = $listMenu->map(function ($item) {
            $object = new \stdClass();
            $object->title = $item['title'];
            $object->type = $item['type'];
            $object->icon = $item['icon'];
            $object->url = $item['url'];
            return $object;
        });

        // dd($listMenu);

        return view('livewire.dashboard', [
                'listAspek' => $listAspek,
                'totalSkorAspek' => $totalSkorAspek,
                'listMenu' => $listMenu,
            ])
            ->layout('components.layouts.app');
    }
}
