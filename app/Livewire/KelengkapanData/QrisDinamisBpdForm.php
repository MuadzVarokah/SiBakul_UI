<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Form QRIS Dinamis BPD')]

class QrisDinamisBpdForm extends Component
{
    use WithFileUploads;

    //Properti untuk menyimpan nilai form
    public $gambar_qris;
    public $nama_qris;
    public $nmid;

    public function render()
    {
        return view('livewire.kelengkapan-data.qris-dinamis-bpd-form');
    }

    public function simpan()
    {
        dump($this);
    }
}
