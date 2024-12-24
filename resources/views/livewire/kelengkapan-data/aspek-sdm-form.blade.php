<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Aspek SDM</x-sub-navbar>

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

                        <!-- Input Tingkat Ketergantungan Terhadap Pemilik -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="ketergantungan_pemilik">Tingkat Ketergantungan Terhadap Pemilik</label>
                                <select wire:model="ketergantungan_pemilik" id="ketergantungan_pemilik" name="ketergantungan_pemilik" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1" title="Usaha tidak bisa berjalan tanpa kehadiran pemilik">Ketergantungan Penuh</option>
                                    <option value="2" title="Usaha masih bisa berjalan, namun terhambat tanpa pemilik">Terhambat</option>
                                    <option value="3" title="Sistem manajerial efektif memungkinkan usaha berjalan tanpa pemilik">Sistem Manajerial</option>
                                    <option value="4" title="Usaha berjalan tanpa pemilik dan sangat sedikit keterlibatan pemilik">Otomatis</option>
                                    <option value="5" title="Usaha sepenuhnya mandiri dan tidak perlu keterlibatan pemilik">Mandiri</option>
                                </select>
                            </div>
                            @error('ketergantungan_pemilik')
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
                                $("#ketergantungan_pemilik").select2({
                                    placeholder: "Pilih Jawaban",
                                    templateResult: formatOption,
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('ketergantungan_pemilik', e.target.value);
                                });

                                if (@this.ketergantungan_pemilik) {
                                    // Menyinkronkan Select2 dengan nilai ketergantungan_pemilik yang sudah ada
                                    $("#ketergantungan_pemilik").val(@this.ketergantungan_pemilik).trigger('change');
                                }

                                function formatOption(option) {
                                    var $option = $(
                                        `<div>` + option.text + `</div><div class="text-xs text-slate-600">` + option.title + `</div>`
                                    );
                                    return $option;
                                };
                            });
                        </script>
                        @endscript

                        <!-- Input Tahapan Pengelolaan Usaha -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="tahapan_usaha">Tahapan Pengelolaan Usaha</label>
                                <select wire:model="tahapan_usaha" id="tahapan_usaha" name="tahapan_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Merintis Usaha</option>
                                    <option value="2">Usaha Belum Menguntungkan</option>
                                    <option value="3">Balik Modal</option>
                                    <option value="4">Usaha Menjadi Pendapatan Utama</option>
                                    <option value="5">Usaha Matang (Sukses dan Berkelanjutan)</option>
                                </select>
                            </div>
                            @error('tahapan_usaha')
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
                                $("#tahapan_usaha").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('tahapan_usaha', e.target.value);
                                });

                                if (@this.tahapan_usaha) {
                                    // Menyinkronkan Select2 dengan nilai tahapan_usaha yang sudah ada
                                    $("#tahapan_usaha").val(@this.tahapan_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Pengelolaan Keuangan -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="target_usaha">Target Usaha</label>
                                <select wire:model="target_usaha" id="target_usaha" name="target_usaha" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Punya</option>
                                    <option value="2">Punya - Tidak Ada Dokumennya</option>
                                    <option value="3">Punya - Ada Dokumennya</option>
                                </select>
                            </div>
                            @error('target_usaha')
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
                                $("#target_usaha").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('target_usaha', e.target.value);
                                });

                                if (@this.target_usaha) {
                                    // Menyinkronkan Select2 dengan nilai target_usaha yang sudah ada
                                    $("#target_usaha").val(@this.target_usaha).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Jumlah Pegawai -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="jumlah_pegawai">Jumlah Pegawai</label>
                            <div class="relative mr-[4.5rem]">
                                <button id="decreaseButton" type="button"
                                    class="absolute right-9 top-1 rounded-md border border-transparent p-1.5 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                                    </svg>
                                </button>
                                <input wire:model="jumlah_pegawai" id="amountInput" type="number" name="jumlah_pegawai" required
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0" />
                                <button id="increaseButton" type="button"
                                    class="absolute right-1 top-1 rounded-md border border-transparent p-1.5 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute top-3 right-0 h-full flex items-center pr-3">
                                <Span class="leading-none text-gray-500">Orang</Span>
                           </div>
                           @error('jumlah_pegawai')
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
                                // Select the elements
                                const amountInput = document.getElementById('amountInput');
                                const increaseButton = document.getElementById('increaseButton');
                                const decreaseButton = document.getElementById('decreaseButton');
                                
                                // Increase the value
                                increaseButton.addEventListener('click', () => {
                                    amountInput.value = parseInt(amountInput.value) + 1;
                                    @this.set('jumlah_pegawai', amountInput.value);
                                });
                                
                                // Decrease the value and prevent going below 0
                                decreaseButton.addEventListener('click', () => {
                                    amountInput.value = Math.max(0, parseInt(amountInput.value) - 1);
                                    @this.set('jumlah_pegawai', amountInput.value);
                                });
                            });
                        </script>
                        @endscript

                        <!-- Input Standar Gaji -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="standar_gaji">Standar Gaji/Upah</label>
                                <select wire:model="standar_gaji" id="standar_gaji" name="standar_gaji" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Dibawah UMR</option>
                                    <option value="2">UMR</option>
                                    <option value="3">Diatas UMR</option>
                                </select>
                            </div>
                            @error('standar_gaji')
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
                                $("#standar_gaji").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('standar_gaji', e.target.value);
                                });

                                if (@this.standar_gaji) {
                                    // Menyinkronkan Select2 dengan nilai standar_gaji yang sudah ada
                                    $("#standar_gaji").val(@this.standar_gaji).trigger('change');
                                }
                            });
                        </script>
                        @endscript

                        <!-- Input Fasilitas Asuransi Pegawai -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600">Fasilitas Asuransi Pegawai</label>
                            <div class="flex flex-wrap gap-1">
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="asuransi" type="checkbox" name="asuransi" value="Jaminan Kecelakaan Kerja dan Kematian" id="kecelakaan_kerja"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="kecelakaan_kerja" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Jaminan Kecelakaan Kerja dan Kematian</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="asuransi" type="checkbox" name="asuransi" value="Jaminan Pensiun/Hari Tua" id="pensiun"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="pensiun" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Jaminan Pensiun/Hari Tua</label>
                                </div>
                            </div>
                            @error('asuransi')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Fasilitas Bonus/Tunjangan Pegawai -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600">Fasilitas Bonus/Tunjangan Pegawai</label>
                            <div class="flex flex-wrap gap-1">
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="tunjangan" type="checkbox" name="tunjangan" value="Tunjangan Hari Raya" id="thr"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="thr" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Tunjangan Hari Raya</label>
                                </div>
                                <div class="flex flex-wrap items-center w-full">
                                    <div class="flex items-center h-5">
                                        <input wire:model="tunjangan" type="checkbox" name="tunjangan" value="Bonus Kinerja (Lembur)" id="lembur"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:!ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <label for="lembur" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Bonus Kinerja (Lembur)</label>
                                </div>
                            </div>
                            @error('tunjangan')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Fasilitas Pelatihan Pegawai -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="flex mb-1 text-sm text-slate-600 required" for="pelatihan">Fasilitas Pelatihan Pegawai</label>
                                <select wire:model="pelatihan" id="pelatihan" name="pelatihan" required
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    <option value="1">Tidak Ada</option>
                                    <option value="2">Setahun Sekali</option>
                                    <option value="3">Setahun Lebih dari Sekali</option>
                                </select>
                            </div>
                            @error('pelatihan')
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
                                $("#pelatihan").select2({
                                    placeholder: "Pilih Jawaban",
                                    // allowClear: true
                                }).on('change', function(e) {
                                    @this.set('pelatihan', e.target.value);
                                });

                                if (@this.pelatihan) {
                                    // Menyinkronkan Select2 dengan nilai pelatihan yang sudah ada
                                    $("#pelatihan").val(@this.pelatihan).trigger('change');
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
