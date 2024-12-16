<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Profil Usaha</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center">
                    @csrf
                    <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">

                        <style>
                            .required:after {
                                content: "*";
                                color: red;
                                font-weight: 900;
                            }
                        </style>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="logo_usaha">Logo Usaha</label>
                            @if ($logo_usaha)
                                <img src="{{ $logo_usaha->temporaryUrl() }}" class="w-full h-auto mb-1">
                            @endif
                            <div wire:loading wire:target="logo_usaha" class="flex flex-wrap gap-2 mb-1">
                                <svg class="text-gray-300 animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900"></path>
                                </svg>
                                <span class="text-sm text-slate-400">Mengunggah...</span>
                            </div>
                            <input wire:model="logo_usaha" type="file" id="logo_usaha" accept=".png, .jpg, .jpeg" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-xs !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            <p class="flex items-center mt-2 text-xs text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>
                                Hanya menerima masukan gambar
                            </p>    
                            @error('logo_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror        
                        </div>

                        <div wire:ignore class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nib">NIB (Nomor Induk Berusaha)</label>
                            <select id="nib" name="nib"
                                 class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                 <option></option>
                            </select>
                            @error('nib')
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
                                       $("#nib").select2({
                                           placeholder: "Pilih NIB",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.nib = data;
                                       });
                                   });
                            </script>
                            @endscript
                       </div>

                       <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nama_usaha">Nama Usaha</label>
                            <input type="text" name="nama_usaha" id="nama_usaha" placeholder="cth. CV Maju Mundur" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('nama_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                       <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="brand">Merek Dagang/Brand</label>
                            <input type="text" name="brand" id="brand" placeholder="cth. Mebel Agus" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('brand')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="mulai_usaha">Mulai Usaha</label>
                            <input type="date" name="mulai_usaha" id="mulai_usaha" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            <p class="flex items-center mt-2 text-xs text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>
                                Jika hanya ingat tahun, misal 2001 ditulis 01/01/2001
                            </p>    
                            @error('mulai_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div wire:ignore class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Alamat Usaha</label>
                            <div class="grid grid-cols-1 gap-1">
                                <select id="provinsi_usaha" name="provinsi_usaha" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select id="kabupaten_usaha" name="kabupaten_usaha" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select id="kecamatan_usaha" name="kecamatan_usaha" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <select id="kelurahan_usaha" name="kelurahan_usaha" required
                                     class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                     <option></option>
                                </select>
                                <textarea  name="alamat_usaha" id="alamat_usaha" rows="2" autocomplete="on" placeholder="cth. Kreteg Lor RT 05" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
                            </div>
                            @error('provinsi_usaha')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kabupaten_usaha')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kecamatan_usaha')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('kelurahan_usaha')
                                 <p class="flex items-center mt-2 text-xs text-[red]">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                      <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                      </svg>
                                      {{ $message }}
                                 </p>
                            @enderror
                            @error('alamat_usaha')
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
                                       $("#provinsi_usaha").select2({
                                           placeholder: "Pilih Provinsi",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.provinsi_usaha = data;
                                       });

                                       $("#kabupaten_usaha").select2({
                                           placeholder: "Pilih Kabupaten",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.kabupaten_usaha = data;
                                       });

                                       $("#kecamatan_usaha").select2({
                                           placeholder: "Pilih Kecamatan",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.kecamatan_usaha = data;
                                       });

                                       $("#kelurahan_usaha").select2({
                                           placeholder: "Pilih Kelurahan",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.kelurahan_usaha = data;
                                       });
                                   });
                            </script>
                            @endscript
                       </div>

                       <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="kodepos_usaha">Kode POS Usaha</label>
                            <input type="number" name="kodepos_usaha" id="kodepos_usaha" placeholder="cth. 5XXXX" autocomplete="on" maxlength="5" required
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('kodepos_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="kegiatan_usaha">Kegiatan Usaha</label>
                            <textarea name="kegiatan_usaha" id="kegiatan_usaha" rows="4" autocomplete="on" required placeholder="cth. Jualan bakso"
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
                            @error('kegiatan_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="produk">Produk yang Dihasilkan</label>
                            <div class="flex flex-wrap justify-between w-full">
                                <input type="text" name="produk" placeholder="cth. Tempe" autocomplete="on" required
                                    class="block w-[calc(100%-2.75rem)] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                <button type="button" id="tambah-produk"
                                    class="w-9 px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                            <div class="flex flex-wrap w-full" id="container-produk">
                                @foreach($tambahan_produk as $index => $produk)
                                    <div class="flex flex-wrap justify-between w-full mt-1 tambahan-produk">
                                        <input type="text" wire:model="tambahan_produk.{{ $index }}" name="tambahan_produk.{{ $index }}" placeholder="cth. Tempe" autocomplete="on" required
                                            class="block w-[calc(100%-2.75rem)] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                        <button type="button" wire:click="removeProduk({{ $index }})"
                                            class="w-9 px-2.5 py-2 ms-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-600 active:scale-90 transition-transform dark:bg-red-600 dark:hover:bg-red-700">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            
                            @error('nama_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror

                            <script type="text/javascript">
                                $("#tambah-produk").click(function() {
                                    @this.call('addProduk');
                                });
                            </script>
                        </div>

                        <div wire:ignore class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="sektor_usaha">Sektor Usaha</label>
                            <select id="sektor_usaha" name="sektor_usaha"
                                 class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                 <option></option>
                            </select>
                            @error('sektor_usaha')
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
                                       $("#sektor_usaha").select2({
                                           placeholder: "Pilih Sektor Usaha",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.sektor_usaha = data;
                                       });
                                   });
                            </script>
                            @endscript
                        </div>

                        <div wire:ignore class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="sektor_ekraf">Sektor EKRAF</label>
                            <select id="sektor_ekraf" name="sektor_ekraf"
                                 class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                 <option></option>
                            </select>
                            @error('sektor_ekraf')
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
                                       $("#sektor_ekraf").select2({
                                           placeholder: "Pilih Sektor EKRAF",
                                        //    allowClear: true
                                       }).on('change', function() {
                                           let data = $(this).val();
                                           $wire.sektor_ekraf = data;
                                       });
                                   });
                            </script>
                            @endscript
                        </div>

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
