<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Sertifikasi Produk')]

class DetailSertifikasiProduk extends Component
{
    public $id_sertifikasi; // Properti untuk menyimpan nilai id_sertifikasi dari url

    public function mount($id_sertifikasi)
    {
        $this->id_sertifikasi = $id_sertifikasi;
    }

    public function render()
    {
        return view('livewire.menu.detail-sertifikasi-produk');
    }
}
