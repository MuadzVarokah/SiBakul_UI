<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Form Profil Usaha')]

class ProfilUsahaForm extends Component
{
    use WithFileUploads;

    //Properti untuk menyimpan nilai form
    public $logo_usaha;
    public $nib;
    public $nama_usaha;
    public $brand;
    public $mulai_usaha;
    public $provinsi_usaha;
    public $kabupaten_usaha;
    public $kecamatan_usaha;
    public $kelurahan_usaha;
    public $alamat_usaha;
    public $kodepos_usaha;
    public $kegiatan_usaha;
    public $produk; // Menyimpan nilai produk
    public $tambahan_produk = []; // Untuk produk tambahan
    public $sektor_usaha;
    public $sektor_ekraf;

    public function addProduk()
    {
        $this->tambahan_produk[] = null; // Menambahkan input produk baru
    }

    public function removeProduk($index)
    {
        unset($this->tambahan_produk[$index]); // Menghapus produk berdasarkan index
        $this->tambahan_produk = array_values($this->tambahan_produk); // Reindex array
    }

    public function render()
    {
        return view('livewire.kelengkapan-data.profil-usaha-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'logo_usaha'        => 'required|mimes:jpeg,jpg,png',
            'nib'               => 'required|numeric',
            'nama_usaha'        => 'required|string',
            'brand'             => 'required|string',
            'mulai_usaha'       => 'required|date',
            'provinsi_usaha'    => 'required|numeric',
            'kabupaten_usaha'   => 'required|numeric',
            'kecamatan_usaha'   => 'required|numeric',
            'kelurahan_usaha'   => 'required|numeric',
            'alamat_usaha'      => 'required|string',
            'kodepos_usaha'     => 'required|numeric',
            'kegiatan_usaha'    => 'required|string',
            'produk'            => 'required|string',
            'tambahan_produk.*' => 'required|string',
            'sektor_usaha'      => 'required|numeric',
            'sektor_ekraf'      => 'required|numeric',
        ]);

        dump($validatedData);
    }
}
