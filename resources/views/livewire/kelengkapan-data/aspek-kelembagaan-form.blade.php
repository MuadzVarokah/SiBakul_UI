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

    <x-sub-navbar href="javascript:history.back()">Form Aspek Kelembagaan</x-sub-navbar>

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

                        <!-- Input Bentuk Badan Usaha -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="badan_usaha">Bentuk Badan Usaha</label>
                                <select wire:model="badan_usaha" id="badan_usaha" name="badan_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">PT (Perseroan Terbatas)</option>
                                    <option value="2">CV (Commanditaire Vennootschap)</option>
                                    <option value="3">Koperasi</option>
                                    <option value="4">Perorangan</option>
                                </select>
                            </div>
                            @error('badan_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Izin Usaha (NIB) -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="izin_usaha">Izin Usaha (NIB)</label>
                                <select wire:model="izin_usaha" id="izin_usaha" name="izin_usaha" disabled
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    @if (!$nib)
                                        <option value="1">Tidak Ada NIB</option>
                                    @else
                                        <option value="2" selected>{{ $nib }}</option>
                                    @endif
                                </select>
    
                                @if (!$nib)
                                    <a href="#" class="block mt-1 text-sm font-semibold text-green-700 underline">
                                        Tambahkan NIB
                                    </a>
                                @endif
                            </div>
                            @error('izin_usaha')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memiliki NPWP -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="memiliki_npwp">Memiliki NPWP</label>
                                <select wire:model="memiliki_npwp" id="memiliki_npwp" name="memiliki_npwp" {{ !$npwp ? 'disabled' : 'required' }}
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    @if (!$npwp)
                                        <option value="1">Tidak Ada NPWP</option>
                                    @else
                                        <option></option>
                                        <option value="2">Memiliki NPWP - Jarang Melapor Pajak</option>
                                        <option value="3">Memiliki NPWP - Rutin Melapor Pajak</option>
                                    @endif
                                </select>
    
                                @if (!$npwp)
                                    <a href="#" class="block mt-1 text-sm font-semibold text-green-700 underline">
                                        Tambahkan NPWP
                                    </a>
                                @endif
                            </div>
                            @error('memiliki_npwp')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Memiliki Struktur Organisasi -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="struktur_organisasi">Memiliki Struktur Organisasi</label>
                                <select wire:model="struktur_organisasi" id="struktur_organisasi" name="struktur_organisasi" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Punya</option>
                                    <option value="2">Punya - Tidak Tertulis</option>
                                    <option value="3">Punya - Ada Dokumen Tertulis</option>
                                </select>
                            </div>
                            @error('struktur_organisasi')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Malksanakan Job Description -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="jobdesk">Melaksanakan <i>Job Description</i></label>
                                <select wire:model="jobdesk" id="jobdesk" name="jobdesk" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada Jobdesk</option>
                                    <option value="2">Melaksanakan Jobdesk - Tidak Tertulis</option>
                                    <option value="3">Melaksanakan Jobdesk - Terdapat Dokumen Tertulis</option>
                                </select>
                            </div>
                            @error('jobdesk')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Menerapkan ISO -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="iso">Menerapkan ISO<button data-popover-target="popover-description" data-popover-placement="top" type="button"><svg class="w-4 h-4 ms-1 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></label>
                                <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <p class="text-justify">
                                            <span class="font-semibold text-gray-900 dark:text-white">Organisasi Internasional untuk Standardisasi</span> atau <span class="font-semibold text-gray-900 dark:text-white">ISO</span> adalah badan penetap standar internasional yang terdiri dari wakil-wakil dari badan standardisasi nasional setiap negara.
                                        </p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <select wire:model="iso" id="iso" name="iso" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Punya</option>
                                    <option value="2">Tidak Punya - Tetapi Sudah Menerapkan Prinsip ISO</option>
                                    <option value="3">Punya ISO</option>
                                </select>
                            </div>
                            @error('iso')
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
                //Select2 - Bentuk Badan Usaha
                $("#badan_usaha").select2({
                    placeholder: "Pilih Bentuk Badan Usaha",
                    // theme: "bootstrap-5",
                    // selectionCssClass: "select2--small",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('badan_usaha', e.target.value);
                });

                if (@this.badan_usaha) {
                    // Menyinkronkan Select2 dengan nilai badan_usaha yang sudah ada
                    $("#badan_usaha").val(@this.badan_usaha).trigger('change');
                }
            
                //Select2 - NIB
                $("#izin_usaha").select2({
                    placeholder: "Pilih NIB",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('izin_usaha', e.target.value);
                });

                // Menyinkronkan Select2 dengan nilai NIB jika sudah ada
                if (@this.nib || @this.izin_usaha) {
                    $("#izin_usaha").val(2).trigger('change');
                } else {
                    $("#izin_usaha").val(1).trigger('change');
                }
            
                //Select2 - NPWP
                $("#memiliki_npwp").select2({
                    placeholder: "Pilih NPWP",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('memiliki_npwp', e.target.value);
                });

                if (@this.memiliki_npwp) {
                    // Menyinkronkan Select2 dengan nilai memiliki_npwp yang sudah ada
                    $("#memiliki_npwp").val(@this.memiliki_npwp).trigger('change');
                }  else {
                    $("#memiliki_npwp").val(1).trigger('change');
                }
            
                //Select2 - Struktur Organisasi
                $("#struktur_organisasi").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('struktur_organisasi', e.target.value);
                });

                if (@this.struktur_organisasi) {
                    // Menyinkronkan Select2 dengan nilai struktur_organisasi yang sudah ada
                    $("#struktur_organisasi").val(@this.struktur_organisasi).trigger('change');
                }
            
                //Select2 - Jobdesk
                $("#jobdesk").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('jobdesk', e.target.value);
                });

                if (@this.jobdesk) {
                    // Menyinkronkan Select2 dengan nilai jobdesk yang sudah ada
                    $("#jobdesk").val(@this.jobdesk).trigger('change');
                }
            
                //Select2 - ISO
                $("#iso").select2({
                    placeholder: "Pilih Jawaban",
                    // allowClear: true
                }).on('change', function(e) {
                    @this.set('iso', e.target.value);
                });

                if (@this.iso) {
                    // Menyinkronkan Select2 dengan nilai iso yang sudah ada
                    $("#iso").val(@this.iso).trigger('change');
                }
            });
        </script>
        @endscript
    @endsection

</div>
