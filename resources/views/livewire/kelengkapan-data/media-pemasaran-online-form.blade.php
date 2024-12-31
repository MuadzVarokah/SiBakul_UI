<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" data-navigate-once></script>
        <script src="https://unpkg.com/alpinejs@3.14.8/dist/cdn.min.js" defer></script>
    @endsection

    @section('styles')
        @parent
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    @endsection

    <x-sub-navbar href="javascript:history.back()">Form Media Pemasaran Online</x-sub-navbar>

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

                        <!-- Input Jenis Media -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="jenis">Jenis Media</label>
                                <select wire:model="jenis" id="jenis" name="jenis"
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    @foreach ($listJenis as $keyJenis => $valueJenis)
                                        <option value="{!! $valueJenis->id !!}" @if(!empty($jenis) && ($jenis == $valueJenis->id)) selected @endif>{!! $valueJenis->jenis !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('jenis')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Media -->
                        <div class="relative">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="media">Media</label>
                                <select wire:model="media" id="media" name="media"
                                    {{-- {{ !$listMedia ? 'disabled' : '' }} --}}
                                    class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    @foreach ($listMedia as $keyMedia => $valueMedia)
                                        <option value="{!! $valueMedia->id !!}">{!! $valueMedia->media !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('media')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input Nama Media -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="nama">Nama Media</label>
                            <input wire:model="nama" type="text" name="nama" id="nama" placeholder="cth. @kafe_teria" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('nama')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Input URL Media -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required" for="url">Alamat Media (URL)</label>
                            <input wire:model="url" type="url" name="url" id="url" placeholder="cth. https://example.com" autocomplete="on" required
                                class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            @error('url')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
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
        <!-- Select2 - jenis -->
        @script()
        <script>
            $(document).ready(function() {
                $("#jenis").select2({
                    placeholder: 'Pilih Jenis',
                    allowClear: true
                }).on('change', function(e) {
                    @this.set('jenis', e.target.value);
                });

                if (@this.jenis) {
                    // Menyinkronkan Select2 dengan nilai jenis yang sudah ada
                    $("#jenis").val(@this.jenis).trigger('change');
                }
            });
        </script>
        @endscript

        <!-- Select2 - Media -->
        @script()
        <script>
            $(document).ready(function() {
                $("#media").select2({
                    placeholder: 'Pilih Media',
                    allowClear: true
                }).on('change', function(e) {
                    @this.set('media', e.target.value);
                });
            });

            Livewire.on('mediaUpdated', () => {            
                // Trigger untuk memperbarui data media pada dropdown
                $("#media").empty();

                @this.listMedia.forEach(media => {
                    $("#media").append(new Option());
                    $("#media").append(new Option(media.media, media.id));
                });

                $("#media").select2({
                    placeholder: "Pilih Media",
                    allowClear: true
                }).on('change', function(e) {
                    @this.set('media', e.target.value);
                });

                if (@this.media) {
                    // Menyinkronkan Select2 dengan nilai media yang sudah ada
                    $("#media").val(@this.media).trigger('change');
                }
            });
        </script>
        @endscript
    @endsection
</div>