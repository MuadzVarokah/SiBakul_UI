<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Aspek Produktivitas</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form wire:submit.prevent="simpan" class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center">
                    @csrf
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

                        <!-- Input Kegiatan Usaha -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="kegiatan_usaha">Kegiatan Usaha</label>
                                <select wire:model="kegiatan_usaha" id="kegiatan_usaha" name="kegiatan_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Rutin Harian</option>
                                    <option value="2">Berdasar Pesanan/Proyek</option>
                                </select>
                            </div>
                            @error('kegiatan_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#kegiatan_usaha").select2({
                                    placeholder: "Pilih Kegiatan Usaha",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kegiatan_usaha', e.target.value);
                                });

                                if (@this.kegiatan_usaha) {
                                    // Menyinkronkan Select2 dengan nilai kegiatan_usaha yang sudah ada
                                    $("#kegiatan_usaha").val(@this.kegiatan_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Perkembangan Usaha -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="perkembangan_usaha">Perkembangan Usaha 3 Bulan Terakhir</label>
                                <select wire:model="perkembangan_usaha" id="perkembangan_usaha" name="perkembangan_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Menurun</option>
                                    <option value="2">Stagnan (Tidak Berubah)</option>
                                    <option value="3">Meningkat</option>
                                </select>
                            </div>
                            @error('perkembangan_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#perkembangan_usaha").select2({
                                    placeholder: "Pilih Perkembangan Usaha",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('perkembangan_usaha', e.target.value);
                                });

                                if (@this.perkembangan_usaha) {
                                    // Menyinkronkan Select2 dengan nilai perkembangan_usaha yang sudah ada
                                    $("#perkembangan_usaha").val(@this.perkembangan_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Status Sertifikasi Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="sertifikasi_produk">Status Sertifikasi Produk</label>
                                <select wire:model="sertifikasi_produk" id="sertifikasi_produk" name="sertifikasi_produk" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Punya</option>
                                    <option value="2">Punya Kadaluarsa</option>
                                    <option value="3">Punya & Berlaku</option>
                                </select>
                            </div>
                            @error('sertifikasi_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#sertifikasi_produk").select2({
                                    placeholder: "Pilih Status Sertifikasi Produk",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('sertifikasi_produk', e.target.value);
                                });

                                if (@this.sertifikasi_produk) {
                                    // Menyinkronkan Select2 dengan nilai sertifikasi_produk yang sudah ada
                                    $("#sertifikasi_produk").val(@this.sertifikasi_produk).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kemasan Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="kemasan_produk">Kemasan Produk</label>
                                <select wire:model="kemasan_produk" id="kemasan_produk" name="kemasan_produk" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Biasa Saja</option>
                                    <option value="2">Cukup Baik</option>
                                    <option value="3">Sangat Baik</option>
                                </select>
                            </div>
                            @error('kemasan_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#kemasan_produk").select2({
                                    placeholder: "Pilih Kemasan Produk",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kemasan_produk', e.target.value);
                                });

                                if (@this.kemasan_produk) {
                                    // Menyinkronkan Select2 dengan nilai kemasan_produk yang sudah ada
                                    $("#kemasan_produk").val(@this.kemasan_produk).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kondisi Alat untuk Membuat Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="kondisi_alat">Kondisi Alat untuk Membuat Produk</label>
                                <select wire:model="kondisi_alat" id="kondisi_alat" name="kondisi_alat" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Kurang Memadai</option>
                                    <option value="2">Cukup Memadai</option>
                                    <option value="3">Sangat Memadai</option>
                                </select>
                            </div>
                            @error('kondisi_alat')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#kondisi_alat").select2({
                                    placeholder: "Pilih Kondisi Alat",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kondisi_alat', e.target.value);
                                });

                                if (@this.kondisi_alat) {
                                    // Menyinkronkan Select2 dengan nilai kondisi_alat yang sudah ada
                                    $("#kondisi_alat").val(@this.kondisi_alat).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Ketersediaan Bahan Baku -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="ketersediaan_bahan_baku">Ketersediaan Bahan Baku</label>
                                <select wire:model="ketersediaan_bahan_baku" id="ketersediaan_bahan_baku" name="ketersediaan_bahan_baku" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Sulit Didapatkan</option>
                                    <option value="2">Tersedia Musiman</option>
                                    <option value="3">Mudah Didapatkan</option>
                                    <option value="4">Memiliki Sistem Penyediaan yang Baik</option>
                                </select>
                            </div>
                            @error('ketersediaan_bahan_baku')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#ketersediaan_bahan_baku").select2({
                                    placeholder: "Pilih Ketersediaan Bahan Baku",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('ketersediaan_bahan_baku', e.target.value);
                                });

                                if (@this.ketersediaan_bahan_baku) {
                                    // Menyinkronkan Select2 dengan nilai ketersediaan_bahan_baku yang sudah ada
                                    $("#ketersediaan_bahan_baku").val(@this.ketersediaan_bahan_baku).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kondisi Gudang -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="kondisi_gudang">Kondisi Gudang/Media Penyimpanan Produk</label>
                                <select wire:model="kondisi_gudang" id="kondisi_gudang" name="kondisi_gudang" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Seadanya</option>
                                    <option value="2">Terkelola Cukup Baik</option>
                                    <option value="3">Menerapkan Pencatatan Lokasi Produk/Inventori</option>
                                </select>
                            </div>
                            @error('kondisi_gudang')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#kondisi_gudang").select2({
                                    placeholder: "Pilih Kondisi Gudang",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kondisi_gudang', e.target.value);
                                });

                                if (@this.kondisi_gudang) {
                                    // Menyinkronkan Select2 dengan nilai kondisi_gudang yang sudah ada
                                    $("#kondisi_gudang").val(@this.kondisi_gudang).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kondisi Tempat Produksi/Kerja -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="kondisi_tempat">Kondisi Tempat Produksi/Kerja</label>
                                <select wire:model="kondisi_tempat" id="kondisi_tempat" name="kondisi_tempat" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Kurang Memadai</option>
                                    <option value="2">Cukup Memadai</option>
                                    <option value="3">Sangat Memadai</option>
                                </select>
                            </div>
                            @error('kondisi_tempat')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#kondisi_tempat").select2({
                                    placeholder: "Pilih Kondisi Tempat Produksi/Kerja",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kondisi_tempat', e.target.value);
                                });

                                if (@this.kondisi_tempat) {
                                    // Menyinkronkan Select2 dengan nilai kondisi_tempat yang sudah ada
                                    $("#kondisi_tempat").val(@this.kondisi_tempat).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Menerapkan SOP dalam Bekerja -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="menerapkan_sop">Menerapkan SOP dalam Bekerja</label>
                                <select wire:model="menerapkan_sop" id="menerapkan_sop" name="menerapkan_sop" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Sejalannya</option>
                                    <option value="2">Menerapkan - Tidak Tercatat</option>
                                    <option value="3">Menerapkan - Tercatat</option>
                                </select>
                            </div>
                            @error('menerapkan_sop')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @script()
                        <script>
                            $(document).ready(function() {
                                $("#menerapkan_sop").select2({
                                    placeholder: "Pilih Penerapan SOP dalam Bekerja",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('menerapkan_sop', e.target.value);
                                });

                                if (@this.menerapkan_sop) {
                                    // Menyinkronkan Select2 dengan nilai menerapkan_sop yang sudah ada
                                    $("#menerapkan_sop").val(@this.menerapkan_sop).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span
                                    class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
                            <div class="grid grid-cols-2 gap-1 mt-2">
                                <a wire:navigate:hover href="javascript:history.back()" type="button"
                                    class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    Simpan
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
