<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css" rel="stylesheet">

    <x-sub-navbar href="javascript:history.back()">Berkas Usaha</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @foreach ($dataBerkas as $keyData => $valueData)
                    <div class="w-full flex flex-wrap justify-between items-center">
                        <p class="w-full font-semibold text-justify text-sm">{{ $valueData->jenis }}</p>
                        <a href="javascript:void(0)" data-dialog-target="dialog-{{ $valueData->id }}" class="w-full font-normal text-justify text-base text-green-600">{{ $valueData->nomor }}</a>
                    </div>

                    <!-- Detail modal -->
                    <div wire:ignore data-dialog-backdrop="dialog-{{ $valueData->id }}" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div data-dialog="dialog-{{ $valueData->id }}"
                            class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
                            <!-- Header modal -->
                            <div class="w-full flex flex-wrap justify-between">
                                <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                                    {{ $valueData->jenis }}
                                </div>
                                <button data-ripple-dark="true" data-dialog-close="true"
                                    class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2" class="h-5 w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <!-- Content modal -->
                            <div class="relative border-y border-slate-200 leading-normal text-slate-600 font-light">
                                <div class="mt-2 mb-2 w-full max-w-screen-md justify-items-center">
                                    <div class="w-full grid grid-cols-1 gap-4 max-w-full min-w-[200px]">
                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Gambar</p>
                                            <img src="{{ $valueData->file }}" alt="" class="w-full h-auto rounded-md">
                                        </div>
                                        
                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Nomor</p>
                                            <p class="w-full font-normal text-justify text-base text-slate-600">{{ $valueData->nomor }}</p>
                                        </div>

                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Keterangan</p>
                                            <p class="w-full font-normal text-justify text-base text-slate-600">{{ $valueData->keterangan }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex shrink-0 flex-wrap items-center pt-4 justify-between">
                                <button type="button" data-dialog-close="true" wire:click.prevent="confirmDelete({{ $valueData->id }})"
                                    class="rounded-md bg-red-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    <i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus
                                </button>
                                <a wire:navigate:hover href="{{ route('form-berkasUsaha-edit', ['id_berkas' => $valueData->id ]) }}" type="button" data-dialog-close="true"
                                    class="rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="w-full mt-4">
                <a wire:navigate:hover href="{{ route('form-berkasUsaha') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;Tambah Berkas
                </a>
                {{-- <button type="button" data-dialog-target="tambah_berkas-dialog" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;Tambah Berkas
                </button> --}}
            </div>
        </div>
    </div>

    <!-- Tambah Berkas modal -->
    {{-- <div data-dialog-backdrop="tambah_berkas-dialog" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="tambah_berkas-dialog"
            class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
            <!-- Header modal -->
            <div class="w-full flex flex-wrap justify-between">
                <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                    Tambah Berkas
                </div>
                <button data-ripple-dark="true" data-dialog-close="true"
                    class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </span>
                </button>
            </div>

            <!-- Content modal -->
            <div class="relative border-y border-slate-200 pt-4 pb-2 leading-normal text-slate-600 font-light">
                <p class="flex -mt-2 text-xs text-slate-400 items-center text-justify">
                    <i class="fa-solid fa-circle-exclamation w-5 h-5 mr-1.5 content-center" style="font-size: medium"></i>
                    Silahkan pilih jenis berkas yang ingin ditambahkan
                </p>
                <div class="w-full mt-4">
                    <div class="mt-2 mb-2 w-full max-w-screen-md justify-items-center">
                        <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">
                            <div wire:ignore class="relative">
                                <label class="block mb-1 text-sm text-slate-600 required" for="jenis_berkas">Jenis Berkas</label>
                                <select id="jenis_berkas" name="jenis_berkas" wire:model="jenis_berkas" onchange="checkSelection()" class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option></option>
                                    @foreach ($listBerkas as $keyBerkas => $valueBerkas)
                                        <option value="{!! $valueBerkas->id !!}">{!! $valueBerkas->berkas !!}</option>
                                    @endforeach
                                </select>
                                @script()
                                    <script>
                                        $(document).ready(function() {
                                            $("#jenis_berkas").select2({
                                                placeholder: "Pilih Jenis Berkas",
                                                allowClear: true
                                            }).on('change', function() {
                                                let data = $(this).val();
                                                $wire.jenis_berkas = data;
                                            });
                                        });
                                    </script>
                                @endscript
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
                <button type="button" data-dialog-close="true"
                    class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Batal
                </button>
                <button wire:click="tambahBerkas" type="button" data-dialog-close="true" id="next" disabled
                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                    Selanjutnya
                </button>
            </div>

            <script>
                // Fungsi untuk cek apakah ada pilihan yang dipilih
                function checkSelection() {
                    const selectElement = document.getElementById("jenis_berkas");
                    const buttonElement = document.getElementById("next");
            
                    if (selectElement.value !== "") {
                        buttonElement.disabled = false;  // Aktifkan tombol jika ada pilihan
                    } else {
                        buttonElement.disabled = true;   // Nonaktifkan tombol jika tidak ada pilihan
                    }
                }
            </script>
        </div>
    </div> --}}

    @script()
    <script>
        Livewire.on('berkasDeleted', () => {
            Swal.fire({
                title: 'Dihapus!',
                text: 'Berkas telah berhasil dihapus.',
                icon: 'success'
            });
        });

        Livewire.on('confirmDelete', id_berkas => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Berkas ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e02424',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                // cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.call('deleteBerkas', {id_berkas: id_berkas});
                    // Livewire.dispatch('berkasDeleted');
                }
            })
        });
    </script>
    @endscript

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
</div>