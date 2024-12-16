<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Profil Usaha')]

class ProfilUsaha extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.profil-usaha');
    }
}
