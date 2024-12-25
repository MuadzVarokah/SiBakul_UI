<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Aspek Digital Marketing</x-sub-navbar>

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

                        <!-- Input Penggunaan Media Chat untuk Bisnis -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="penggunaan_media_chat">
                                    Penggunaan Media Chat untuk Bisnis
                                    <button data-popover-target="popover-description-1" data-popover-placement="bottom" data-popover-trigger="click" type="button"><i class="fa-solid fa-circle-question w-4 h-4 ms-1 text-gray-400 hover:text-gray-500"></i><span class="sr-only">Show information</span></button>
                                </label>
                                <div data-popover id="popover-description-1" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p class="text-justify">WhatsApp, DM Instagram, Messenger, dsb (Termasuk Status)</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <select wire:model="penggunaan_media_chat" id="penggunaan_media_chat" name="penggunaan_media_chat" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Pernah</option>
                                    <option value="2">Seminggu Beberapa Kali</option>
                                    <option value="3">Setiap Hari Kerja</option>
                                </select>
                            </div>
                            @error('penggunaan_media_chat')
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
                                $("#penggunaan_media_chat").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('penggunaan_media_chat', e.target.value);
                                });

                                if (@this.penggunaan_media_chat) {
                                    // Menyinkronkan Select2 dengan nilai penggunaan_media_chat yang sudah ada
                                    $("#penggunaan_media_chat").val(@this.penggunaan_media_chat).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Pengelolaan WhatsApp -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pengelolaan_wa">Pengelolaan&nbsp;<i>WhatsApp</i></label>
                                <select wire:model="pengelolaan_wa" id="pengelolaan_wa" name="pengelolaan_wa" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Nomor Sama dengan Akun Pribadi</option>
                                    <option value="2">Nomor untuk Bisnis Terpisah (Berbeda) dengan Akun Pribadi</option>
                                    <option value="3">Dikelola Admin</option>
                                </select>
                            </div>
                            @error('pengelolaan_wa')
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
                                $("#pengelolaan_wa").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('pengelolaan_wa', e.target.value);
                                });

                                if (@this.pengelolaan_wa) {
                                    // Menyinkronkan Select2 dengan nilai pengelolaan_wa yang sudah ada
                                    $("#pengelolaan_wa").val(@this.pengelolaan_wa).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Katalog di WhatsApp Business -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="katalog_wa_bisnis">Katalog di&nbsp;<i>WhatsApp Business</i></label>
                                <select wire:model="katalog_wa_bisnis" id="katalog_wa_bisnis" name="katalog_wa_bisnis" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Memakai Whatsapp Business</option>
                                    <option value="2">Tidak Memiliki Katalog</option>
                                    <option value="3">Memiliki Katalog</option>
                                </select>
                            </div>
                            @error('katalog_wa_bisnis')
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
                                $("#katalog_wa_bisnis").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('katalog_wa_bisnis', e.target.value);
                                });

                                if (@this.katalog_wa_bisnis) {
                                    // Menyinkronkan Select2 dengan nilai katalog_wa_bisnis yang sudah ada
                                    $("#katalog_wa_bisnis").val(@this.katalog_wa_bisnis).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Penjawab Otomatis di WhatsApp Business -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="penjawab_otomatis_wa_bisnis">Penjawab Otomatis di&nbsp;<i>WhatsApp Business</i></label>
                                <select wire:model="penjawab_otomatis_wa_bisnis" id="penjawab_otomatis_wa_bisnis" name="penjawab_otomatis_wa_bisnis" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Memakai Whatsapp Business</option>
                                    <option value="2">Menerapkan di Ucapan Selamat Datang</option>
                                    <option value="3">Menerapkan di Respon Cepat</option>
                                </select>
                            </div>
                            @error('penjawab_otomatis_wa_bisnis')
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
                                $("#penjawab_otomatis_wa_bisnis").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('penjawab_otomatis_wa_bisnis', e.target.value);
                                });

                                if (@this.penjawab_otomatis_wa_bisnis) {
                                    // Menyinkronkan Select2 dengan nilai penjawab_otomatis_wa_bisnis yang sudah ada
                                    $("#penjawab_otomatis_wa_bisnis").val(@this.penjawab_otomatis_wa_bisnis).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Penggunaan Media Sosial untuk Bisnis -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="penggunaan_media_sosial">
                                    Penggunaan Media Sosial untuk Bisnis
                                    <button data-popover-target="popover-description-2" data-popover-placement="top" data-popover-trigger="click" type="button"><i class="fa-solid fa-circle-question w-4 h-4 ms-1 text-gray-400 hover:text-gray-500"></i><span class="sr-only">Show information</span></button>
                                </label>
                                <div data-popover id="popover-description-2" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p class="text-justify">Instagram, Facebook, TikTok, dsb</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <select wire:model="penggunaan_media_sosial" id="penggunaan_media_sosial" name="penggunaan_media_sosial" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Pernah</option>
                                    <option value="2">Seminggu Beberapa Kali</option>
                                    <option value="3">Setiap Hari Kerja</option>
                                </select>
                            </div>
                            @error('penggunaan_media_sosial')
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
                                $("#penggunaan_media_sosial").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('penggunaan_media_sosial', e.target.value);
                                });

                                if (@this.penggunaan_media_sosial) {
                                    // Menyinkronkan Select2 dengan nilai penggunaan_media_sosial yang sudah ada
                                    $("#penggunaan_media_sosial").val(@this.penggunaan_media_sosial).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Penggunaan Marketplace untuk Bisnis -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="penggunaan_marketplace">
                                    Penggunaan Marketplace untuk Bisnis
                                    <button data-popover-target="popover-description-3" data-popover-placement="top" data-popover-trigger="click" type="button"><i class="fa-solid fa-circle-question w-4 h-4 ms-1 text-gray-400 hover:text-gray-500"></i><span class="sr-only">Show information</span></button>
                                </label>
                                <div data-popover id="popover-description-3" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p class="text-justify">Shopee, Tokopedia, SiBakul MarketHUB, dsb</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <select wire:model="penggunaan_marketplace" id="penggunaan_marketplace" name="penggunaan_marketplace" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Pernah</option>
                                    <option value="2">Seminggu Beberapa Kali</option>
                                    <option value="3">Setiap Hari Kerja</option>
                                </select>
                            </div>
                            @error('penggunaan_marketplace')
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
                                $("#penggunaan_marketplace").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('penggunaan_marketplace', e.target.value);
                                });

                                if (@this.penggunaan_marketplace) {
                                    // Menyinkronkan Select2 dengan nilai penggunaan_marketplace yang sudah ada
                                    $("#penggunaan_marketplace").val(@this.penggunaan_marketplace).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Respon pada Google Profil Bisnis -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="respon_google_profil_bisnis">Respon pada Google Profil Bisnis</label>
                                <select wire:model="respon_google_profil_bisnis" id="respon_google_profil_bisnis" name="respon_google_profil_bisnis" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Punya</option>
                                    <option value="2">Belum Pernah</option>
                                    <option value="3">Jarang</option>
                                    <option value="4">Selalu Merespon</option>
                                </select>
                            </div>
                            @error('respon_google_profil_bisnis')
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
                                $("#respon_google_profil_bisnis").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('respon_google_profil_bisnis', e.target.value);
                                });

                                if (@this.respon_google_profil_bisnis) {
                                    // Menyinkronkan Select2 dengan nilai respon_google_profil_bisnis yang sudah ada
                                    $("#respon_google_profil_bisnis").val(@this.respon_google_profil_bisnis).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Update Website/Blog -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="update_web">Update Website/Blog</label>
                                <select wire:model="update_web" id="update_web" name="update_web" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Menggunakan</option>
                                    <option value="2">Cukup jarang</option>
                                    <option value="3">Setiap bulan/Lebih Sering</option>
                                </select>
                            </div>
                            @error('update_web')
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
                                $("#update_web").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('update_web', e.target.value);
                                });

                                if (@this.update_web) {
                                    // Menyinkronkan Select2 dengan nilai update_web yang sudah ada
                                    $("#update_web").val(@this.update_web).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Hasil Pencarian Nama Usaha di Google -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="hasil_pencarian_nama_usaha">
                                    Hasil Pencarian Nama Usaha di Google
                                    <button data-popover-target="popover-description-4" data-popover-placement="top" data-popover-trigger="click" type="button"><i class="fa-solid fa-circle-question w-4 h-4 ms-1 text-gray-400 hover:text-gray-500"></i><span class="sr-only">Show information</span></button>
                                </label>
                                <div data-popover id="popover-description-4" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p class="text-justify">Misal. PLUT DIY muncul di halaman pertama</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <select wire:model="hasil_pencarian_nama_usaha" id="hasil_pencarian_nama_usaha" name="hasil_pencarian_nama_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Muncul</option>
                                    <option value="2">Muncul di Halaman 2 - 5</option>
                                    <option value="3">Muncul di Halaman 1</option>
                                </select>
                            </div>
                            @error('hasil_pencarian_nama_usaha')
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
                                $("#hasil_pencarian_nama_usaha").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('hasil_pencarian_nama_usaha', e.target.value);
                                });

                                if (@this.hasil_pencarian_nama_usaha) {
                                    // Menyinkronkan Select2 dengan nilai hasil_pencarian_nama_usaha yang sudah ada
                                    $("#hasil_pencarian_nama_usaha").val(@this.hasil_pencarian_nama_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Menggunakan Iklan Berbayar  -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="menggunakan_iklan_berbayar">Menggunakan Iklan Berbayar </label>
                                <select wire:model="menggunakan_iklan_berbayar" id="menggunakan_iklan_berbayar" name="menggunakan_iklan_berbayar" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Pernah</option>
                                    <option value="2">Pernah</option>
                                    <option value="3">Pernah & Disesuaikan Kebutuhan Promosi</option>
                                </select>
                            </div>
                            @error('menggunakan_iklan_berbayar')
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
                                $("#menggunakan_iklan_berbayar").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('menggunakan_iklan_berbayar', e.target.value);
                                });

                                if (@this.menggunakan_iklan_berbayar) {
                                    // Menyinkronkan Select2 dengan nilai menggunakan_iklan_berbayar yang sudah ada
                                    $("#menggunakan_iklan_berbayar").val(@this.menggunakan_iklan_berbayar).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
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