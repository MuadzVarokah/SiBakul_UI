<div class="flex flex-wrap justify-center">
    <x-sub-navbar href="{{ route('markethub') }}">Detail Produk</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-sm mt-14 pb-8 min-h-[calc(100vh-3.5rem)] bg-slate-300">
        <!-- carousel -->
        <div id="carousel" class="relative w-full max-w-screen-md z-0" data-carousel="static" data-carousel-interval="5000">
            <!-- Carousel wrapper -->
            <div class="relative w-full overflow-hidden aspect-square">
                <!-- Item 1 (Image) -->
                <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-auto h-auto max-w-full max-h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 (Image) -->
                <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
                    <img src="https://placehold.co/400x600" class="absolute block w-auto h-auto max-w-full max-h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 (Image) -->
                <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
                    <img src="https://placehold.co/600x400" class="absolute block w-auto h-auto max-w-full max-h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-3">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" data-carousel-slide-to="2"></button>
            </div>

            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 active:scale-90 transition-transform">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 active:scale-90 transition-transform">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <script>
            const carousel = document.getElementById("carousel");

            let touchStartX = 0;
            let touchEndX = 0;

            // Fungsi untuk mendeteksi geseran
            function handleSwipe() {
                if (touchEndX < touchStartX) {
                    carousel.querySelector('[data-carousel-next]').click(); // Geser ke kanan
                }
                if (touchEndX > touchStartX) {
                    carousel.querySelector('[data-carousel-prev]').click(); // Geser ke kiri
                }
            }

            // Mendengar event sentuhan pada carousel
            carousel.addEventListener("touchstart", (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            carousel.addEventListener("touchend", (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
        </script>

        <!-- Section utama -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <p class="text-2xl font-semibold text-green-600 leading-none"><span class="text-lg">Rp. </span>100.000</p>
            <p class="w-full font-normal text-justify text-lg line-clamp-2 leading-normal">Nama Produk Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Penjelasan -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Jenis Produk</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">{{ $data->jenis_produk }}</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Deskripsi Produk</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, earum maxime ad animi maiores quae?
                    {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores blanditiis dolor, officiis ad consequatur, labore nulla, nisi quos libero alias nihil. Maxime ipsa assumenda temporibus vel quo facere ut est id qui quam numquam error nihil ducimus dolor facilis placeat distinctio aut, magni vero velit, repellat iusto. Consequuntur, amet libero? --}}
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text">Lihat Selengkapnya</p> 
            </div>
        </div>

        @switch($data->id_jenis_produk)
            @case(1) <!-- Makanan/Minuman Kemasan -->
                <x-detail_produk.produk_1></x-detail_produk.produk_1>
                @break
            @case(3) <!-- Home Decor -->
                <x-detail_produk.produk_3></x-detail_produk.produk_3>
                @break
            @case(4) <!-- Fashion dan Kerajinan Fashion -->
                <x-detail_produk.produk_3></x-detail_produk.produk_3>
                @break
            @case(5) <!-- Produk Pertanian -->
                <x-detail_produk.produk_5></x-detail_produk.produk_5>
                @break
            @case(6) <!-- Herbal, Kecantikan, dan Kesehatan -->
                <x-detail_produk.produk_6></x-detail_produk.produk_6>
                @break
            @default
                
        @endswitch

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
