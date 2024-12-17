<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Route;

#[Title('Form Foto Produk')]

class FotoProdukForm extends Component
{
    public $id_foto; // Properti untuk menyimpan nilai id_foto dari url

    public $jenis_produk, $perlengkapan_dibawa, $catatan_lainnya;
    public $produk; // Menyimpan nilai produk
    public $tambahan_produk = []; // Untuk produk tambahan
    public $max_produk = 10; // Nilai default max_produk

    public function mount()
    {
        $this->max_produk = 5; // Menimpa jumlah max_produk berdasarkan keinginan
        $this->id_foto = Route::current()->parameter('id_foto'); // Mendapatkan id dari URL
        $this->chekForm($this->id_foto);
    }

    public function addProduk()
    {
        if (count($this->tambahan_produk) < ($this->max_produk - 1)) {
            $this->tambahan_produk[] = null; // Menambahkan input produk baru
        }
    }

    public function removeProduk($index)
    {
        unset($this->tambahan_produk[$index]); // Menghapus produk berdasarkan index
        $this->tambahan_produk = array_values($this->tambahan_produk); // Reindex array
    }

    public function chekForm($id_foto)
    {
        if ($id_foto) {
            // Membuat list data foto produk
            $dataFotoProduk = collect([
                ["id" => 1, "jenis_produk" => 1, "produk" => "a, b, c", "perlengkapan_dibawa" => null, "catatan_lainnya" => null],
                ["id" => 2, "jenis_produk" => 2, "produk" => "a, b, c", "perlengkapan_dibawa" => "tes", "catatan_lainnya" => "tes"]
            ]);

            // Mengubah setiap item list data foto produk menjadi objek stdClass
            $dataFotoProduk = $dataFotoProduk->map(function ($item) {
                $object = new \stdClass();
                $object->id = $item['id'];
                $object->jenis_produk = $item['jenis_produk'];
                $object->produk = $item['produk'];
                $object->perlengkapan_dibawa = $item['perlengkapan_dibawa'];
                $object->catatan_lainnya = $item['catatan_lainnya'];
                return $object;
            });

            // Jika ada id, ini berarti kita mengedit foto produk
            $fotoProduk = $dataFotoProduk->where('id', $id_foto)->first();
            if ($fotoProduk) {
                $this->jenis_produk = $fotoProduk->jenis_produk;
                $this->perlengkapan_dibawa = $fotoProduk->perlengkapan_dibawa;
                $this->catatan_lainnya = $fotoProduk->catatan_lainnya;

                $listProduk = explode(', ', $fotoProduk->produk); // Memecah produk menjadi array
                $this->produk = $listProduk[0]; // Mengisi $this->produk dengan data produk pertama
                unset($listProduk[0]) ; // Menghapus data produk pertama
                $this->tambahan_produk = $listProduk; // Mengisi $this->tambahan_produk dengan data produk sisanya
            }
        }
    }

    public function render()
    {
        return view('livewire.menu.foto-produk-form');
    }
}
