<div>
    <x-sub-navbar href="javascript:history.back()">Detail Pameran</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-sm mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="relative w-full h-full">
            <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="w-auto h-auto max-w-full max-h-full" alt="...">
        </div>

        <!-- Section utama -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <p class="text-2xl font-semibold text-green-600 leading-none">Nama Pameran - Lorem ipsum dolor sit amet.</p>
            {{-- <p class="w-full font-normal text-justify text-lg line-clamp-2 leading-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> --}}

            <hr class="mt-2" style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Status</p>
                @switch($id_pameran)
                    @case(1)
                        <span class="w-fit inline-flex items-center bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-gray-900 dark:text-gray-300">
                            <span class="w-2 h-2 me-1 bg-gray-500 rounded-full"></span>
                            Belum Diikuti
                        </span>
                        @break

                    @case(3)
                        <span class="w-fit inline-flex items-center bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            Telah Diikuti
                        </span>
                        @break

                    @default
                    <span class="w-fit inline-flex items-center bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-blue-900 dark:text-blue-300">
                        <span class="w-2 h-2 me-1 bg-blue-500 rounded-full"></span>
                        Diikuti
                    </span>
                    
                @endswitch
                
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Latar -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Tanggal</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">13 Apr 2024 - 15 Apr 2024</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Waktu</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">08:00 - 15:00</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-fit font-semibold text-justify text-lg">Tempat</p>
                    <a wire:navigate:hover href="javascript:void(0)">
                        <p class="w-fit font-semibold text-justify text-base text-green-600">Lihat <i class="fa-solid fa-chevron-right"></i></p>
                    </a>
                </div>
                <p class="w-fit font-normal text-justify text-base text-slate-600">
                    Gedung Lorem - Jalan Ipsum No.69, Dolor, Sit Amet, Consectetur, Adipisicing.
                </p>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Uraian -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div wire:ignore class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Uraian Pameran</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi eius mollitia sed iusto repudiandae repellendus? Dolor ut delectus excepturi praesentium at voluptates, aut quae enim.
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text hidden">Lihat Selengkapnya</p> 
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section PIC -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Nama PIC</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">Nama Pemateri</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Kontak PIC (WA)</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">+6281234567890</p>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Materi -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-white">
            <div wire:ignore class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Syarat Pameran</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores blanditiis dolor, officiis ad consequatur, labore nulla, nisi quos libero alias nihil. Maxime ipsa assumenda temporibus vel quo facere ut est id qui quam numquam error nihil ducimus dolor facilis placeat distinctio aut, magni vero velit, repellat iusto. Consequuntur, amet libero?
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text hidden">Lihat Selengkapnya</p> 
            </div>

            @switch($id_pameran)
                @case(1)
                    <div class="flex items-center mt-4">
                        <div class="flex items-center h-5">
                            <input id="agree" type="checkbox" value="" onchange="document.getElementById('daftarPameran').disabled = !this.checked;"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                        </div>
                        <label for="agree" class="ms-2 font-medium text-gray-900 dark:text-gray-300">Saya siap mengikuti syarat pameran</label>
                    </div>
        
                    <div class="relative mt-2">
                        <button id="daftarPameran" type="button" disabled
                            class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;Daftar Pameran
                        </button>
                    </div>
                    @break

                {{-- @case(3)
                    <div class="relative mt-4">
                        <button type="button"
                            class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <i class="fa-solid fa-print"></i>&nbsp;&nbsp;Cetak Sertifikat
                        </button>
                    </div>
                    @break --}}

                @default

            @endswitch
        </div>

        <script>
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
            document.addEventListener('DOMContentLoaded', () => {
                const contentText = document.querySelectorAll('.content-text');
                contentText.forEach(checkTextLength); // Memeriksa panjang teks untuk setiap deskripsi
        
                // Menambahkan event listener pada tombol toggle
                const toggleButtons = document.querySelectorAll('.toggle-text');
                toggleButtons.forEach(button => {
                    button.addEventListener('click', () => toggleText(button));
                });
            });
        </script>
    </div>
</div>