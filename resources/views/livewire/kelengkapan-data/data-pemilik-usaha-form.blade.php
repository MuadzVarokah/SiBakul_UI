<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <x-sub-navbar href="javascript:history.back()">Form Data Pemilik Usaha</x-sub-navbar>

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
                        </style>

                        <!-- Input NIK -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nik">NIK</label>
                            <input wire:model="nik" type="number" name="nik" id="nik" placeholder="cth. 33XXXXXXXXXXXXXX" autocomplete="on" maxlength="16" required
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('nik')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Nama Lengkap -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nama_lengkap">Nama Lengkap</label>
                            <input wire:model="nama_lengkap" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="cth. Agus Widodo" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('nama_lengkap')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Input Tempat Lahir & Tanggal Lahir -->
                        <div class="relative grid grid-cols-2 gap-1">
                            <div class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="tempat_lahir">Tempat Lahir</label>
                                <input wire:model="tempat_lahir" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="cth. Sleman" autocomplete="on" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                @error('tempat_lahir')
                                    <p class="flex items-center mt-2 text-xs text-[red]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            
                            <div class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="tanggal_lahir">Tanggal Lahir</label>
                                <input wire:model="tanggal_lahir" type="date" name="tanggal_lahir" id="tanggal_lahir" autocomplete="on" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                @error('tanggal_lahir')
                                    <p class="flex items-center mt-2 text-xs text-[red]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Jenis Kelamin -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Jenis Kelamin</label>
                            <div class="flex flex-wrap gap-2">
                                 <div class="flex flex-wrap items-center w-full">
                                      <input wire:model="jenis_kelamin" id="jenis_kelamin-lakilaki" type="radio" value="laki-laki" name="jenis_kelamin" required
                                           class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                      <label for="jenis_kelamin-lakilaki" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Laki-laki</label>
                                 </div>
                                 <div class="flex flex-wrap items-center w-full">
                                      <input wire:model="jenis_kelamin" id="jenis_kelamin-perempuan" type="radio" value="perempuan" name="jenis_kelamin" required
                                           class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                      <label for="jenis_kelamin-perempuan" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Perempuan</label>
                                 </div>
                            </div>
                            @error('jenis_kelamin')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                        </div>

                        <!-- Input No. HP/WA -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="no_hp">No. HP/WA</label>
                            <div class="relative flex flex-wrap">
                                <div class="absolute top-2 left-0 flex items-center pl-3">
                                    <Span class="w-7 self-start font-medium text-sm text-gray-500">+62</Span>
                                    <div class="h-6 border-l border-slate-200 ml-2"></div>
                                </div>
                                <input wire:model="no_hp" type="number" name="no_hp" id="no_hp" placeholder="cth. 8XXXXXXXXXX" autocomplete="on" maxlength="13" required
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    class="block w-full !pl-14 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>        
                            @error('no_hp')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Email -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="email">Email</label>
                            <input wire:model="email" type="text" name="email" id="email" placeholder="cth. test123@example.com" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('email')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Alamat KTP -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Alamat KTP</label>
                            <div wire:ignore class="grid grid-cols-1 gap-1">
                                <select wire:model="provinsi_ktp" id="provinsi_ktp" name="provinsi_ktp" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kabupaten_ktp" id="kabupaten_ktp" name="kabupaten_ktp" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kecamatan_ktp" id="kecamatan_ktp" name="kecamatan_ktp" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kelurahan_ktp" id="kelurahan_ktp" name="kelurahan_ktp" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <textarea wire:model="alamat_ktp" name="alamat_ktp" id="alamat_ktp" rows="2" autocomplete="on" placeholder="cth. Kreteg Lor RT 05" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
                            </div>
                            @error('provinsi_ktp')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kabupaten_ktp')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kecamatan_ktp')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kelurahan_ktp')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('alamat_ktp')
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
                                //Provinsi
                                $("#provinsi_ktp").select2({
                                    placeholder: "Pilih Provinsi",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('provinsi_ktp', e.target.value);
                                });

                                if (@this.provinsi_ktp) {
                                    $("#provinsi_ktp").val(@this.provinsi_ktp).trigger('change');
                                }

                                //Kabupaten
                                $("#kabupaten_ktp").select2({
                                    placeholder: "Pilih Kabupaten",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kabupaten_ktp', e.target.value);
                                });

                                if (@this.kabupaten_ktp) {
                                    $("#kabupaten_ktp").val(@this.kabupaten_ktp).trigger('change');
                                }

                                //Kecamatan
                                $("#kecamatan_ktp").select2({
                                    placeholder: "Pilih Kecamatan",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kecamatan_ktp', e.target.value);
                                });

                                if (@this.kecamatan_ktp) {
                                    $("#kecamatan_ktp").val(@this.kecamatan_ktp).trigger('change');
                                }

                                //Kelurahan
                                $("#kelurahan_ktp").select2({
                                    placeholder: "Pilih Kelurahan",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kelurahan_ktp', e.target.value);
                                });

                                if (@this.kelurahan_ktp) {
                                    $("#kelurahan_ktp").val(@this.kelurahan_ktp).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kode POS KTP -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="kodepos_ktp">Kode POS KTP</label>
                            <input wire:model="kodepos_ktp" type="number" name="kodepos_ktp" id="kodepos_ktp" placeholder="cth. 5XXXX" autocomplete="on" maxlength="5" required
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('kodepos_ktp')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Alamat Domisili -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Alamat Domisili</label>
                            <div wire:ignore class="grid grid-cols-1 gap-1">
                                <select wire:model="provinsi_domisili" id="provinsi_domisili" name="provinsi_domisili" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kabupaten_domisili" id="kabupaten_domisili" name="kabupaten_domisili" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kecamatan_domisili" id="kecamatan_domisili" name="kecamatan_domisili" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select wire:model="kelurahan_domisili" id="kelurahan_domisili" name="kelurahan_domisili" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <textarea wire:model="alamat_domisili" name="alamat_domisili" id="alamat_domisili" rows="2" autocomplete="on" placeholder="cth. Kreteg Lor RT 05" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
                            </div>
                            @error('provinsi_domisili')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kabupaten_domisili')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kecamatan_domisili')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kelurahan_domisili')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('alamat_domisili')
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
                                //Provinsi
                                $("#provinsi_domisili").select2({
                                    placeholder: "Pilih Provinsi",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('provinsi_domisili', e.target.value);
                                });

                                if (@this.provinsi_domisili) {
                                    $("#provinsi_domisili").val(@this.provinsi_domisili).trigger('change');
                                }

                                //Kabupaten
                                $("#kabupaten_domisili").select2({
                                    placeholder: "Pilih Kabupaten",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kabupaten_domisili', e.target.value);
                                });

                                if (@this.kabupaten_domisili) {
                                    $("#kabupaten_domisili").val(@this.kabupaten_domisili).trigger('change');
                                }

                                //Kecamatan
                                $("#kecamatan_domisili").select2({
                                    placeholder: "Pilih Kecamatan",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kecamatan_domisili', e.target.value);
                                });

                                if (@this.kecamatan_domisili) {
                                    $("#kecamatan_domisili").val(@this.kecamatan_domisili).trigger('change');
                                }

                                //Kelurahan
                                $("#kelurahan_domisili").select2({
                                    placeholder: "Pilih Kelurahan",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('kelurahan_domisili', e.target.value);
                                });

                                if (@this.kelurahan_domisili) {
                                    $("#kelurahan_domisili").val(@this.kelurahan_domisili).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Kode POS Domisili -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="kodepos_domisili">Kode POS Domisili</label>
                            <input wire:model="kodepos_domisili" type="number" name="kodepos_domisili" id="kodepos_domisili" placeholder="cth. 5XXXX" autocomplete="on" maxlength="5" required
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('kodepos_domisili')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Pendidikan Terakhir -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="pendidikan">Pendidikan Terakhir</label>
                                <select wire:model="pendidikan" id="pendidikan" name="pendidikan"
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                            </div>
                            @error('pendidikan')
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
                                $("#pendidikan").select2({
                                    placeholder: "Pilih Pendidikan Terakhir",
                                //    allowClear: true
                                }).on('change', function(e) {
                                    @this.set('pendidikan', e.target.value);
                                });

                                if (@this.pendidikan) {
                                    $("#pendidikan").val(@this.pendidikan).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Disabilitas -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                 <label class="block mb-1 text-sm text-slate-600 required" for="disabilitas">Disabilitas</label>
                                 <select wire:model="disabilitas" id="disabilitas" name="disabilitas"
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                 </select>
                            </div>
                            @error('disabilitas')
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
                                $("#disabilitas").select2({
                                    placeholder: "Pilih Disabilitas",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('disabilitas', e.target.value);
                                });

                                if (@this.disabilitas) {
                                    $("#disabilitas").val(@this.disabilitas).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
                            <div class="grid grid-cols-2 gap-1 mt-2">
                                <a wire:navigate:hover href="javascript:history.back()" type="button" class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
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
</div>
