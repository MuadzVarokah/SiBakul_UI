<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Aspek Keuangan')]

class AspekKeuangan extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-keuangan');
    }
}
