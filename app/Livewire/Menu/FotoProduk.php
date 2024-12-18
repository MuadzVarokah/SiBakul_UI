<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Foto Produk')]

class FotoProduk extends Component
{
    public $activeTab = 'tersedia';

    // Menginisialisasi tab aktif berdasarkan URL hash
    public function mount()
    {
        $this->activeTab = request()->has('tab') ? request()->query('tab') : 'tersedia';
    }
    
    public function render()
    {
        return view('livewire.menu.foto-produk');
    }
}
