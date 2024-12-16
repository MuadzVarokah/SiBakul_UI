<div class="flex justify-center">
    <!-- Section Hero -->
    <div class="relative justify-items-center w-full max-w-screen-md bg-green-700 h-[62.5vh]"
        style="border-radius: 0 0 50% 50% / 0 0 2rem 2rem;">
        {{-- <img class="w-auto my-[6vh] h-[6vh]" src="{{ asset('logo_white.png') }}" alt="SiBakul_White">
        <p class="text-white font-bold">Hai, Selamat Datang!</p> --}}
        <div class="absolute bottom-0 right-1/2 translate-x-1/2 w-max h-full content-center center flex flex-col justify-between items-center">
            {{-- <img class="h-fit max-h-full w-full max-w-[100vw]" src="{{ asset('banner_depan.png') }}" alt="Banner_depan"> --}}
            <div class="w-fit my-8">
                <img class="h-[10vh] w-auto" src="{{ asset('banner_depan-top.png') }}" alt="Banner_depan-top">
            </div>

            <!-- Link Swiper's CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <style>
                .swiper-slide {
                    text-align: center;
                    font-size: 18px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .swiper-pagination-bullet {
                    background-color: green !important;
                    border: 1px solid white !important;
                }

                .swiper-pagination-bullet-active {
                    background-color: green !important;
                }
            </style>

            <!-- Swiper -->
            <div class="swiper mySwiper w-[100vw] max-w-screen-md">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        MarketHUB
                    </a>
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        <img class="rounded-md" src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white rounded-md"></div>
                    </a>
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        Klinik Koperasi
                    </a>
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        Layanan Data
                    </a>
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        Agenda Dinas
                    </a>
                    <a href="#" class="swiper-slide !w-auto max-w-[calc(768px - 20%)] !h-[22vh] aspect-video border-0 rounded-md bg-white shadow">
                        Be the future
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                centeredSlides: true,
                spaceBetween: 15,
                loop: true,  // Enable infinite loop
                // autoplay: {
                //     delay: 2500,  // Set the delay between slides (in milliseconds)
                //     disableOnInteraction: false,  // Ensure autoplay doesn't stop on user interaction
                // },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                });
            </script>

            <div class="w-fit mt-8 mb-4">
                <img class="h-[7.5vh] w-auto" src="{{ asset('banner_depan-bottom.png') }}" alt="Banner_depan-bottom">
            </div>
        </div>
    </div>

    <!-- Section Action -->
    <div class="w-full max-w-screen-md absolute bottom-0">
        <div class="container w-4/5 mx-auto mb-6">

            <!-- Section Menu Cepat -->
            <div class="flex flex-wrap justify-center mb-6">
                <p class="w-full text-green-700 font-bold text-center mb-2">Menu Cepat</p>
                <div class="flex overflow-scroll pb-2 overflow-y-hidden gap-1">
                    @foreach ($menuCepat as $key => $value)
                        <div class="w-16 flex-[0_0_auto]">
                            <a href="javascript:void(0)">
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

            <!-- Section tombol login -->
            <style>
                /* Transisi untuk drawer */
                .drawer {
                    transform: translateY(100%);
                    opacity: 0;
                    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                .drawer-open {
                    transform: translateY(0);
                    opacity: 1;
                }

                /* Untuk memastikan backdrop ditutup saat drawer ditutup */
                .backdrop-hidden {
                    opacity: 0;
                    pointer-events: none;
                }

                .backdrop-visible {
                    opacity: 1;
                    pointer-events: all;
                }
            </style>
            <button class="btn-green w-full font-semibold" id="openDrawer" type="button">Login</button>

            <!-- Backdrop -->
            <div id="backdrop" class="fixed inset-0 bg-black bg-opacity-50 backdrop-hidden z-40"></div>

            <!-- Bottom Drawer -->
            <div id="drawer"
                class="fixed bottom-0 left-0 right-0 bg-white p-4 drawer hidden w-full max-w-screen-md justify-self-center z-50 rounded-t-lg">
                <p id="closeDrawer" class="font-bold text-right text-sm text-green-700">Tutup</p>
                <h2 class="font-bold text-center text-xl text-green-700 mb-2">Login</h2>
                <div class="relative flex flex-col items-center rounded-xl bg-transparent">
                    <form class="mt-4 mb-2 w-80 max-w-screen-lg sm:w-96">
                        <div class="mb-1 flex flex-col gap-4">
                            <div class="w-full max-w-sm min-w-[200px]">
                                <div class="relative">
                                    <label class="block mb-1 text-sm text-slate-600" for="username">Username</label>
                                    <input type="text" name="username" id="username" placeholder="SBxxxxx" autocomplete="on"
                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"/>
                                    
                                    <p class="flex items-start mt-2 text-xs text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                        </svg>
                                    
                                        Isi dengan ID SiBakul.
                                    </p>     
                                </div>
                            </div>

                            <div class="w-full max-w-sm min-w-[200px]">
                                <div class="relative">
                                    <label class="block mb-1 text-sm text-slate-600" for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="on"
                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-9 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"/>
                                    <div id="togglePassword" class="absolute w-5 h-5 right-2.5 text-slate-600 text-lg top-[2.1rem]" onclick="changeIcon(this)">
                                        <i class="fa-regular fa-eye m-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2">
                                <div class="inline-flex items-center mt-2">
                                    <label class="flex items-center cursor-pointer relative" for="check-2">
                                        <input type="checkbox" name="is_remember" id="check-2" 
                                            class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-green-700 checked:border-green-700"/>
                                        <span class="absolute text-white opacity-0 pointer-events-none peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="cursor-pointer ml-2 text-slate-600 text-sm" for="check-2">Ingat saya</label>
                                </div>
                            </div>
                            <div class="w-1/2 content-center text-end">
                                <a href="#" class="text-sm font-semibold text-green-700 underline">
                                    Lupa Password?
                                </a>
                            </div>
                        </div>
                        
                        <a wire:navigate:hover href="{{ route('dashboard') }}" class="btn-green w-full font-semibold mt-2 block" type="button">Login</a>
                        <p class="flex justify-center mt-6 text-sm text-slate-600">
                            Belum punya akun?
                            <a href="#" class="ml-1 text-sm font-semibold text-green-700 underline">
                                Daftar sekarang
                            </a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Ambil elemen yang diperlukan untuk toggle password
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    // Fungsi untuk mengganti type password
    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
    });

    // Fungsi untuk mmengubah icon
    function changeIcon(anchor) {
        var icon = anchor.querySelector("i");
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    }


    // Ambil elemen yang diperlukan untuk drawer
    const openDrawerButton = document.getElementById('openDrawer');
    const bottomDrawer = document.getElementById('drawer');
    const backdrop = document.getElementById('backdrop');
    const closeDrawerButton = document.getElementById('closeDrawer');

    // Fungsi untuk membuka drawer
    openDrawerButton.addEventListener('click', function() {
        bottomDrawer.classList.remove('hidden'); // Menampilkan drawer
        setTimeout(() => {
            bottomDrawer.classList.add('drawer-open'); // Menambahkan transisi membuka
        }, 10); // Memberikan sedikit delay agar transisi berlaku

        backdrop.classList.remove('backdrop-hidden'); // Menampilkan backdrop
        backdrop.classList.add('backdrop-visible'); // Memberikan efek tampilan
    });

    // Fungsi untuk menutup drawer
    closeDrawerButton.addEventListener('click', function() {
        bottomDrawer.classList.remove('drawer-open'); // Menghapus efek buka

        // Menyembunyikan backdrop dan drawer setelah transisi
        setTimeout(() => {
            bottomDrawer.classList.add('hidden'); // Menyembunyikan drawer
            backdrop.classList.add('backdrop-hidden'); // Menyembunyikan backdrop
            backdrop.classList.remove('backdrop-visible');
        }, 300); // Waktu yang sama dengan durasi transisi (300ms)
    });

    // Menutup drawer jika klik pada backdrop
    backdrop.addEventListener('click', function() {
        closeDrawerButton.click(); // Memanggil fungsi untuk menutup drawer
    });
</script>
