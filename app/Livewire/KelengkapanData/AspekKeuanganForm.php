<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Form Aspek Keuangan')]

class AspekKeuanganForm extends Component
{
    public $melakukan_pembukuan;
    public $jenis_laporan_keuangan = [];
    public $peran_usaha;
    public $pengelolaan_keuangan;
    public $dokumentasi_nota;
    public $catatan_transaksi;
    public $laporan_keuangan;
    public $utang_bank;
    public $pencatatan_aset;
    public $transaksi_pembayaran = [];

    public function render()
    {
        return view('livewire.kelengkapan-data.aspek-keuangan-form');
    }

    public function simpan()
    {
        $validatedData = $this->validate([
            'melakukan_pembukuan'       => 'nullable|in:iya,tidak',
            'jenis_laporan_keuangan'    => 'nullable',
            'peran_usaha'               => 'required|numeric',
            'pengelolaan_keuangan'      => 'required|numeric',
            'dokumentasi_nota'          => 'required|numeric',
            'catatan_transaksi'         => 'required|numeric',
            'laporan_keuangan'          => 'required|numeric',
            'utang_bank'                => 'required|numeric',
            'pencatatan_aset'           => 'required|numeric',
            'transaksi_pembayaran'      => 'required',
        ]);

        dd($validatedData);
    }
}
