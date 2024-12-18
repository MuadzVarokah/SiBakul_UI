<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Pameran')]

class DetailPameran extends Component
{
    public $id_pameran; // Properti untuk menyimpan nilai id_pameran dari url

    public function mount($id_pameran)
    {
        $this->id_pameran = $id_pameran;
    }

    public function render()
    {
        return view('livewire.menu.detail-pameran');
    }
}
