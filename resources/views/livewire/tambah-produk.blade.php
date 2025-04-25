<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-track></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" data-navigate-track></script>
    @endsection

    @section('styles')
        @parent
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    @endsection
    {{-- <x-sub-navbar href="javascript:history.back()">Tambah Produk</x-sub-navbar> --}}
    <x-sub-navbar href="{{ route('markethub') }}">Tambah Produk</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form wire:submit.prevent="simpan" class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center" enctype="multipart/form-data">
                    <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">

                        <style>
                            .required:after {
                                content: "*";
                                color: red;
                                font-weight: 900;
                            }

                            .select2-hidden-accessible {
                                height: 37.6px !important;
                                width: 100% !important;
                            }
                        </style>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nama_produk">Nama Produk</label>
                            <input wire:model="nama_produk" type="text" name="nama_produk" id="nama_produk" placeholder="cth. Topi Badut" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('nama_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="foto_produk">Foto Produk</label>
                            <div class="flex flex-wrap justify-between w-full">
                                @if ($foto_produk)
                                    <img src="{{ $foto_produk->temporaryUrl() }}" class="w-full h-auto mb-1">
                                @endif
                                <div wire:loading wire:target="foto_produk" class="flex flex-wrap gap-2 mb-1">
                                    <svg class="text-gray-300 animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                        <path d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900"></path>
                                    </svg>
                                    <span class="text-sm text-slate-400">Mengunggah...</span>
                                </div>
                                <input type="file" wire:model="foto_produk" id="foto_produk" accept="image/*" required
                                    class="block w-[calc(100%-2.75rem)] !bg-white placeholder:!text-slate-400 !text-xs !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                <button type="button" id="tambah-foto_produk"
                                    class="w-9 px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        
                            <div class="flex flex-wrap w-full" id="container-foto_produk">
                                @foreach($tambahan_foto_produk as $index => $foto)
                                    <div class="flex flex-wrap justify-between w-full mt-1 tambahan-foto_produk">
                                        @if ($tambahan_foto_produk[$index])
                                            <img src="{{ $tambahan_foto_produk[$index]->temporaryUrl() }}" class="w-full h-auto mb-1">
                                        @endif
                                        <div wire:loading wire:target="tambahan_foto_produk.{{ $index }}" class="flex flex-wrap gap-2 mb-1 mt-1">
                                            <svg class="text-gray-300 animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                                <path d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900"></path>
                                            </svg>
                                            <span class="text-sm text-slate-400">Mengunggah...</span>
                                        </div>
                                        <input type="file" wire:model="tambahan_foto_produk.{{ $index }}" accept="image/*" required
                                            class="block w-[calc(100%-2.75rem)] !bg-white placeholder:!text-slate-400 !text-xs !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                        <button type="button" wire:click="removeFoto({{ $index }})"
                                            class="w-9 px-2.5 py-2 ms-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-600 active:scale-90 transition-transform dark:bg-red-600 dark:hover:bg-red-700">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            
                            <p class="flex items-center mt-2 text-xs text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>
                                Dapat mengunggah 1 - 3 buah foto.
                            </p>
                            @error('foto_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                            @error('tambahan_foto_produk.*')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="harga_jual">Harga Jual</label>
                            <div class="relative">
                                <div class="absolute start-0 top-3 bottom-1/2 flex items-center ps-3.5 pointer-events-none">
                                    <span class="w-4 h-4 text-gray-500 dark:text-gray-400 text-sm font-medium">Rp.</span>
                                </div>
                                <input wire:model="harga_jual" type="text" name="harga_jual" id="harga_jual" placeholder="cth. 100.000" autocomplete="on" oninput="formatNumber(this)" inputmode="decimal" required
                                    class="block w-full ps-10 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                            @error('harga_jual')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="jenis_produk_disable">Jenis Produk</label>
                            <select id="jenis_produk_disable" class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0" disabled>
                                @foreach ($listProduk as $keyProduk => $valueProduk)
                                    <option value="{!! $valueProduk->id !!}" {{ $jenis_produk == $valueProduk->id ? 'selected' : '' }}>{!! $valueProduk->produk !!}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="deskripsi_produk">Deskripsi Produk</label>
                            <textarea wire:model="deskripsi_produk" name="deskripsi_produk" id="deskripsi_produk" rows="4" autocomplete="on" required placeholder="cth. Barang dengan kualitas bahan premium"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
                            @error('deskripsi_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        @switch($jenis_produk)
                            @case(1) <!-- Makanan/Minuman Kemasan -->
                                <hr>
                                <x-form-tambah_produk.produk_1></x-form-tambah_produk.produk_1>
                                @break
                            @case(3) <!-- Home Decor -->
                                <hr>
                                <x-form-tambah_produk.produk_3></x-form-tambah_produk.produk_3>
                                @break
                            @case(4) <!-- Fashion dan Kerajinan Fashion -->
                                <hr>
                                <x-form-tambah_produk.produk_3></x-form-tambah_produk.produk_3>
                                @break
                            @case(5) <!-- Produk Pertanian -->
                                <hr>
                                <x-form-tambah_produk.produk_5></x-form-tambah_produk.produk_5>
                                @break
                            @case(6) <!-- Herbal, Kecantikan, dan Kesehatan -->
                                <hr>
                                <x-form-tambah_produk.produk_6></x-form-tambah_produk.produk_6>
                                @break
                            @default
                                
                        @endswitch

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
                            <div class="grid grid-cols-2 gap-1 mt-2">
                                <a wire:navigate href="{{ route('markethub') }}" type="button" class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Batal
                                </a>
                                <button type="submit" class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('scripts')
        @parent
        <script type="text/javascript">
            $("#tambah-foto_produk").click(function() {
                @this.call('addFoto');
            });

            function formatNumber(input) {
                // Menghapus karakter yang bukan angka
                let value = input.value.replace(/[^\d]/g, '');

                // Menambahkan titik setiap 3 digit dari belakang
                let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

                // Menampilkan nilai yang diformat kembali ke dalam input
                input.value = formattedValue;
            }
        </script>
    @endsection
</div>