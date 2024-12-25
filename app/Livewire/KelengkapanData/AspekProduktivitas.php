<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Aspek Produktivitas')]

class AspekProduktivitas extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-produktivitas');
    }
}
