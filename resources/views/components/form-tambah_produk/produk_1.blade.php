<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600">Menggunakan Pengawet Buatan</label>
     <div class="flex flex-wrap gap-2">
          <div class="flex flex-wrap items-center w-full">
               <input wire:model="pengawet_buatan" id="pengawet_buatan-1" type="radio" value="iya" name="pengawet_buatan"
                    class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="pengawet_buatan-1" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Iya</label>
          </div>
          <div class="flex flex-wrap items-center w-full">
               <input  wire:model="pengawet_buatan" id="pengawet_buatan-2" type="radio" value="tidak" name="pengawet_buatan"
                    class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="pengawet_buatan-2" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Tidak</label>
          </div>
     </div>
     @error('pengawet_buatan')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="bahan_baku_utama">Bahan Baku Utama</label>
     <input wire:model="bahan_baku_utama" type="text" name="bahan_baku_utama" id="bahan_baku_utama" placeholder="cth. Sagu" autocomplete="on"
          class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
</div>

<div wire:ignore class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="kemasan_produk">Kemasan Produk</label>
     <select wire:model="kemasan_produk" id="kemasan_produk" name="kemasan_produk"
          class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          <option></option>
          <option value="1">Pouch</option>
          <option value="2">Botol Plastik</option>
          <option value="3">Botol Kaca</option>
          <option value="4">Kemasan Kertas</option>
          <option value="5">Kemasan Plastik</option>
          <option value="6">Box Karton</option>
          <option value="7">Box Plastik</option>
     </select>
     @error('kemasan_produk')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
     @script()
     <script>
          $(document).ready(function() {
               $("#kemasan_produk").select2({
                    placeholder: "Pilih Kemasan Produk",
                    allowClear: true
               }).on('change', function() {
                    let data = $(this).val();
                    $wire.kemasan_produk = data;
               });
          });
     </script>
     @endscript
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="berat_produk">Berat Produk</label>
     <div class="realtive">
          <div class="absolute top-3 right-0 h-full flex items-center pr-3">
               <Span class="leading-none text-gray-500">gram</Span>
          </div>
          <input wire:model="berat_produk" type="text" name="berat_produk" id="berat_produk" placeholder="cth. 100" autocomplete="on"
               oninput="formatNumber(this)" inputmode="decimal"
               class="block w-full !pr-14 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          @error('berat_produk')
               <p class="flex items-center mt-2 text-xs text-[red]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>
                    {{ $message }}
               </p>
          @enderror
     </div>
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600">Dimensi Produk</label>
     <div class="grid grid-cols-2 gap-1">
          <div class="relative flex flex-wrap">
               <div class="absolute top-2 left-0 flex items-center pl-3">
                    <Span class="w-[52.5px] self-start font-medium text-sm text-gray-500">Panjang</Span>
                    {{-- <Span class="w-2.5 self-start font-medium text-sm text-gray-500">p</Span> --}}
                    <div class="h-6 border-l border-slate-200 ml-2"></div>
               </div>
               <div class="absolute top-0 right-0 h-full flex items-center pr-3">
                    <Span class="leading-none text-gray-500">cm</Span>
               </div>
               <input wire:model="panjang_produk" type="text" name="panjang_produk" id="panjang_produk" placeholder="cth. 10" autocomplete="on"
                    oninput="formatNumber(this)" inputmode="decimal"
                    class="block w-full !pl-20 !pr-10 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               {{-- <Span class="self-center ms-2 text-slate-700">cm</Span> --}}
          </div>

          <div class="relative flex flex-wrap">
               <div class="absolute top-2 left-0 flex items-center pl-3">
                    <Span class="w-[52.5px] self-start font-medium text-sm text-gray-500">Lebar</Span>
                    {{-- <Span class="w-2.5 self-start font-medium text-sm text-gray-500">l</Span> --}}
                    <div class="h-6 border-l border-slate-200 ml-2"></div>
               </div>
               <div class="absolute top-0 right-0 h-full flex items-center pr-3">
                    <Span class="leading-none text-gray-500">cm</Span>
               </div>
               <input wire:model="lebar_produk" type="text" name="lebar_produk" id="lebar_produk" placeholder="cth. 10" autocomplete="on"
                    oninput="formatNumber(this)" inputmode="decimal"
                    class="block w-full !pl-20 !pr-10 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          </div>

          <div class="relative flex flex-wrap">
               <div class="absolute top-2 left-0 flex items-center pl-3">
                    <Span class="w-[52.5px] self-start font-medium text-sm text-gray-500">Tinggi</Span>
                    {{-- <Span class="w-2.5 self-start font-medium text-sm text-gray-500">t</Span> --}}
                    <div class="h-6 border-l border-slate-200 ml-2"></div>
               </div>
               <div class="absolute top-0 right-0 h-full flex items-center pr-3">
                    <Span class="leading-none text-gray-500">cm</Span>
               </div>
               <input wire:model="tinggi_produk" type="text" name="tinggi_produk" id="tinggi_produk" placeholder="cth. 10" autocomplete="on"
                    oninput="formatNumber(this)" inputmode="decimal"
                    class="block w-full !pl-20 !pr-10 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          </div>
     </div>
     @error('panjang_produk')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
     @error('lebar_produk')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
     @error('tinggi_produk')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="saran_penyajian">Saran Penyajian</label>
     <textarea wire:model="saran_penyajian" name="saran_penyajian" id="saran_penyajian" rows="4" autocomplete="on"
          placeholder="cth. Masukan ke dalam air mendidih dan diamkan selama 1 menit"
          class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
     @error('saran_penyajian')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="lama_kadaluarsa">Lama Kadaluarsa</label>
     <div class="flex flex-wrap">
          <input wire:model="lama_kadaluarsa" type="text" name="lama_kadaluarsa" id="lama_kadaluarsa" placeholder="cth. 12" autocomplete="on" oninput="formatNumber(this)"
               class="block w-2/3 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-l-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
     
          <select wire:model="satuan_kadaluarsa" id="satuan_kadaluarsa" class="block w-1/3 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-r-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option value="hari" selected>Hari</option>
               <option value="minggu">Minggu</option>
               <option value="bulan">Bulan</option>
               <option value="tahun">Tahun</option>
          </select>
     </div>
     @error('lama_kadaluarsa')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div wire:ignore class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="sertifikat_halal">Sertifikat Halal</label>
     <select wire:model="sertifikat_halal" id="sertifikat_halal" name="sertifikat_halal"
          class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          <option></option>
          <option value="1">Sertifikat Halal 1</option>
          <option value="2">Sertifikat Halal 2</option>
     </select>
     @error('sertifikat_halal')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
     @script()
     <script>
          $(document).ready(function() {
                $("#sertifikat_halal").select2({
                    placeholder: "Pilih Sertifikat Halal",
                    allowClear: true
                }).on('change', function() {
                    let data = $(this).val();
                    $wire.sertifikat_halal = data;
                });
            });
     </script>
     @endscript
