<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Branding & Pasar')]

class AspekBrandingDanPasarForm extends Component
{
    public $keunggulan_produk;
    public $target_pasar;
    public $konsep_branding;
    public $co_branding;
    public $ketersediaan_produk;
    public $etiket_merek;
    public $merek_terdaftar_haki;
    public $mitra_usaha;
    public $cakupan_pemasaran;
    public $pelanggan_loyal;
    public $pameran_mandiri;
    public $media_pemasaran = [];

    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-branding-dan-pasar-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'keunggulan_produk'     => 'required|numeric',
            'target_pasar'          => 'required|numeric',
            'konsep_branding'       => 'required|numeric',
            'co_branding'           => 'required|numeric',
            'ketersediaan_produk'   => 'required|numeric',
            'etiket_merek'          => 'required|numeric',
            'merek_terdaftar_haki'  => 'required|numeric',
            'mitra_usaha'           => 'required|numeric',
            'cakupan_pemasaran'     => 'required|numeric',
            'pelanggal_loyal'       => 'required|numeric',
            'pameran_mandiri'       => 'required|numeric',
            'media_pemasaran'       => 'required',
        ]);

        dd($validatedData);
    }
}
