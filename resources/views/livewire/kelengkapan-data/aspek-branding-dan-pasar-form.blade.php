<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" data-navigate-once></script>
    @endsection

    @section('styles')
        @parent
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    @endsection

    <x-sub-navbar href="javascript:history.back()">Form Aspek Branding & Pasar</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form wire:submit.prevent="simpan" class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center">
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

                        <!-- Input Mengetahui Keunggulan Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="keunggulan_produk">Mengetahui Keunggulan Produk</label>
                                <select wire:model="keunggulan_produk" id="keunggulan_produk" name="keunggulan_produk" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Mengetahui</option>
                                    <option value="2">Mengetahui</option>
                                    <option value="3">Mengetahui & Mempromosikan</option>
                                </select>
                            </div>
                            @error('keunggulan_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memahami Target Pasar -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="target_pasar">Memahami Target Pasar</label>
                                <select wire:model="target_pasar" id="target_pasar" name="target_pasar" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Memahami</option>
                                    <option value="2">Memahami</option>
                                    <option value="3">Memahami & Memiliki Strategi</option>
                                </select>
                            </div>
                            @error('target_pasar')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memahami Konsep Branding -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="konsep_branding">Memahami Konsep Branding</label>
                                <select wire:model="konsep_branding" id="konsep_branding" name="konsep_branding" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Memahami</option>
                                    <option value="2">Memahami</option>
                                    <option value="3">Memahami & Sudah Menerapkan</option>
                                </select>
                            </div>
                            @error('konsep_branding')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Melakukan Co Branding -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="co_branding">Melakukan Co Branding</label>
                                <select wire:model="co_branding" id="co_branding" name="co_branding" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum</option>
                                    <option value="2">Sudah (contoh dengan Jogjamark)</option>
                                </select>
                            </div>
                            @error('co_branding')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Ketersediaan Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="ketersediaan_produk">Ketersediaan Produk</label>
                                <select wire:model="ketersediaan_produk" id="ketersediaan_produk" name="ketersediaan_produk" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Berdasarkan Pesanan</option>
                                    <option value="2">Produk Musiman</option>
                                    <option value="3">Tersedia Setiap Hari</option>
                                </select>
                            </div>
                            @error('ketersediaan_produk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Etiket Merek (Logo Dagang) -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="etiket_merek">Etiket Merek (Logo Dagang)</label>
                                <select wire:model="etiket_merek" id="etiket_merek" name="etiket_merek" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Memiliki</option>
                                    <option value="2">Memiliki Alakadarnya</option>
                                    <option value="3">Memiliki dengan Desain yang Baik</option>
                                </select>
                            </div>
                            @error('etiket_merek')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Merek Terdaftar di HAKI -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="merek_terdaftar_haki">Merek Terdaftar di HAKI</label>
                                <select wire:model="merek_terdaftar_haki" id="merek_terdaftar_haki" name="merek_terdaftar_haki" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Terdaftar</option>
                                    <option value="2">Proses Didaftarkan</option>
                                    <option value="3">Sudah Terdaftar</option>
                                </select>
                            </div>
                            @error('merek_terdaftar_haki')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memiliki Mitra Usaha/Reseller -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="mitra_usaha">Memiliki Mitra Usaha/Reseller</label>
                                <select wire:model="mitra_usaha" id="mitra_usaha" name="mitra_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum Punya</option>
                                    <option value="2">Sudah Punya</option>
                                </select>
                            </div>
                            @error('mitra_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Cakupan Pemasaran Produk -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="cakupan_pemasaran">Cakupan Pemasaran Produk</label>
                                <select wire:model="cakupan_pemasaran" id="cakupan_pemasaran" name="cakupan_pemasaran" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Lokal Kabupaten</option>
                                    <option value="2">Regional Jateng DIY</option>
                                    <option value="3">Nasional</option>
                                    <option value="4">Luar Negeri</option>
                                </select>
                            </div>
                            @error('cakupan_pemasaran')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memiliki Pelanggan Loyal -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pelanggan_loyal">Memiliki Pelanggan Loyal</label>
                                <select wire:model="pelanggan_loyal" id="pelanggan_loyal" name="pelanggan_loyal" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Belum punya</option>
                                    <option value="2">Punya - Tidak Terdata</option>
                                    <option value="3">Punya - Terdata</option>
                                </select>
                            </div>
                            @error('pelanggan_loyal')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Pernah Melakukan Pameran Secara Mandiri -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pameran_mandiri">Pernah Melakukan Pameran Secara Mandiri</label>
                                <select wire:model="pameran_mandiri" id="pameran_mandiri" name="pameran_mandiri" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Pernah</option>
                                    <option value="2">Pernah - Skala Lokal Kabupaten</option>
                                    <option value="3">Pernah - Skala Jateng DIY</option>
                                    <option value="3">Pernah - Skala Nasional</option>
                                </select>
                            </div>
                            @error('pameran_mandiri')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Media Pemasaran yang Digunakan -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600">Media Pemasaran yang Digunakan</label>
                            <div class="flex flex-wrap gap-1">
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="1" id="media_pemasaran-1"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-1" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Lapak/Toko/Warung</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="2" id="media_pemasaran-2"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-2" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Banner/Flyer/Kartu Nama</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="3" id="media_pemasaran-3"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-3" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">WhatsApp</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="4" id="media_pemasaran-4"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-4" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Media Sosial</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="5" id="media_pemasaran-5"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-5" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Google Business</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="6" id="media_pemasaran-6"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-6" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Marketplace</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="media_pemasaran" type="checkbox" name="media_pemasaran" value="7" id="media_pemasaran-7"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="media_pemasaran-7" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Website</label>
                                </div>
                            </div>
                            @error('media_pemasaran')
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
                                <a href="javascript:history.back()" type="button"
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

    @section('scripts')
        @parent
        @script()
        <script>
            $(document).ready(function() {
                //Select2 - Mengetahui Keunggulan Produk
                $("#keunggulan_produk").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('keunggulan_produk', e.target.value);
                });

                if (@this.keunggulan_produk) {
                    // Menyinkronkan Select2 dengan nilai keunggulan_produk yang sudah ada
                    $("#keunggulan_produk").val(@this.keunggulan_produk).trigger('change');
                }
            
                //Select2 - Memahami Target Pasar
                $("#target_pasar").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('target_pasar', e.target.value);
                });

                if (@this.target_pasar) {
                    // Menyinkronkan Select2 dengan nilai target_pasar yang sudah ada
                    $("#target_pasar").val(@this.target_pasar).trigger('change');
                }
            
                //Select2 - Memahami Konsep Branding
                $("#konsep_branding").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('konsep_branding', e.target.value);
                });

                if (@this.konsep_branding) {
                    // Menyinkronkan Select2 dengan nilai konsep_branding yang sudah ada
                    $("#konsep_branding").val(@this.konsep_branding).trigger('change');
                }
            
                //Select2 - Melakukan Co Branding
                $("#co_branding").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('co_branding', e.target.value);
                });

                if (@this.co_branding) {
                    // Menyinkronkan Select2 dengan nilai co_branding yang sudah ada
                    $("#co_branding").val(@this.co_branding).trigger('change');
                }
            
                //Select2 - Ketersediaan Produk
                $("#ketersediaan_produk").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('ketersediaan_produk', e.target.value);
                });

                if (@this.ketersediaan_produk) {
                    // Menyinkronkan Select2 dengan nilai ketersediaan_produk yang sudah ada
                    $("#ketersediaan_produk").val(@this.ketersediaan_produk).trigger('change');
                }
            
                //Select2 - Etiket Merek (Logo Dagang)
                $("#etiket_merek").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('etiket_merek', e.target.value);
                });

                if (@this.etiket_merek) {
                    // Menyinkronkan Select2 dengan nilai etiket_merek yang sudah ada
                    $("#etiket_merek").val(@this.etiket_merek).trigger('change');
                }
            
                //Select2 - Merek Terdaftar di HAKI
                $("#merek_terdaftar_haki").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('merek_terdaftar_haki', e.target.value);
                });

                if (@this.merek_terdaftar_haki) {
                    // Menyinkronkan Select2 dengan nilai merek_terdaftar_haki yang sudah ada
                    $("#merek_terdaftar_haki").val(@this.merek_terdaftar_haki).trigger('change');
                }
            
                //Select2 - Memiliki Mitra Usaha/Reseller
                $("#mitra_usaha").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('mitra_usaha', e.target.value);
                });

                if (@this.mitra_usaha) {
                    // Menyinkronkan Select2 dengan nilai mitra_usaha yang sudah ada
                    $("#mitra_usaha").val(@this.mitra_usaha).trigger('change');
                }
            
                //Select2 - Cakupan Pemasaran Produk
                $("#cakupan_pemasaran").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('cakupan_pemasaran', e.target.value);
                });

                if (@this.cakupan_pemasaran) {
                    // Menyinkronkan Select2 dengan nilai cakupan_pemasaran yang sudah ada
                    $("#cakupan_pemasaran").val(@this.cakupan_pemasaran).trigger('change');
                }
            
                //Select2 - Memiliki Pelanggan Loyal
                $("#pelanggan_loyal").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('pelanggan_loyal', e.target.value);
                });

                if (@this.pelanggan_loyal) {
                    // Menyinkronkan Select2 dengan nilai pelanggan_loyal yang sudah ada
                    $("#pelanggan_loyal").val(@this.pelanggan_loyal).trigger('change');
                }
            
                //Select2 - Pernah Melakukan Pameran Secara Mandiri
                $("#pameran_mandiri").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('pameran_mandiri', e.target.value);
                });

                if (@this.pameran_mandiri) {
                    // Menyinkronkan Select2 dengan nilai pameran_mandiri yang sudah ada
                    $("#pameran_mandiri").val(@this.pameran_mandiri).trigger('change');
                }
            });
        </script>
        @endscript
    @endsection
</div>
