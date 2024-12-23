<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Kelembagaan')]

class AspekKelembagaanForm extends Component
{
    public $badan_usaha;
    public $izin_usaha;
    public $nib;
    public $memiliki_npwp;
    public $npwp;
    public $struktur_organisasi;
    public $jobdesk;
    public $iso;

    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-kelembagaan-form');
    }
}
