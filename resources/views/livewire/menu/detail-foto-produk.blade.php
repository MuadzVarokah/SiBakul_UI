<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
    @endsection

    @section('styles')
        @parent
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css" rel="stylesheet">
    @endsection

    <x-sub-navbar href="javascript:history.back()">Detail Foto Produk</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-sm mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">

        <!-- Section utama -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <p class="text-2xl font-semibold text-green-600 leading-none">Foto Produk</p>
            {{-- <p class="w-full font-normal text-justify text-lg line-clamp-2 leading-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> --}}
            <p class="flex text-xs text-slate-400 items-center text-justify">
                <i class="fa-solid fa-circle-exclamation w-5 h-5 -mt-1.5 mr-1.5" style="font-size: small"></i>
                Layanan foto produk dimaksudkan untuk mendukung UKM dalam membuat konten pemasaran yang berkualitas.
            </p>

            <hr class="mt-2" style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Status</p>
                @switch($id_foto)
                    @case(1)
                        <span class="w-fit inline-flex items-center bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-gray-900 dark:text-gray-300">
                            <span class="w-2 h-2 me-1 bg-gray-500 rounded-full"></span>
                            Belum Terdaftar
                        </span>
                        @break

                    @case(3)
                        <span class="w-fit inline-flex items-center bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            Selesai
                        </span>
                        @break

                    @default
                    <span class="w-fit inline-flex items-center bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-blue-900 dark:text-blue-300">
                        <span class="w-2 h-2 me-1 bg-blue-500 rounded-full"></span>
                        Telah Terdaftar
                    </span>
                    
                @endswitch
            </div>

            <hr class="mt-2" style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Kuota</p>
                @switch($id_foto)
                    @case(1)
                        <span class="w-fit inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            &nbsp;0 / 5
                        </span>
                        @break

                    @case(3)
                        <span class="w-fit inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                            &nbsp;5 / 5
                        </span>
                        @break

                    @default
                    <span class="w-fit inline-flex items-center bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                        <span class="w-2 h-2 me-1 bg-yellow-500 rounded-full"></span>
                        &nbsp;1 / 5
                    </span>
                    
                @endswitch
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Waktu -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Tanggal</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">20 Des 2024</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Waktu</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">Pagi (09:00 - 12:00)</p>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Ketentuan -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Batas Produk</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">5 Barang</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Ketentuan</p>
                <div class="w-fit font-normal text-justify text-base text-slate-600">
                    <ul class="list-disc ms-5">
                        <li>Produk adalah yang (akan) dijual di markethub</li>
                        <li>Membawa properti produk sendiri yang diperlukan</li>
                        <li>UKM tiba dilokasi maksimal 15 menit sebelum waktu pemotretan untuk keperluan berkordinasi konsep dan kebutuhan pemotretan</li>
                    </ul>
                </div>
            </div>

        @if ($id_foto != 1)
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Ketentuan -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Jenis Produk</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">Fashion</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-full font-semibold text-justify text-lg">Produk</p>
                <div class="w-fit font-normal text-justify text-base text-slate-600">
                    <ul class="list-disc ms-5">
                        <li>Baju Batik</li>
                        <li>Kaos Oblong</li>
                        <li>Topi Jerami</li>
                    </ul>
                </div>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div wire:ignore class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Perlengkapan yang dibawa</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, earum maxime ad animi maiores quae?
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text hidden">Lihat Selengkapnya</p> 
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div wire:ignore class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Catatan lainnya</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, earum maxime ad animi maiores quae? --}}
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere esse perferendis in. Reiciendis tempora excepturi ut culpa maiores illo accusantium!
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text hidden">Lihat Selengkapnya</p> 
            </div>
        @endif

            @switch($id_foto)
                @case(1)
                    <div class="flex items-center mt-4">
                        <div class="flex items-center h-5">
                            <input id="ready" type="checkbox" value="" onchange="document.getElementById('ikutPelatihan').disabled = !this.checked;"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                        </div>
                        <label for="ready" class="ms-2 font-medium text-gray-900 dark:text-gray-300">Saya siap mengikuti ketentuan</label>
                    </div>
        
                    <div class="relative mt-2">
                        <button wire:click="redirectToForm" id="ikutPelatihan" type="button" disabled
                            class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;Daftar Foto Produk
                        </button>
                    </div>
                    @break

                @case(3)
                    <div class="relative mt-4">
                        <button type="button"
                            class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-images"></i>&nbsp;&nbsp;Lihat Hasil
                        </button>
                    </div>
                    @break

                @default
                    <div class="relative grid grid-cols-2 gap-1 mt-4">
                        <button type="button" wire:click.prevent="confirmCancel({{ $id_foto }})"
                            class="w-full rounded-md bg-red-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-ban"></i>&nbsp;&nbsp;Batalkan
                        </button>
                        <a wire:navigate href="{{ route('form-fotoProduk-edit', ['id_foto' => $id_foto]) }}" type="button"
                            class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                        </a>
                    </div>

            @endswitch
        </div>
    </div>
    
    @section('scripts')
        @parent
        @script()
        <script>
            Livewire.on('fotoProdukCanceled', () => {
                Swal.fire({
                    title: 'Dibatalkan!',
                    text: 'Pendaftaran foto produk telah berhasil dibatalkan.',
                    icon: 'success'
                });
            });

            Livewire.on('confirmCancel', id_foto => {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Pendaftaran foto produk ini akan dibatalkan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e02424',
                    confirmButtonText: 'Ya, Batalkan!',
                    cancelButtonText: 'Tolak',
                    // cancelButtonColor: '#d33'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $wire.call('cancelFotoProduk', {id_foto: id_foto});
                    }
                })
            });

            // Fungsi untuk memeriksa apakah teks lebih dari 3 baris
            function checkTextLength(textElement) {
                const toggleText = textElement.nextElementSibling; // Tombol toggle setelah elemen teks
        
                // Mengukur tinggi elemen dan membandingkan dengan tinggi tiga baris
                const lineHeight = parseInt(window.getComputedStyle(textElement).lineHeight, 10);
                const maxHeight = lineHeight * 3; // Untuk 3 baris
                const currentHeight = textElement.offsetHeight;
        
                if (currentHeight > maxHeight) {
                    textElement.classList.add('line-clamp-3'); // Membatasi hanya 3 baris
                    toggleText.style.display = 'block'; // Menampilkan tombol "Lihat Selengkapnya"
                } else {
                    toggleText.style.display = 'none'; // Menyembunyikan tombol jika teks lebih pendek dari 3 baris
                }
            }
            
            // Fungsi untuk toggle tampilan teks
            function toggleText(button) {
                const textElement = button.previousElementSibling; // Elemen teks sebelumnya
        
                if (textElement.classList.contains('line-clamp-3')) {
                    // Tampilkan teks penuh
                    textElement.classList.remove('line-clamp-3');
                    button.textContent = 'Lihat Lebih Sedikit';
                } else {
                    // Potong teks setelah 3 baris
                    textElement.classList.add('line-clamp-3');
                    button.textContent = 'Lihat Selengkapnya';
                }
            }
            
            // Menambahkan event listener pada seluruh elemen dengan kelas 'content-text'
            document.addEventListener("livewire:navigated", () => {
                const contentText = document.querySelectorAll('.content-text');
                contentText.forEach(checkTextLength); // Memeriksa panjang teks untuk setiap deskripsi
        
                // Menambahkan event listener pada tombol toggle
                const toggleButtons = document.querySelectorAll('.toggle-text');
                toggleButtons.forEach(button => {
                    button.addEventListener('click', () => toggleText(button));
                });
            }, { once: true });
        </script>
        @endscript

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js" data-navigate-track></script>
    @endsection
</div>