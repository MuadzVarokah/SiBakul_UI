<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css" rel="stylesheet">

    <x-sub-navbar href="javascript:history.back()">Media Pemasaran Online</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @foreach ($dataMedia as $keyData => $valueData)
                    <div class="w-full flex flex-wrap justify-between items-center">
                        <p class="w-full font-semibold text-justify text-sm">{{ $valueData->media }}</p>
                        <a href="javascript:void(0)" data-dialog-target="dialog-{{ $valueData->id }}" class="w-full font-normal text-justify text-base text-green-600">{{ $valueData->nama }}</a>
                    </div>

                    <!-- Detail modal -->
                    <div wire:ignore data-dialog-backdrop="dialog-{{ $valueData->id }}" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div data-dialog="dialog-{{ $valueData->id }}"
                            class="relative m-4 p-4 sm:w-4/5 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
                            <!-- Header modal -->
                            <div class="w-full flex flex-wrap justify-between">
                                <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                                    {{ $valueData->media }}
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
                                            <p class="w-full font-semibold text-justify text-sm">Nama Media</p>
                                            <p class="w-full font-normal text-justify text-base text-slate-600">{{ $valueData->nama }}</p>
                                        </div>

                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Alamat Media</p>
                                            <a href="{!! $valueData->url !!}" class="w-full font-normal text-justify text-base text-green-600">{{ $valueData->url }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex shrink-0 flex-wrap items-center pt-4 justify-between">
                                <button type="button" data-dialog-close="true" wire:click.prevent="confirmDelete({{ $valueData->id }})"
                                    class="rounded-md bg-red-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    <i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus
                                </button>
                                <a wire:navigate:hover href="{{ route('form-mediaPemasaranOnline-edit', ['id_media' => $valueData->id ]) }}" type="button" data-dialog-close="true"
                                    class="rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="w-full mt-4">
                <a wire:navigate:hover href="{{ route('form-mediaPemasaranOnline') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;Tambah Media
                </a>
            </div>
        </div>
    </div>

    @script()
    <script>
        Livewire.on('mediaDeleted', () => {
            Swal.fire({
                title: 'Dihapus!',
                text: 'Media telah berhasil dihapus.',
                icon: 'success'
            });
        });

        Livewire.on('confirmDelete', id_media => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Media ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e02424',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                // cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.call('deleteMedia', {id_media: id_media});
                }
            })
        });
    </script>
    @endscript

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
</div>