<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lokasi GPS')]

class LokasiGps extends Component
{
    public $latitude;
    public $longitude;

    public function mount()
    {
        $this->latitude  = -7.8013966;
        $this->longitude = 110.3621892;
    }

    public function render()
    {
        return view('livewire.kelengkapan-data.lokasi-gps');
    }
}
