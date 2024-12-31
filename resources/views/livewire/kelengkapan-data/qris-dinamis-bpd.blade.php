<div>
    <x-sub-navbar href="javascript:history.back()">QRIS Dinamis BPD</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Gambar QRIS</p>
                    <img src="{{ asset('qris_nastarkastengel.jpeg') }}" alt="" class="w-full h-auto rounded-md">
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Nama QRIS</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">NASTARKASTENGEL</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">NMID</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">ID1021093301625</p>
                </div>
            </div>

            <div class="w-full mt-4">
                <a wire:navigate href="{{ route('form-qrisDinamisBpd') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Lengkapi Data
                </a>
                {{-- <button type="button" class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                </button> --}}
            </div>
        </div>
    </div>
    
</div>