<div>
    <x-sub-navbar href="javascript:history.back()">Aspek Keuangan</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Melakukan Pembukuan</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Ya</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Laporan Keuangan</p>
                    <div class="w-fit font-normal text-justify text-base text-slate-600 leading-tight">
                        <ul class="list-disc ms-5">
                            <li>Neraca</li>
                            <li>Rugi Laba</li>
                            <li>Jurnal</li>
                            <li>Arus Kas Sederhana</li>
                        </ul>
                    </div>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Peran Usaha untuk Penghasilan Harian</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Hampir Menjadi Sumber Utama</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Pengelolaan Keuangan</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Masih Tercampur</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Dokumentasi Nota</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Ada tidak ditata Rapi</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Catatan Transaksi</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Ada Manual</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Laporan Keuangan</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Bisa Manual</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Pernah Memiliki Utang Bank</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Tidak</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Pencatatan Aset</p>
                    <p class="w-full font-normal text-justify text-base text-slate-600">Tidak</p>
                </div>
                
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Transaksi Pembayaran</p>
                    <div class="w-fit font-normal text-justify text-base text-slate-600 leading-tight">
                        <ul class="list-disc ms-5">
                            <li>Tunai</li>
                            <li>Non Tunai/Transfer Bank</li>
                            <li>Uang Digital (QRIS, GoPay, OVO, Dana, dsb)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-full mt-4">
                <a wire:navigate:hover href="{{ route('form-aspekKeuangan') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Lengkapi Data
                </a>
                {{-- <button type="button" class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                </button> --}}
            </div>
        </div>
    </div>
    
</div>