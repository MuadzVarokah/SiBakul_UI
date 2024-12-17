<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Route;

#[Title('Form Media Pemasaran Online')]

class MediaPemasaranOnlineForm extends Component
{
    public $id_media; // Properti untuk menyimpan nilai id_media dari url

    public $listJenis;
    public $listMedia = [];
    public $jenis = null;
    public $media = null;
    public $nama;
    public $url;
    
    public function mount()
    {
        //Membuat list jenis media pemasaran
        $listJenis = collect([
            ["id" => 1, "jenis" => "Sosial Media"],
            ["id" => 2, "jenis" => "Marketplace"],
            ["id" => 3, "jenis" => "Website"],
        ]);

        // Mengubah setiap item list jenis media pemasaran menjadi objek stdClass
        $listJenis = $listJenis->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->jenis = $item['jenis'];
            return $object;
        });

        $this->listJenis = $listJenis; 

        // Method untuk menangani form tambah atau edit
        $this->id_media = Route::current()->parameter('id_media'); // Mendapatkan id dari URL
        // $this->id_media = $id_media; // Mendapatkan id dari URL
        $this->chekForm($this->id_media);
    }

    // Update media berdasarkan jenis yang dipilih
    public function updatedJenis($jenis_id)
    {
        //Membuat list media
        $listMedia = collect([
            ["id" => 1, "jenis_id" => 1, "media" => "Instagram"],
            ["id" => 2, "jenis_id" => 1, "media" => "Facebook"],
            ["id" => 3, "jenis_id" => 1, "media" => "TikTok"],
            ["id" => 4, "jenis_id" => 1, "media" => "Twitter"],
            ["id" => 5, "jenis_id" => 1, "media" => "LinkedIn"],

            ["id" => 6, "jenis_id" => 2, "media" => "Shopee"],
            ["id" => 7, "jenis_id" => 2, "media" => "Tokopedia"],
            ["id" => 8, "jenis_id" => 2, "media" => "Bukalapak"],
            ["id" => 9, "jenis_id" => 2, "media" => "MBIZ"],

            ["id" => 10, "jenis_id" => 3, "media" => "BlogSpot"],
            ["id" => 11, "jenis_id" => 3, "media" => "WordPress"],
            ["id" => 12, "jenis_id" => 3, "media" => "SiBakul"],
            ["id" => 13, "jenis_id" => 3, "media" => "Domain Sendiri"],
        ]);

        // Mengubah setiap item list media menjadi objek stdClass
        $listMedia = $listMedia->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->jenis_id = $item['jenis_id'];
            $object->media = $item['media'];
            return $object;
        });

        $this->listMedia = $listMedia->where('jenis_id', $jenis_id)->values()->all(); // Ambil media berdasarkan jenis yang dipilih
        // $this->media = null;  // Reset media

        // Dispatc event to refresh the select2 dropdown
        $this->dispatch('mediaUpdated');
    }

    // public function updatedMedia()
    // {
    //     $this->dispatch('mediaUpdated');
    // }

    public function chekForm($id_media)
    {
        if ($id_media) {
            //Membuat list data media pemasaran online
            $dataMedia = collect([
                ["id" => 1, "jenis_id" => 1, "jenis" => "Sosial Media", 'media_id' => 1, 'media' => "Instagram", 'nama' => '@nastarkastengel', 'url' => 'https://instagram.com/nastarkastengel'],
                ["id" => 2, "jenis_id" => 3, "jenis" => "Website", 'media_id' => 13, 'media' => "Domain sendiri", 'nama' => 'Nastarkastengel Shop', 'url' => 'http://nastarkastengel.com'],
            ]);

            // Mengubah setiap item list data media pemasaran online menjadi objek stdClass
            $dataMedia = $dataMedia->map(function ($item) {
                $object = new \stdClass();
                $object->id = $item['id'];
                $object->jenis_id = $item['jenis_id'];
                $object->jenis = $item['jenis'];
                $object->media_id = $item['media_id'];
                $object->media = $item['media'];
                $object->nama = $item['nama'];
                $object->url = $item['url'];
                return $object;
            });

            // Jika ada id, ini berarti kita mengedit media
            $media = $dataMedia->where('id', $id_media)->first();
            if ($media) {
                $this->jenis = $media->jenis_id;
                $this->media = $media->media_id;
                $this->nama = $media->nama;
                $this->url = $media->url;
            }
        }
    }

    public function render()
    {
        return view('livewire.kelengkapan-data.media-pemasaran-online-form');
    }
}
