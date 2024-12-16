<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Form Profil Usaha')]

class ProfilUsahaForm extends Component
{
    use WithFileUploads;

    //Properti untuk menyimpan nilai form
    public $logo_usaha;
    public $produk; // Menyimpan nilai produk
    public $tambahan_produk = []; // Untuk produk tambahan

    public function addProduk()
    {
        $this->tambahan_produk[] = null; // Menambahkan input produk baru
    }

    public function removeProduk($index)
    {
        unset($this->tambahan_produk[$index]); // Menghapus produk berdasarkan index
        $this->tambahan_produk = array_values($this->tambahan_produk); // Reindex array
    }

    public function render()
    {
        return view('livewire.kelengkapan-data.profil-usaha-form');
    }
}
