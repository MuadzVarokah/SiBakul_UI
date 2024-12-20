<div class="flex justify-center w-full max-w-screen-md">
    <x-main-navbar />

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 mb-16">
        <div class="w-full bg-slate-100 pb-4">
            <!-- carousel -->
            <div id="carousel" class="relative w-full max-w-screen-md z-0" data-carousel="static"
                data-carousel-interval="5000">
                <!-- Carousel wrapper -->
                <div class="relative w-full overflow-hidden aspect-video">
                    <!-- Item 1 (Image) -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 (Video) -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item id="video-slide-2">
                        <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" loop
                            playsinline id="video-2">
                            <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <!-- Item 3 (Image) -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 (Video) -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item id="video-slide-4">
                        <video class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" loop
                            playsinline id="video-4">
                            <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <!-- Item 5 (Image) -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-3">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 active:scale-90 transition-transform">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 active:scale-90 transition-transform">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <!-- Script untuk memutar video dan mengontrol perilaku carousel -->
            <script>
                const carousel = document.getElementById("carousel");
                const videos = document.querySelectorAll("video");

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

                // Fungsi untuk memulai video pada slide yang aktif
                function playVideoOnActiveSlide() {
                    // Cari slide yang aktif
                    const activeSlide = document.querySelector('[data-carousel-item].active');

                    // Jika ada video pada slide aktif, putar video tersebut
                    if (activeSlide) {
                        const video = activeSlide.querySelector('video');
                        if (video) {
                            video.play();
                            // carousel.setAttribute('data-carousel-interval', 'false'); // Hentikan interval otomatis
                        }
                    }
                }

                // Fungsi untuk menghentikan video pada slide sebelumnya
                function pauseVideoOnInactiveSlide() {
                    // Cari semua video dan hentikan jika mereka tidak ada di slide aktif
                    videos.forEach(video => {
                        if (!video.closest('[data-carousel-item].active')) {
                            video.pause();
                            // video.currentTime = 0; // Reset ke awal
                        }
                    });
                    // carousel.setAttribute('data-carousel-interval', '5000'); // Kembalikan interval otomatis
                }

                // Tambahkan event listener untuk mendeteksi saat slide berubah
                carousel.addEventListener('slid.bs.carousel', function() {
                    pauseVideoOnInactiveSlide(); // Hentikan video pada slide yang tidak aktif
                    playVideoOnActiveSlide(); // Putar video pada slide yang aktif
                });

                // Tambahkan event listener untuk video click (play/pause)
                videos.forEach(video => {
                    video.addEventListener("click", () => {
                        if (video.paused) {
                            video.play();
                        } else {
                            video.pause();
                        }
                    });
                });

                // Memulai video ketika halaman dimuat jika slide pertama adalah video
                document.addEventListener("DOMContentLoaded", function() {
                    playVideoOnActiveSlide();
                });
            </script>

            <!-- card data -->
            <div class="w-full max-w-screen-md justify-items-center mt-[-0.5rem]">
                <div
                    class="flex flex-wrap justify-between relative z-10 w-11/12 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full pb-0.5 mb-1 border-b text-center text-base font-semibold text-green-600">
                        Nastar Kastangel
                    </div>

                    <!-- ID Sibakul -->
                    <div class="w-auto flex flex-wrap">
                        <div class="w-full">
                            <div class="w-full text-xs font-semibold text-gray-500">ID SiBakul</div>
                            <div class="w-full text-base font-semibold text-green-600">SB000001</div>
                        </div>
                    </div>

                    <!-- Kelas & Skor -->
                    <a href="javascript:void(0)" class="w-auto flex flex-wrap" data-dialog-target="dialog">
                        <div class="w-full flex justify-center">
                            <div class="w-1/3 text-right text-xs font-semibold text-gray-500">Kelas</div>
                            <div class="w-min text-center text-xs font-semibold text-gray-500 px-1">|</div>
                            <div class="w-1/3 text-left text-xs font-semibold text-gray-500">Skor</div>
                        </div>
                        <div class="w-full flex justify-center">
                            <div class="w-1/3 text-right text-base font-semibold text-green-600">2</div>
                            <div class="w-min text-center text-base font-semibold text-gray-500 px-1">|</div>
                            <div class="w-1/3 text-left text-base font-semibold text-green-600">275</div>
                        </div>
                    </a>

                    <!-- Kelengkapan data -->
                    <a wire:navigate:hover href="{{ route('kelengkapanData') }}" class="w-auto flex flex-wrap">
                        <div class="w-full">
                            <div class="w-full text-xs font-semibold text-gray-500">Kelengkapan</div>
                            <div class="w-full text-base font-semibold text-green-600">69%</div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Main modal -->
            <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true"
                class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                <div data-dialog="dialog"
                    class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
                    <!-- Header modal -->
                    <div class="w-full flex flex-wrap justify-between">
                        <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                            Kelas Binaan
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
                    <div class="relative border-t border-slate-200 pt-4 leading-normal text-slate-600 font-light">
                        <p class="flex -mt-2 text-xs text-slate-400 items-center text-justify">
                            <i class="fa-solid fa-circle-exclamation w-5 h-5 mr-1.5" style="font-size: medium"></i>
                            Silahkan akses layanan konsultasi untuk memahami skor kelas binaan ke kondisi usaha anda
                        </p>
                        <div class="w-full mt-2">
                            <div class="relative right-0">
                                <ul class="relative flex flex-wrap px-1.5 py-1.5 rounded-t-md bg-slate-100"
                                    data-tabs="tabs" role="list">
                                    <li class="z-20 flex-auto text-center">
                                        <a class="z-20 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-green-600 font-semibold bg-inherit"
                                            data-tab-target="" role="tab" aria-selected="true"
                                            aria-controls="grafik">
                                            Grafik
                                        </a>
                                    </li>
                                    <li class="z-20 flex-auto text-center">
                                        <a class="z-20 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                                            data-tab-target="" role="tab" aria-selected="false"
                                            aria-controls="skor">
                                            Skor
                                        </a>
                                    </li>
                                </ul>

                                <div data-tab-content="" class="p-1.5 pt-0 rounded-b-md bg-slate-100">
                                    <div id="grafik" role="tabpanel">
                                        <canvas id="myChart"
                                            style="position: relative; height: 15rem; width: 100%"></canvas>
                                    </div>
                                    <div class="hidden opacity-0" id="skor" role="tabpanel">
                                        <div
                                            class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-md bg-clip-border">
                                            <table class="w-full text-left table-auto">
                                                <tbody>
                                                    @foreach ($listAspek as $keyAspek => $valueAspek)
                                                        <tr>
                                                            <td class="px-4 py-2 border-b">
                                                                <p class="block text-sm antialiased font-normal leading-normal">{{ $valueAspek->aspek }}</p>
                                                            </td>
                                                            <td class="px-4 py-2 border-b">
                                                                <p class="block text-sm antialiased font-medium leading-normal text-right font-mono">{{ $valueAspek->skor }}</p>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="px-4 py-2 border-t-4">
                                                            <p class="block text-sm antialiased font-medium leading-normal">Total</p>
                                                        </th>
                                                        <th class="px-4 py-2 border-t-4">
                                                            <p class="block text-sm antialiased font-semibold leading-normal text-right font-mono">{{ $totalSkorAspek }}</p>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div
                                            class="w-full flex flex-wrap justify-between text-sm text-green-600 font-bold px-4 pt-2 pb-1">
                                            <p>Kelas pembinaan : </p>
                                            <p>Kelas 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- card data -->
            <div class="w-full max-w-screen-md justify-items-center mt-4">
                <div class="flex flex-wrap justify-center w-11/12 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="w-full text-green-700 font-bold text-center mb-2">Daftar Menu</p>
                    <div class="flex overflow-x-scroll pb-2 overflow-y-hidden gap-1">
                        @foreach ($listMenu as $key => $value)
                            <div class="w-16 flex-[0_0_auto]">
                                <a href="{!! $value->url !!}">
                                    <div class="img-menu">
                                        {!! $value->icon !!}
                                    </div>
                                    <div class="title-menu-container">
                                        <span class="title-menu">{{ $value->title }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full px-4 py-2">
            <p class="w-full text-green-700 font-bold">Riwayat Aktivitas Pembinaan</p>
            <p class="w-full text-slate-400 text-xs mb-2">Berisi riwayat terakhir dari tiap aktivitas pembinaan</p>
            <div class="w-full">
                <div class="relative right-0">
                    <ul class="relative flex flex-wrap px-1.5 py-1.5 rounded-t-md bg-slate-100" data-tabs="tabs"
                        role="list">
                        <li class="z-20 flex-auto text-center">
                            <a class="z-20 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-green-600 font-semibold bg-inherit"
                                data-tab-target="" role="tab" aria-selected="true" aria-controls="konsultasi">
                                Konsultasi
                            </a>
                        </li>
                        <li class="z-20 flex-auto text-center">
                            <a class="z-20 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                                data-tab-target="" role="tab" aria-selected="false" aria-controls="fasilitasi">
                                Fasilitasi
                            </a>
                        </li>
                        <li class="z-20 flex-auto text-center">
                            <a class="z-20 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                                data-tab-target="" role="tab" aria-selected="false" aria-controls="transaksi">
                                Transaksi
                            </a>
                        </li>
                    </ul>

                    <div data-tab-content="" class="p-1.5 pt-0 rounded-b-md bg-slate-100">
                        <div id="konsultasi" role="tabpanel">
                            <div
                                class="z-20 flex flex-wrap items-center justify-center w-full px-4 py-2 mb-1.5 text-sm border-0 rounded-md bg-white shadow">
                                <p class="w-full text-xs text-slate-600 font-semibold mb-2">13 Nov 2024</p>
                                <p class="w-full font-bold">Membuat artikel SEO</p>
                                <p class="w-full text-sm font-normal text-justify">Lorem ipsum dolor, sit amet
                                    consectetur adipisicing elit. Mollitia eos omnis facere neque nam laborum!</p>
                            </div>
                            <a href="javascript:void(0)">
                                <p class="w-full text-center text-sm text-green-600 font-bold pt-0.5 pb-2">Lihat
                                    Selengkapnya</p>
                            </a>
                        </div>
                        <div class="hidden opacity-0" id="fasilitasi" role="tabpanel">
                            <!-- Accordion Item 1 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Pelatihan</span>
                                    <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        <a wire:navigate:hover href="{{ route('detailPelatihan', ['id_pelatihan' => 1]) }}"
                                            class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 text-sm border-0 rounded-md bg-white shadow">
                                            <div class="w-full flex flex-wrap">
                                                <div class="w-fit mr-2">
                                                    <div
                                                        class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                                        <i class="fa-solid fa-book-bookmark"></i>
                                                    </div>
                                                </div>
                                                <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                                    <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                                        Nama Pelatihan - Lorem ipsum dolor sit.
                                                    </p>
        
                                                    <div class="w-full flex flex-wrap items-end">
                                                        <p class="w-fit text-xs text-slate-600 font-semibold">
                                                            08:00 - 15:00
                                                            <br>
                                                            13 Apr 2024 - 15 Apr 2024
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a wire:navigate:hover href="{{ route('pelatihan', ['tab' => 'riwayat']) }}">
                                        <p class="w-full text-center text-sm text-green-600 font-bold pb-2">Lihat Selengkapnya</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Accordion Item 2 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Pameran</span>
                                    <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        <a wire:navigate:hover href="{{ route('detailPameran', ['id_pameran' => 3]) }}"
                                            class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 text-sm border-0 rounded-md bg-white shadow">
                
                                            <div class="w-full flex flex-wrap">
                                                <div class="w-fit mr-2">
                                                    <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                                        <i class="fa-regular fa-image"></i>
                                                    </div>
                                                </div>
                                                <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                                    <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                                        Nama Pameran - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, totam?
                                                    </p>
                
                                                    <div class="w-full flex flex-wrap items-end">
                                                        <p class="w-full text-xs text-slate-600 font-semibold">08:00 - 15:00</p>
                                                        <p class="w-full text-xs text-slate-600 font-semibold">13 Apr 2024 - 15 Apr 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a wire:navigate:hover href="{{ route('pameran', ['tab' => 'riwayat']) }}">
                                            <p class="w-full text-center text-sm text-green-600 font-bold pb-2">Lihat Selengkapnya</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Sertifikasi Usaha</span>
                                    <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        <a wire:navigate:hover href="{{ route('detailSertifikasiUsaha', ['id_sertifikasi' => 1]) }}"
                                            class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 text-sm border-0 rounded-md bg-white shadow">
                                            <div class="w-full flex flex-wrap justify-between items-start">
                                                <p class="w-fit text-xs text-slate-600 font-semibold mb-2">17 Jan 2024</p>
                                                <p class="w-fit text-xs text-slate-600 font-semibold mb-2">09:00 - 13:00</p>
                                            </div>
            
                                            <div class="w-full flex flex-wrap">
                                                <div class="w-fit mr-2">
                                                    <div class="w-14 h-14 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                                        <i class="fa-solid fa-file-contract"></i>
                                                    </div>
                                                </div>
                                                <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                                    <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                                        Sosialisasi dan Pembuatan NIB untuk UMKM
                                                    </p>
                
                                                    <div class="w-full flex flex-wrap items-end justify-between">
                                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">NIB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a wire:navigate:hover href="{{ route('sertifikasi') }}">
                                        <p class="w-full text-center text-sm text-green-600 font-bold pb-2">Lihat Selengkapnya</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Accordion Item 4 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(4)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Sertifikasi Produk</span>
                                    <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        Content
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 5 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(5)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Foto Produk</span>
                                    <span id="icon-5" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        <a wire:navigate:hover href="{{ route('detailFotoProduk', ['id_foto' => 1]) }}"
                                            class="flex flex-wrap items-center justify-center w-full p-2 py-2 text-sm border-0 rounded-md bg-white shadow">
                                            <div class="w-full flex flex-wrap">
                                                <div class="w-fit mr-2">
                                                    <div class="w-14 h-14 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                                        <i class="fa-solid fa-icons"></i>
                                                    </div>
                                                </div>
                                                <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                                    <p class="w-full font-bold text-justify line-clamp-2 leading-none">Foto Produk</p>
                                                    <div class="w-full flex flex-wrap items-end justify-between">
                                                        <div class="grid grid-cols-1">
                                                            <p class="w-fit text-xs text-slate-600 font-semibold">Pagi (09:00 - 12:00)</p>
                                                            <p class="w-fit text-xs text-slate-600 font-semibold">20 Des 2024</p>
                                                        </div>
                                                        <span class="w-fit inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                                                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                                            &nbsp;0 / 5
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a wire:navigate:hover href="{{ route('fotoProduk', ['tab' => 'riwayat']) }}">
                                        <p class="w-full text-center text-sm text-green-600 font-bold pb-2">Lihat Selengkapnya</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Accordion Item 6 -->
                            <div class="border-b border-slate-200">
                                <button onclick="toggleAccordion(6)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Akses Pemodalan</span>
                                    <span id="icon-6" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        Content
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 7 -->
                            <div class="border-none border-slate-200">
                                <button onclick="toggleAccordion(7)" class="w-full flex justify-between items-center p-2 text-slate-800">
                                    <span class="text-sm font-semibold">Bantuan Alat</span>
                                    <span id="icon-7" class="text-slate-800 transition-transform duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-2">
                                        Content
                                    </div>
                                </div>
                            </div>

                            <script>
                                function toggleAccordion(index) {
                                    const content = document.getElementById(`content-${index}`);
                                    const icon = document.getElementById(`icon-${index}`);

                                    // SVG for Down icon
                                    const downSVG = `
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    `;

                                    // SVG for Up icon
                                    const upSVG = `
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    `;

                                    // Toggle the content's max-height for smooth opening and closing
                                    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                                        content.style.maxHeight = '0';
                                        icon.innerHTML = upSVG;
                                    } else {
                                        content.style.maxHeight = content.scrollHeight + 'px';
                                        icon.innerHTML = downSVG;
                                    }
                                }
                            </script>

                            {{-- <div
                                class="z-20 flex flex-wrap items-center justify-center w-full px-4 py-2 mb-1.5 text-sm border-0 rounded-md bg-white shadow">
                                <p class="w-full text-xs text-slate-600 font-semibold mb-2">13 Nov 2024 - 14 Nov 2024
                                </p>
                                <p class="w-full font-bold">Membuat artikel SEO</p>
                                <p class="w-full text-sm font-normal text-justify">Lorem ipsum dolor, sit amet
                                    consectetur adipisicing elit. Mollitia eos omnis facere neque nam laborum!</p>
                            </div>
                            <a href="javascript:void(0)">
                                <p class="w-full text-center text-sm text-green-600 font-bold pt-0.5 pb-2">Lihat
                                    Selengkapnya</p>
                            </a> --}}
                        </div>
                        <div class="hidden opacity-0" id="transaksi" role="tabpanel">
                            <div
                                class="z-20 flex flex-wrap items-center justify-center w-full px-4 py-2 mb-1.5 text-sm border-0 rounded-md bg-white shadow">
                                <p class="w-full text-xs text-slate-600 font-semibold mb-2">13 Nov 2024, 13:45</p>
                                <p class="w-full font-bold">Nastar Kastangel</p>
                                <p class="w-full text-sm font-normal text-justify">Lorem ipsum dolor, sit amet
                                    consectetur adipisicing elit. Mollitia eos omnis facere neque nam laborum!</p>
                            </div>
                            <a href="javascript:void(0)">
                                <p class="w-full text-center text-sm text-green-600 font-bold pt-0.5 pb-2">Lihat
                                    Selengkapnya</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <x-main-footer />


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = {
            labels: [
                'SDM',
                'Produktifitas',
                'Pemasaran',
                'Pemasaran Online',
                'Kelembagaan',
                'Keuangan'
            ],
            datasets: [{
                label: 'Nilai Kompetensi',
                data: [80, 71.014492753623, 77.333333333333, 64.444444444444, 64.285714285714, 55.555555555556],
                fill: true,
                backgroundColor: 'rgba(5, 122, 85, 0.2)',
                borderColor: 'rgb(5, 122, 85)',
                pointBackgroundColor: 'rgb(5, 122, 85)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(5, 122, 85)'
            }]
        };

        const option = {
            responsive: true,
            maintainAspectRatio: false,
            scale: {
                max: 100,
                min: 0
            }
        };

        const config = {
            type: 'radar',
            data: data,
            options: option
        };

        const ctx = document.getElementById('myChart');

        new Chart(ctx, config);
    </script>





    {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script> --}}
    <script>
        (function() {
            var total = document.querySelectorAll("[data-tabs]");
            var getEventTarget = function getEventTarget(e) {
                e = e || window.event;
                return e.target || e.srcElement
            };
            total.forEach(function(item, i) {
                var moving_div = document.createElement("div");
                var first_li = item.querySelector("li:first-child [data-tab-target]");
                var tab = first_li.cloneNode();
                tab.innerHTML = "-";
                tab.classList.remove("bg-inherit", "text-slate-700");
                tab.classList.add("bg-white", "text-white");
                tab.style.animation = ".2s ease";
                moving_div.classList.add("z-10", "absolute", "text-slate-700", "rounded-lg", "bg-inherit",
                    "flex-auto", "text-center", "bg-none", "border-0", "block", "shadow");
                moving_div.setAttribute("moving-tab", "");
                moving_div.setAttribute("data-tab-target", "");
                moving_div.appendChild(tab);
                item.appendChild(moving_div);
                var list_length = item.getElementsByTagName("li").length;
                moving_div.style.padding = "0px";
                moving_div.style.width = item.querySelector("li:nth-child(1)").offsetWidth + "px";
                moving_div.style.transform = "translate3d(0px, 0px, 0px)";
                moving_div.style.transition = ".5s ease";
                item.onmouseover = function(event) {
                    var target = getEventTarget(event);
                    var li = target.closest("li");
                    if (li) {
                        var nodes = Array.from(li.closest("ul").children);
                        var index = nodes.indexOf(li) + 1;
                        item.querySelector("li:nth-child(" + index + ") [data-tab-target]").onclick =
                            function() {
                                item.querySelectorAll("li").forEach(function(list_item) {
                                    list_item.firstElementChild.removeAttribute("active");
                                    list_item.firstElementChild.setAttribute("aria-selected",
                                        "false")
                                });
                                li.firstElementChild.setAttribute("active", "");
                                li.firstElementChild.setAttribute("aria-selected", "true");
                                moving_div = item.querySelector("[moving-tab]");
                                var sum = 0;
                                if (item.classList.contains("flex-col")) {
                                    for (var j = 1; j <= nodes.indexOf(li); j++) {
                                        sum += item.querySelector("li:nth-child(" + j + ")").offsetHeight
                                    }
                                    moving_div.style.transform = "translate3d(0px," + sum + "px, 0px)";
                                    moving_div.style.height = item.querySelector("li:nth-child(" + j + ")")
                                        .offsetHeight
                                } else {
                                    for (var j = 1; j <= nodes.indexOf(li); j++) {
                                        sum += item.querySelector("li:nth-child(" + j + ")").offsetWidth
                                    }
                                    moving_div.style.transform = "translate3d(" + sum + "px, 0px, 0px)";
                                    moving_div.style.width = item.querySelector("li:nth-child(" + index +
                                        ")").offsetWidth + "px"
                                }
                            }
                    }
                }
            });
            window.addEventListener("resize", function(event) {
                total.forEach(function(item, i) {
                    item = item.parentElement.firstElementChild;
                    item.querySelector("[moving-tab]").remove();
                    var moving_div = document.createElement("div");
                    var tab = item.querySelector("[data-tab-target][aria-selected='true']").cloneNode();
                    tab.innerHTML = "-";
                    tab.classList.remove("bg-inherit");
                    tab.classList.add("bg-white", "text-white");
                    tab.style.animation = ".2s ease";
                    moving_div.classList.add("z-10", "absolute", "text-slate-700", "rounded-lg",
                        "bg-inherit", "flex-auto", "text-center", "bg-none", "border-0", "block",
                        "shadow");
                    moving_div.setAttribute("moving-tab", "");
                    moving_div.setAttribute("data-tab-target", "");
                    moving_div.appendChild(tab);
                    item.appendChild(moving_div);
                    moving_div.style.padding = "0px";
                    moving_div.style.transition = ".5s ease";
                    var li = item.querySelector("[data-tab-target][aria-selected='true']")
                        .parentElement;
                    if (li) {
                        var nodes = Array.from(li.closest("ul").children);
                        var index = nodes.indexOf(li) + 1;
                        var sum = 0;
                        if (item.classList.contains("flex-col")) {
                            for (var j = 1; j <= nodes.indexOf(li); j++) {
                                sum += item.querySelector("li:nth-child(" + j + ")").offsetHeight
                            }
                            moving_div.style.transform = "translate3d(0px," + sum + "px, 0px)";
                            moving_div.style.width = item.querySelector("li:nth-child(" + index + ")")
                                .offsetWidth + "px";
                            moving_div.style.height = item.querySelector("li:nth-child(" + j + ")")
                                .offsetHeight
                        } else {
                            for (var j = 1; j <= nodes.indexOf(li); j++) {
                                sum += item.querySelector("li:nth-child(" + j + ")").offsetWidth
                            }
                            moving_div.style.transform = "translate3d(" + sum + "px, 0px, 0px)";
                            moving_div.style.width = item.querySelector("li:nth-child(" + index + ")")
                                .offsetWidth + "px"
                        }
                    }
                });
                if (window.innerWidth < 991) {
                    total.forEach(function(item, i) {
                        if (!item.classList.contains("flex-col")) {
                            item.classList.add("flex-col", "on-resize")
                        }
                    })
                } else {
                    total.forEach(function(item, i) {
                        if (item.classList.contains("on-resize")) {
                            item.classList.remove("flex-col", "on-resize")
                        }
                    })
                }
            });
            var total = document.querySelectorAll("[data-tab-content]");
            if (total[0]) {
                total.forEach(function(nav_pills) {
                    var links = nav_pills.parentElement.querySelectorAll("li a[data-tab-target]");
                    links.forEach(function(link) {
                        link.addEventListener("click", function() {
                            var clicked_tab = document.querySelector("#" + link.getAttribute(
                                "aria-controls"));
                            if (!clicked_tab.classList.contains("block", "opacity-100")) {
                                var active_link = clicked_tab.closest("[data-tab-content]")
                                    .parentElement.querySelector(
                                        "li a[data-tab-target][aria-selected='true']");
                                var active_panel = document.querySelector("#" + active_link
                                    .getAttribute("aria-controls"));
                                active_panel.classList.remove("block", "opacity-100");
                                active_panel.classList.add("hidden", "opacity-0");
                                clicked_tab.classList.add("block", "opacity-100");
                                clicked_tab.classList.remove("hidden", "opacity-0")
                            }
                        })
                    })
                })
            }
        })();
    </script>

    {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script> --}}
    <script>
        function _array_like_to_array(arr, len) {
            if (len == null || len > arr.length) len = arr.length;
            for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i];
            return arr2
        }

        function _array_without_holes(arr) {
            if (Array.isArray(arr)) return _array_like_to_array(arr)
        }

        function _iterable_to_array(iter) {
            if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null)
                return Array.from(iter)
        }

        function _non_iterable_spread() {
            throw new TypeError(
                "Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
            )
        }

        function _to_consumable_array(arr) {
            return _array_without_holes(arr) || _iterable_to_array(arr) || _unsupported_iterable_to_array(arr) ||
                _non_iterable_spread()
        }

        function _unsupported_iterable_to_array(o, minLen) {
            if (!o) return;
            if (typeof o === "string") return _array_like_to_array(o, minLen);
            var n = Object.prototype.toString.call(o).slice(8, -1);
            if (n === "Object" && o.constructor) n = o.constructor.name;
            if (n === "Map" || n === "Set") return Array.from(n);
            if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _array_like_to_array(o,
                minLen)
        }(function() {
            var triggers = document.querySelectorAll("[data-dialog-target]");
            var dialogs = document.querySelectorAll("[data-dialog]");
            var backdrops = document.querySelectorAll("[data-dialog-backdrop]");
            var closeTriggers = document.querySelectorAll("[data-dialog-close]");
            if (triggers && dialogs && backdrops) {
                Array.from(triggers).forEach(function(trigger) {
                    return Array.from(dialogs).forEach(function(dialog) {
                        return Array.from(backdrops).forEach(function(backdrop) {
                            if (trigger.dataset.dialogTarget === dialog.dataset.dialog &&
                                backdrop.dataset.dialogBackdrop === dialog.dataset.dialog) {
                                var _dialog_classList, _dialog_classList1;
                                var mountDialog = function mountDialog() {
                                    var _dialog_classList, _dialog_classList1;
                                    isDialogOpen = true;
                                    backdrop.classList.toggle("pointer-events-none");
                                    backdrop.classList.toggle("opacity-0");
                                    (_dialog_classList = dialog.classList).remove.apply(
                                        _dialog_classList, _to_consumable_array(
                                            unmountClasses));
                                    (_dialog_classList1 = dialog.classList).add.apply(
                                        _dialog_classList1, _to_consumable_array(
                                            mountClasses))
                                };
                                var unmountDialog = function unmountDialog() {
                                    var _dialog_classList, _dialog_classList1;
                                    isDialogOpen = false;
                                    backdrop.classList.toggle("pointer-events-none");
                                    backdrop.classList.toggle("opacity-0");
                                    (_dialog_classList = dialog.classList).remove.apply(
                                        _dialog_classList, _to_consumable_array(
                                            mountClasses));
                                    (_dialog_classList1 = dialog.classList).add.apply(
                                        _dialog_classList1, _to_consumable_array(
                                            unmountClasses))
                                };
                                var mountValue = dialog.dataset.dialogMount ||
                                    "opacity-1 translate-y-0";
                                var unmountValue = dialog.dataset.dialogUnmount ||
                                    "opacity-0 -translate-y-14";
                                var transitionValue = dialog.dataset.dialogTransition ||
                                    "transition-all duration-300";
                                var mountClasses = mountValue.split(" ");
                                var unmountClasses = unmountValue.split(" ");
                                var transitionClasses = transitionValue.split(" ");
                                var isDialogOpen = false;
                                (_dialog_classList = dialog.classList).add.apply(
                                    _dialog_classList, _to_consumable_array(unmountClasses));
                                if (!backdrop.hasAttribute("tabindex")) backdrop.setAttribute(
                                    "tabindex", 0);
                                if (transitionValue !== "false")(_dialog_classList1 = dialog
                                    .classList).add.apply(_dialog_classList1,
                                    _to_consumable_array(transitionClasses));
                                if (dialog.className.includes(unmountValue) && !backdrop
                                    .className.includes("pointer-events-none opacity-0")) {
                                    backdrop.classList.add("pointer-events-none");
                                    backdrop.classList.add("opacity-0")
                                }
                                trigger.addEventListener("click", function() {
                                    return dialog.className.includes(unmountValue) ?
                                        mountDialog() : unmountDialog()
                                });
                                backdrop.addEventListener("click", function(param) {
                                    var target = param.target;
                                    var _target_dataset, _target_dataset1;
                                    if ((target === null || target === void 0 ? void 0 :
                                            (_target_dataset = target.dataset) ===
                                            null || _target_dataset === void 0 ?
                                            void 0 : _target_dataset.dialogBackdrop) &&
                                        (target === null || target === void 0 ? void 0 :
                                            (_target_dataset1 = target.dataset) ===
                                            null || _target_dataset1 === void 0 ?
                                            void 0 : _target_dataset1
                                            .dialogBackdropClose)) unmountDialog()
                                });
                                document.addEventListener("keyup", function(param) {
                                    var key = param.key;
                                    return key === "Escape" && isDialogOpen ?
                                        unmountDialog() : null
                                });
                                Array.from(closeTriggers).forEach(function(close) {
                                    return close.addEventListener("click", function() {
                                        return isDialogOpen ? unmountDialog() :
                                            null
                                    })
                                })
                            }
                        })
                    })
                })
            }
        })();
    </script>
</div>
