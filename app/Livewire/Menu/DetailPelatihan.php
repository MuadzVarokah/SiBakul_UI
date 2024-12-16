<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Pelatihan')]

class DetailPelatihan extends Component
{
    public $id_pelatihan; // Properti untuk menyimpan nilai id_pelatihan dari url

    public function mount($id_pelatihan)
    {
        $this->id_pelatihan = $id_pelatihan;
    }

    public function render()
    {
        return view('livewire.menu.detail-pelatihan');
    }
}
