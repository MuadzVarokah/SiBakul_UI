<div>
    <x-sub-navbar href="javascript:history.back()">Data Pemilik Usaha</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">NIK</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">1234567890123456</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Nama Lengkap</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Lorem ipsum dolor</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Tempat, Tanggal Lahir</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Lorem, 06 Sep 1969</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Jenis Kelamin</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Lorem ipsum dolor</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">No. HP/WA</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">081234567890</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Email</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">lorem@ipsum.com</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Alamat KTP</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Lorem RT 69, Ipsum, Dolor, Sit, Amet</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Kode POS KTP</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">69420</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Alamat Domisili</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Lorem RT 69, Ipsum, Dolor, Sit, Amet</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Kode POS Domisili</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">69420</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Pendidikan Terakhir</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">SMA</p>
                </div>

                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Disabilitas</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Tidak Ada</p>
                </div>
            </div>

            <div class="w-full mt-4">
                <a wire:navigate href="{{ route('form-dataPemilikUsaha') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Lengkapi Data
                </a>
                {{-- <button type="button" class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                </button> --}}
            </div>
        </div>
    </div>
</div>
