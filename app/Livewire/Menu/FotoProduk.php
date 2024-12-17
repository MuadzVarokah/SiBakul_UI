<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Foto Produk')]

class FotoProduk extends Component
{
    public function render()
    {
        return view('livewire.menu.foto-produk');
    }
}
