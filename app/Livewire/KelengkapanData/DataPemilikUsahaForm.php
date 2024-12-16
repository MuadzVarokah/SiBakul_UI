<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Data Pemilik Usaha')]

class DataPemilikUsahaForm extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.data-pemilik-usaha-form');
    }
}
