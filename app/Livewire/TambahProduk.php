<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Route;

#[Title('Tambah Produk')]

class TambahProduk extends Component
{
    use WithFileUploads; // Memungkinkan upload file

    public $jenis_produk;  // Properti untuk menyimpan nilai jenis_produk dari url

    //Properti untuk menyimpan nilai form
    public $nama_produk;
    public $foto_produk; // Menyimpan file foto utama
    public $tambahan_foto_produk = []; // Untuk file foto tambahan
    public $harga_jual;
    public $deskripsi_produk;

    //Properti untuk menyimpan nilai form tambahan
    public $pengawet_buatan;
    public $bahan_baku_utama;
    public $kemasan_produk;
    public $berat_produk;
    public $panjang_produk;
    public $lebar_produk;
    public $tinggi_produk;
    public $saran_penyajian;
    public $lama_kadaluarsa;
    public $satuan_kadaluarsa = 'hari';
    public $sertifikat_halal;
    public $sertifikat_pirt;
    public $kapasitas_produksi;
    public $satuan_produksi = 'hari';

    public $saran_penggunaan;
    public $sertifikat_sni;

    public $produk_organik;
    public $sertifikat_organik;

    public $sertifikat_bpom;

    public function mount()
    {
        // Parameter jenis_produk akan diterima langsung dari URL
        $this->jenis_produk = Route::current()->parameter('jenis_produk'); // Mendapatkan id dari URL
        // $this->jenis_produk = $jenis_produk;
    }

    public function render()
    {
        //Membuat list produk
        $listProduk = collect([
            ["id" => 1, "produk" => "Makanan/Minuman Kemasan"],
            ["id" => 2, "produk" => "Makanan/Minuman Siap Saji"],
            ["id" => 3, "produk" => "Home Decor"],
            ["id" => 4, "produk" => "Fashion dan Kerajinan Fashion"],
            ["id" => 5, "produk" => "Produk Hasil Pertanian"],
            ["id" => 6, "produk" => "Herbal, Kecantikan, dan Kesehatan"],
            ["id" => 99, "produk" => "Lain-lain"]
        ]);

        // Mengubah setiap item list produk menjadi objek stdClass
        $listProduk = $listProduk->map(function ($item) {
            $object = new \stdClass();
            $object->id = $item['id'];
            $object->produk = $item['produk'];
            return $object;
        });

        return view('livewire.tambah-produk', [
                'listProduk' => $listProduk,
                'jenis_produk' => $this->jenis_produk,
            ]);
    }

    public function addFoto()
    {
        if (count($this->tambahan_foto_produk) < 2) {
            $this->tambahan_foto_produk[] = null; // Menambahkan input foto baru
        }
    }

    public function removeFoto($index)
    {
        unset($this->tambahan_foto_produk[$index]); // Menghapus foto berdasarkan index
        $this->tambahan_foto_produk = array_values($this->tambahan_foto_produk); // Reindex array
    }

    // Fungsi untuk menyimpan data
    public function simpan()
    {
        // Validasi nilai utama form
        $validatedData = $this->validate([
            'nama_produk'               => 'required|string|max:255',
            'foto_produk'               => 'required|image|max:1024', // Validasi file foto utama
            'tambahan_foto_produk.*'    => 'nullable|image|max:1024', // Validasi file foto tambahan
            'harga_jual'                => 'required|numeric',
            'deskripsi_produk'          => 'required|string',
        ]);
        
        if($this->jenis_produk == 1) {
            // Validasi nilai tambahan form jika jenis produk 1
            $validatedAdditionalData = $this->validate([
                'pengawet_buatan'       => 'nullable|in:iya,tidak',
                'bahan_baku_utama'      => 'nullable|string|max:255',
                'kemasan_produk'        => 'nullable',
                'berat_produk'          => 'nullable|numeric',
                'panjang_produk'        => 'nullable|numeric',
                'lebar_produk'          => 'nullable|numeric',
                'tinggi_produk'         => 'nullable|numeric',
                'saran_penyajian'       => 'nullable|string',
                'lama_kadaluarsa'       => 'nullable|numeric',
                'satuan_kadaluarsa'     => 'nullable',
                'sertifikat_halal'      => 'nullable',
                'sertifikat_pirt'       => 'nullable',
                'kapasitas_produksi'    => 'nullable|numeric',
                'satuan_produksi'       => 'nullable',
            ]);

            $validatedData = array_merge($validatedData, $validatedAdditionalData);
        } elseif($this->jenis_produk == 3 || $this->jenis_produk == 4) {
            // Validasi nilai tambahan form jika jenis produk 3 atau 4
            $validatedAdditionalData = $this->validate([
                'saran_penggunaan'      => 'nullable|string',
                'sertifikat_sni'        => 'nullable',
                'sertifikat_halal'      => 'nullable',
                'kapasitas_produksi'    => 'nullable|numeric',
                'satuan_produksi'       => 'nullable',
            ]);

            $validatedData = array_merge($validatedData, $validatedAdditionalData);
        } elseif($this->jenis_produk == 5) {
            $validatedAdditionalData = $this->validate([
                'produk_organik'        => 'nullable|in:iya,tidak',
                'sertifikat_organik'    => 'nullable',
            ]);

            $validatedData = array_merge($validatedData, $validatedAdditionalData);
        } elseif($this->jenis_produk == 6) {
            $validatedAdditionalData = $this->validate([
                'saran_penggunaan'      => 'nullable|string',
                'sertifikat_halal'      => 'nullable',
                'sertifikat_bpom'       => 'nullable',
                'kapasitas_produksi'    => 'nullable|numeric',
                'satuan_produksi'       => 'nullable',
            ]);

            $validatedData = array_merge($validatedData, $validatedAdditionalData);
        }

        dd($validatedData);

        // Menyimpan foto produk utama
        // $fotoPath = $this->foto_produk->store('foto_produk', 'public');

        // Menyimpan foto produk tambahan
        // $tambahanPaths = [];
        // foreach ($this->tambahan_foto_produk as $foto) {
        //     $tambahanPaths[] = $foto->store('foto_produk', 'public');
        // }

        // Simpan data ke database jika diperlukan
        // Foto produk utama dan tambahan dapat disimpan di tabel produk, dll.

        // session()->flash('message', 'Data foto produk berhasil disimpan!');
        return redirect()->route('markethub');
    }
}
