<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Media Pemasaran Online')]

class MediaPemasaranOnline extends Component
{
    public $id_media; // Properti untuk menyimpan nilai id_media yang dikirimkan untuk menghapus media

    public function confirmDelete($id_media) {
        $this->id_media = $id_media;
        $this->dispatch('confirmDelete', $id_media);
    }
    
    public function deleteMedia($id_media) {
        // $media = Media::find($id);
        // $media->delete();
        
        $this->dispatch('mediaDeleted');
        // session()->flash('message', 'Media deleted successfully.');
        // dd($id_media);
    }

    public function render()
    {
        //Membuat list data media pemasaran online
        $dataMedia = collect([
            ["id" => 1, "jenis" => "Sosial Media", 'media' => "Instagram", 'nama' => '@nastarkastengel', 'url' => 'https://instagram.com/nastarkastengel'],
            ["id" => 2, "jenis" => "Website", 'media' => "Domain sendiri", 'nama' => 'Nastarkastengel Shop', 'url' => 'http://nastarkastengel.com'],
        ]);

        // Mengubah setiap item list data media pemasaran online menjadi objek stdClass
        $dataMedia = $dataMedia->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->jenis = $item['jenis'];
            $object->media = $item['media'];
            $object->nama = $item['nama'];
            $object->url = $item['url'];
            return $object;
        });

        return view('livewire.kelengkapan-data.media-pemasaran-online', ['dataMedia' => $dataMedia]);
    }
}
