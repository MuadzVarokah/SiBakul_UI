<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek SDM')]

class AspekSdmForm extends Component
{
    public $ketergantungan_pemilik;
    public $tahapan_usaha;
    public $target_usaha;
    public $jumlah_pegawai = 0;
    public $standar_gaji;
    public $asuransi = [];
    public $tunjangan = [];
    public $pelatihan;

    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-sdm-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'ketergantungan_pemilik'    => 'required|numeric',
            'tahapan_usaha'             => 'required|numeric',
            'target_usaha'              => 'required|numeric',
            'jumlah_pegawai'            => 'required|numeric',
            'standar_gaji'              => 'required|numeric',
            'asuransi'                  => 'nullable',
            'tunjangan'                 => 'nullable',
            'pelatihan'                 => 'required|numeric',
        ]);

        dd($validatedData);
    }
}
