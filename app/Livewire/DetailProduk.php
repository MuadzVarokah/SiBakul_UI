<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Produk')]


class DetailProduk extends Component
{
    public $id_produk;  // Properti untuk menyimpan nilai id_produk dari url

    public function mount($id_produk)
    {
        // Parameter id_produk akan diterima langsung dari URL
        $this->id_produk = $id_produk;
    }

    public function render()
    {
        //Membuat list produk
        $listProduk = collect([
            ["id" => 1, "id_jenis_produk" => 1, "jenis_produk" => "Makanan/Minuman Kemasan"],
            ["id" => 2, "id_jenis_produk" => 2, "jenis_produk" => "Makanan/Minuman Siap Saji"],
            ["id" => 3, "id_jenis_produk" => 3, "jenis_produk" => "Home Decor"],
            ["id" => 4, "id_jenis_produk" => 4, "jenis_produk" => "Fashion dan Kerajinan Fashion"],
            ["id" => 5, "id_jenis_produk" => 5, "jenis_produk" => "Produk Hasil Pertanian"],
            ["id" => 6, "id_jenis_produk" => 6, "jenis_produk" => "Herbal, Kecantikan, dan Kesehatan"],
            ["id" => 99, "id_jenis_produk" => 7, "jenis_produk" => "Lain-lain"]
        ]);

        $listProduk = $listProduk->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->id_jenis_produk = $item['id_jenis_produk'];
            $object->jenis_produk = $item['jenis_produk'];
            return $object;
        });

        if(count($listProduk->where('id', $this->id_produk)) !== 0) {
            $data = $listProduk->where('id', $this->id_produk)->first();
        } else {
            $data = $listProduk->where('id', 99)->first();
        }

        return view('livewire.detail-produk', ['data' => $data]);
    }
}
