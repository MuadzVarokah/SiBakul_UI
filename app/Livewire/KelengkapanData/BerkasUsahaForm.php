<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Route;

#[Title('Form Berkas Usaha')]

class BerkasUsahaForm extends Component
{
    use WithFileUploads;
 
    public $id_berkas; // Properti untuk menyimpan nilai id_berkas dari url

    public $jenis_berkas;
    public $nomor;
    public $keterangan;
    public $gambar;
    public $gambar_awal;
    
    // Method untuk menangani form tambah atau edit
    public function mount($id_berkas)
    {
        // $this->id_berkas = Route::current()->parameter('id_berkas'); // Mendapatkan id dari URL
        $this->id_berkas = $id_berkas; // Mendapatkan id dari URL

        if ($this->id_berkas) {

            //Membuat list data berkas
            $dataBerkas = collect([
                ["id" => 1, "id_jenis_berkas" => 1, "jenis" => "NIB (Nomor Induk Berusaha)", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
                ["id" => 2, "id_jenis_berkas" => 2, "jenis" => "NPWP Pribadi", 'nomor' => 1234567890123456, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
                ["id" => 3, "id_jenis_berkas" => 3, "jenis" => "NPWP Usaha", 'nomor' => 1234567890123456, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
                ["id" => 4, "id_jenis_berkas" => 4, "jenis" => "PIRT", 'nomor' => 123456789012345, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
                ["id" => 5, "id_jenis_berkas" => 5, "jenis" => "Sertifikat Halal", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
                ["id" => 6, "id_jenis_berkas" => 6, "jenis" => "SNI", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
                ["id" => 7, "id_jenis_berkas" => 7, "jenis" => "MD BPOM", 'nomor' => 123456789012, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
            ]);

            // Mengubah setiap item list data berkas menjadi objek stdClass
            $dataBerkas = $dataBerkas->map(function ($item) {
                $object = new \stdClass();
                $object->id = $item['id'];
                $object->id_jenis_berkas = $item['id_jenis_berkas'];
                $object->jenis = $item['jenis'];
                $object->nomor = $item['nomor'];
                $object->keterangan = $item['keterangan'];
                $object->file = $item['file'];
                return $object;
            });

            // Jika ada id, ini berarti kita mengedit berkas
            $berkas = $dataBerkas->where('id', $this->id_berkas)->first();
            if ($berkas) {
                $this->jenis_berkas = $berkas->id_jenis_berkas;
                $this->nomor = $berkas->nomor;
                $this->keterangan = $berkas->keterangan;
                $this->gambar_awal = $berkas->file;
            }
        }
    }

    public function render()
    {
        //Membuat list berkas
        $listBerkas = collect([
            ["id" => 1, "berkas" => "NIB (Nomor Induk Berusaha)"],
            ["id" => 2, "berkas" => "NPWP Pribadi"],
            ["id" => 3, "berkas" => "NPWP Usaha"],
            ["id" => 4, "berkas" => "PIRT"],
            ["id" => 5, "berkas" => "Sertifikat Halal"],
            ["id" => 6, "berkas" => "SNI"],
            ["id" => 7, "berkas" => "MD BPOM"],
        ]);

        // Mengubah setiap item list berkas menjadi objek stdClass
        $listBerkas = $listBerkas->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->berkas = $item['berkas'];
            return $object;
        });

        return view('livewire.kelengkapan-data.berkas-usaha-form', [
            'listBerkas' => $listBerkas,
        ]);
    }
}
