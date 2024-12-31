<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Data Pemilik Usaha')]

class DataPemilikUsahaForm extends Component
{
    public $nik;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $no_hp;
    public $email;
    public $provinsi_ktp;
    public $kabupaten_ktp;
    public $kecamatan_ktp;
    public $kelurahan_ktp;
    public $alamat_ktp;
    public $kodepos_ktp;
    public $provinsi_domisili;
    public $kabupaten_domisili;
    public $kecamatan_domisili;
    public $kelurahan_domisili;
    public $alamat_domisili;
    public $kodepos_domisili;
    public $pendidikan;
    public $disabilitas;

    public function render()
    {
        return view('livewire.kelengkapan-data.data-pemilik-usaha-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'nik'                   => 'required|numeric',
            'nama_lengkap'          => 'required|string|max:255',
            'tempat_lahir'          => 'required|string|max:255',
            'tanggal_lahir'         => 'required',
            'jenis_kelamin'         => 'required',
            'no_hp'                 => 'required|numeric',
            'email'                 => 'required',
            'provinsi_ktp'          => 'required|numeric',
            'kabupaten_ktp'         => 'required|numeric',
            'kecamatan_ktp'         => 'required|numeric',
            'kelurahan_ktp'         => 'required|numeric',
            'alamat_ktp'            => 'required',
            'kodepos_ktp'           => 'required|numeric',
            'provinsi_domisili'     => 'required|numeric',
            'kabupaten_domisili'    => 'required|numeric',
            'kecamatan_domisili'    => 'required|numeric',
            'kelurahan_domisili'    => 'required|numeric',
            'alamat_domisili'       => 'required',
            'kodepos_domisili'      => 'required|numeric',
            'pendidikan'            => 'required|numeric',
            'disabilitas'           => 'required|numeric',
        ]);

        dump($validatedData);
    }
}
