<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data Pemilik Usaha')]

class DataPemilikUsaha extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.data-pemilik-usaha');
    }
}
