<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Redirector;

#[Title('Detail Foto Produk')]

class DetailFotoProduk extends Component
{
    public $id_foto; // Properti untuk menyimpan nilai id_foto dari url

    public function mount($id_foto)
    {
        $this->id_foto = $id_foto;
    }

    public function redirectToForm()
    {
        return redirect()->route('form-fotoProduk');
    }

    public function confirmCancel($id_foto) {
        $this->id_foto = $id_foto;
        $this->dispatch('confirmCancel', $id_foto);
    }
    
    public function cancelFotoProduk($id_foto) {
        // Hapus Data Foto Produk di sini
        
        $this->dispatch('fotoProdukCanceled');
    }

    public function render()
    {
        return view('livewire.menu.detail-foto-produk');
    }
}
