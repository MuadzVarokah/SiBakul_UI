<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Keuangan')]

class AspekKeuanganForm extends Component
{
    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-keuangan-form');
    }
}
