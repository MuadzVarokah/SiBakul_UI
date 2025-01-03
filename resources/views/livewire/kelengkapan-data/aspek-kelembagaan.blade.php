<div>
    <x-sub-navbar href="javascript:history.back()">Aspek Kelembagaan</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Bentuk Badan Usaha</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Perorangan</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Izin Usaha (NIB)</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">1234567890123</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Status Pajak (NPWP)</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Memiliki NPWP - Jarang Melapor Pajak</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Memiliki Struktur Organisasi</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Punya - Tidak Tertulis</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Menerapkan <i>Job Description</i></p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Melaksanakan Jobdesk - Tidak Tertulis</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm flex">
                        Menerapkan ISO<button data-popover-target="popover-description" data-popover-placement="top" data-popover-trigger="click" type="button"><svg class="w-4 h-4 ms-1 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button>
                    </p>
                    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-60 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">
                            <p class="text-justify">
                                <span class="font-semibold text-gray-900 dark:text-white">Organisasi Internasional untuk Standardisasi</span> atau <span class="font-semibold text-gray-900 dark:text-white">ISO</span> adalah badan penetap standar internasional yang terdiri dari wakil-wakil dari badan standardisasi nasional setiap negara.
                            </p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Tidak Punya - Tetapi Sudah Menerapkan Prinsip ISO</p>
                </div>
            </div>

            <div class="w-full mt-4">
                <a wire:navigate href="{{ route('form-aspekKelembagaan') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Lengkapi Data
                </a>
                {{-- <button type="button" class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                </button> --}}
            </div>
        </div>
    </div>
    
</div>