</div>

<div wire:ignore class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="sertifikat_pirt">Sertifikat PIRT</label>
     <select wire:model="sertifikat_pirt" id="sertifikat_pirt" name="sertifikat_pirt"
          class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
          <option></option>
          <option value="1">Sertifikat PIRT 1</option>
          <option value="2">Sertifikat PIRT 2</option>
     </select>
     @error('sertifikat_pirt')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
     @script()
     <script>
          $(document).ready(function() {
                $("#sertifikat_pirt").select2({
                    placeholder: "Pilih Sertifikat PIRT",
                    allowClear: true
                }).on('change', function() {
                    let data = $(this).val();
                    $wire.sertifikat_pirt = data;
                });
            });
     </script>
     @endscript
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="kapasitas_produksi">Kapasitas Produksi</label>
     <div class="flex flex-wrap">
          <input wire:model="kapasitas_produksi" type="text" name="kapasitas_produksi" id="kapasitas_produksi" placeholder="cth. 100" autocomplete="on" oninput="formatNumber(this)"
               class="block w-3/5 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-l-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
     
          <select wire:model="satuan_produksi" id="satuan_produksi" class="block w-2/5 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-r-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option value="hari" selected>per Hari</option>
               <option value="minggu">per Minggu</option>
               <option value="bulan">per Bulan</option>
               <option value="tahun">per Tahun</option>
          </select>
     </div>
     @error('kapasitas_produksi')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>