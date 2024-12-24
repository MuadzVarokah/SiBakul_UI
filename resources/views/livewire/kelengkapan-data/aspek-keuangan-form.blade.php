<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Aspek Keuangan</x-sub-navbar>

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

                        <!-- Input Melakukan Pembukuan -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600">Melakukan Pembukuan</label>
                            <div class="flex flex-wrap gap-2">
                                <div class="flex flex-wrap items-center w-full">
                                    <input wire:model="melakukan_pembukuan" id="melakukan_pembukuan-1" type="radio" value="iya" name="melakukan_pembukuan"
                                        class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-green-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="melakukan_pembukuan-1" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Iya</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <input wire:model="melakukan_pembukuan" id="melakukan_pembukuan-2" type="radio" value="tidak" name="melakukan_pembukuan"
                                        class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-green-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="melakukan_pembukuan-2" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Tidak</label>
                                </div>
                            </div>
                            @error('melakukan_pembukuan')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Jenis Laporan Keuangan -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600">Jenis Laporan Keuangan</label>
                            <div class="flex flex-wrap gap-1">
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="jenis_laporan_keuangan" type="checkbox" name="jenis_laporan_keuangan" value="Neraca" id="neraca"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="neraca" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Neraca</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="jenis_laporan_keuangan" type="checkbox" name="jenis_laporan_keuangan" value="Rugi Laba" id="rugi_laba"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="rugi_laba" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Rugi Laba</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="jenis_laporan_keuangan" type="checkbox" name="jenis_laporan_keuangan" value="Jurnal" id="jurnal"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="jurnal" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Jurnal</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="jenis_laporan_keuangan" type="checkbox" name="jenis_laporan_keuangan" value="Arus Kas Sederhana" id="arus_kas_sederhana"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="arus_kas_sederhana" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Arus Kas Sederhana</label>
                                </div>
                            </div>
                            @error('jenis_laporan_keuangan')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Peran Usaha -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="peran_usaha">Peran Usaha untuk Penghasilan Harian</label>
                                <select wire:model="peran_usaha" id="peran_usaha" name="peran_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Menjadi Sumber Utama</option>
                                    <option value="2">Hampir Menjadi Sumber Utama</option>
                                    <option value="3">Menjadi Sumber Utama</option>
                                </select>
                            </div>
                            @error('peran_usaha')
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
                                $("#peran_usaha").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('peran_usaha', e.target.value);
                                });

                                if (@this.peran_usaha) {
                                    // Menyinkronkan Select2 dengan nilai peran_usaha yang sudah ada
                                    $("#peran_usaha").val(@this.peran_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Pengelolaan Keuangan -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pengelolaan_keuangan">Pengelolaan Keuangan</label>
                                <select wire:model="pengelolaan_keuangan" id="pengelolaan_keuangan" name="pengelolaan_keuangan" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Masih Tercampur</option>
                                    <option value="2">Sedang Berusaha Memisah</option>
                                    <option value="3">Sudah Dipisah</option>
                                </select>
                            </div>
                            @error('pengelolaan_keuangan')
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
                                $("#pengelolaan_keuangan").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('pengelolaan_keuangan', e.target.value);
                                });

                                if (@this.pengelolaan_keuangan) {
                                    // Menyinkronkan Select2 dengan nilai pengelolaan_keuangan yang sudah ada
                                    $("#pengelolaan_keuangan").val(@this.pengelolaan_keuangan).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Dokumentasi Nota -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="dokumentasi_nota">Dokumentasi Nota</label>
                                <select wire:model="dokumentasi_nota" id="dokumentasi_nota" name="dokumentasi_nota" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada</option>
                                    <option value="2">Ada - Tidak Tertata Rapi</option>
                                    <option value="3">Ada - Tertata Rapi</option>
                                </select>
                            </div>
                            @error('dokumentasi_nota')
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
                                $("#dokumentasi_nota").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('dokumentasi_nota', e.target.value);
                                });

                                if (@this.dokumentasi_nota) {
                                    // Menyinkronkan Select2 dengan nilai dokumentasi_nota yang sudah ada
                                    $("#dokumentasi_nota").val(@this.dokumentasi_nota).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Catatan Transaksi -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="catatan_transaksi">Catatan Transaksi</label>
                                <select wire:model="catatan_transaksi" id="catatan_transaksi" name="catatan_transaksi" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada</option>
                                    <option value="2">Ada - Manual</option>
                                    <option value="3">Ada - Menggunakan Aplikasi</option>
                                </select>
                            </div>
                            @error('catatan_transaksi')
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
                                $("#catatan_transaksi").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('catatan_transaksi', e.target.value);
                                });

                                if (@this.catatan_transaksi) {
                                    // Menyinkronkan Select2 dengan nilai catatan_transaksi yang sudah ada
                                    $("#catatan_transaksi").val(@this.catatan_transaksi).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Laporan Keuangan -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="laporan_keuangan">Laporan Keuangan</label>
                                <select wire:model="laporan_keuangan" id="laporan_keuangan" name="laporan_keuangan" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada</option>
                                    <option value="2">Ada - Manual</option>
                                    <option value="3">Ada - Menggunakan Aplikasi</option>
                                </select>
                            </div>
                            @error('laporan_keuangan')
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
                                $("#laporan_keuangan").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('laporan_keuangan', e.target.value);
                                });

                                if (@this.laporan_keuangan) {
                                    // Menyinkronkan Select2 dengan nilai laporan_keuangan yang sudah ada
                                    $("#laporan_keuangan").val(@this.laporan_keuangan).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Utang Bank -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="utang_bank">Pernah Memiliki Utang Bank</label>
                                <select wire:model="utang_bank" id="utang_bank" name="utang_bank" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak</option>
                                    <option value="2">Punya - Pinjaman Program (KUR/PKBL)</option>
                                    <option value="3">Punya - Pinjaman Komersil</option>
                                </select>
                            </div>
                            @error('utang_bank')
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
                                $("#utang_bank").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('utang_bank', e.target.value);
                                });

                                if (@this.utang_bank) {
                                    // Menyinkronkan Select2 dengan nilai utang_bank yang sudah ada
                                    $("#utang_bank").val(@this.utang_bank).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Pencatatan Aset -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pencatatan_aset">Pencatatan Aset</label>
                                <select wire:model="pencatatan_aset" id="pencatatan_aset" name="pencatatan_aset" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada</option>
                                    <option value="2">Ada - Tidak Lengkap</option>
                                    <option value="3">Ada - Lengkap</option>
                                </select>
                            </div>
                            @error('pencatatan_aset')
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
                                $("#pencatatan_aset").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('pencatatan_aset', e.target.value);
                                });

                                if (@this.pencatatan_aset) {
                                    // Menyinkronkan Select2 dengan nilai pencatatan_aset yang sudah ada
                                    $("#pencatatan_aset").val(@this.pencatatan_aset).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Transaksi Pembayaran -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Transaksi Pembayaran</label>
                            <div class="flex flex-wrap gap-1">
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="transaksi_pembayaran" type="checkbox" name="transaksi_pembayaran" value="Tunai" id="tunai"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="tunai" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Tunai</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="transaksi_pembayaran" type="checkbox" name="transaksi_pembayaran" value="Non Tunai/Transfer Bank" id="non_tunai"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="non_tunai" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Non Tunai/Transfer Bank</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="transaksi_pembayaran" type="checkbox" name="transaksi_pembayaran" value="Uang Digital (QRIS, GoPay, OVO, Dana, dsb)" id="uang_digital"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="uang_digital" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Uang Digital (QRIS, GoPay, OVO, Dana, dsb)</label>
                                </div>
                            </div>
                            @error('transaksi_pembayaran')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

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
