<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Produktivitas')]

class AspekProduktivitasForm extends Component
{
    public $kegiatan_usaha;
    public $perkembangan_usaha;
    public $sertifikasi_produk;
    public $kemasan_produk;
    public $kondisi_alat;
    public $ketersediaan_bahan_baku;
    public $kondisi_gudang;
    public $kondisi_tempat;
    public $menerapkan_sop;

    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-produktivitas-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'kegiatan_usaha'            => 'required|numeric',
            'perkembangan_usaha'        => 'required|numeric',
            'sertifikasi_produk'        => 'required|numeric',
            'kemasan_produk'            => 'required|numeric',
            'kondisi_alat'              => 'required|numeric',
            'ketersediaan_bahan_baku'   => 'required|numeric',
            'kondisi_gudang'            => 'required|numeric',
            'kondisi_tempat'            => 'required|numeric',
            'menerapkan_sop'            => 'required|numeric',
        ]);

        dd($validatedData);
    }
}
