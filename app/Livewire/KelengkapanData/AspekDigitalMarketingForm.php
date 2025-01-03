<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Digital Marketing')]

class AspekDigitalMarketingForm extends Component
{
    public $penggunaan_media_chat;
    public $pengelolaan_wa;
    public $katalog_wa_bisnis;
    public $penjawab_otomatis_wa_bisnis;
    public $penggunaan_media_sosial;
    public $penggunaan_marketplace;
    public $respon_google_profil_bisnis;
    public $update_web;
    public $hasil_pencarian_nama_usaha;
    public $menggunakan_iklan_berbayar;
    
    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-digital-marketing-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'penggunaan_media_chat'         => 'required|numeric',
            'pengelolaan_wa'                => 'required|numeric',
            'katalog_wa_bisnis'             => 'required|numeric',
            'penjawab_otomatis_wa_bisnis'   => 'required|numeric',
            'penggunaan_media_sosial'       => 'required|numeric',
            'penggunaan_marketplace'        => 'required|numeric',
            'respon_google_profil_bisnis'   => 'required|numeric',
            'update_web'                    => 'required|numeric',
            'hasil_pencarian_nama_usaha'    => 'required|numeric',
            'menggunakan_iklan_berbayar'    => 'required|numeric',
        ]);

        dump($validatedData);
    }
}
