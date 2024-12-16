<?php

namespace App\Livewire\KelengkapanData;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Berkas Usaha')]

class BerkasUsaha extends Component
{
    public $id_berkas; // Properti untuk menyimpan nilai id_berkas yang dikirimkan untuk menghapus berkas

    public function confirmDelete($id_berkas) {
        $this->id_berkas = $id_berkas;
        $this->dispatch('confirmDelete', $id_berkas);
    }
    
    public function deleteBerkas($id_berkas) {
        // $berkas = Berkas::find($id);
        // $berkas->delete();
        
        $this->dispatch('berkasDeleted');
        // session()->flash('message', 'Product deleted successfully.');
        // dd($id_berkas);
    }

    public function render()
    {
        //Membuat list data berkas
        $dataBerkas = collect([
            ["id" => 1, "jenis" => "NIB (Nomor Induk Berusaha)", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
            ["id" => 2, "jenis" => "NPWP Pribadi", 'nomor' => 1234567890123456, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
            ["id" => 3, "jenis" => "NPWP Usaha", 'nomor' => 1234567890123456, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/400x250'],
            ["id" => 4, "jenis" => "PIRT", 'nomor' => 123456789012345, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
            ["id" => 5, "jenis" => "Sertifikat Halal", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
            ["id" => 6, "jenis" => "SNI", 'nomor' => 1234567890123, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
            ["id" => 7, "jenis" => "MD BPOM", 'nomor' => 123456789012, 'keterangan' => 'Tes Keterangan', 'file' => 'https://placehold.co/600'],
        ]);

        // Mengubah setiap item list data berkas menjadi objek stdClass
        $dataBerkas = $dataBerkas->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->jenis = $item['jenis'];
            $object->nomor = $item['nomor'];
            $object->keterangan = $item['keterangan'];
            $object->file = $item['file'];
            return $object;
        });

        return view('livewire.kelengkapan-data.berkas-usaha', [
                'dataBerkas' => $dataBerkas,
            ]);
    }
}
