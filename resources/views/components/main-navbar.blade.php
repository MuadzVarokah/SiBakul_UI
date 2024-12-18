<!-- Top Navbar -->
<nav class="fixed top-0 z-30 bg-white shadow-md h-14 w-full max-w-screen-md flex items-center justify-between px-4">
    <!-- App Name -->
    {{-- <span class="font-semibold text-xl text-gray-800 ml-3">SiBakul Jogja</span> --}}
    <img class="h-6 self-center" src="https://sibakuljogja.jogjaprov.go.id/files/sibakul-logo.png"
        alt="Logo_SiBakul">

    <!-- Profile Picture -->
    <div class="flex items-center space-x-2" id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar">
        <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
    </div>
    <!-- Dropdown menu -->
    <div id="dropdownAvatar"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow min-w-44 max-w-screen-md dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>Yudi Wahyudi</div>
            <div class="text-xs font-medium truncate text-gray-500">SB000001</div>
            <p class="text-xs font-medium truncate mt-2 text-green-600">Nastar Kastangel</p>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
            <li>
                <a wire:navigate:hover href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <i class="fa-solid fa-house w-4 mr-2"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <i class="fa-solid fa-user w-4 mr-2"></i>
                    Profil
                </a>
            </li>
            <li>
                <a wire:navigate:hover href="{{ route('kelengkapanData') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <i class="fa-solid fa-file-circle-check w-4 mr-2"></i>
                    Kelengkapan Data
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600" id="openDrawer">
                    <i class="fa-solid fa-right-left w-4 mr-2"></i>
                    Beralih Usaha
                </a>
            </li>
        </ul>
        <div class="py-2">
            <a href="#"
                class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">
                <i class="fa-solid fa-arrow-right-from-bracket w-4 mr-2"></i>
                Log out
            </a>
        </div>
    </div>
</nav>

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

<!-- Backdrop -->
<div id="backdrop" class="fixed inset-0 bg-black bg-opacity-50 backdrop-hidden z-40"></div>

<!-- Bottom Drawer -->
<div id="drawer"
    class="fixed bottom-0 left-0 right-0 bg-white p-4 drawer hidden w-full max-w-screen-md justify-self-center z-50 rounded-t-lg">
    <p id="closeDrawer" class="font-bold text-right text-sm text-green-700">Tutup</p>

    <div class="relative w-full flex flex-wrap px-4 py-3 mt-4 rounded-md bg-slate-100 gap-4">
        <a href="javascript:void(0)"
            class="w-full flex flex-wrap justify-between items-center active:scale-90 transition-transform">
            <div class="flex flex-wrap space-x-2">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                <p class="ml-4 content-center text-base font-medium">Nastar Kastangel</p>
            </div>
            <span
                class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                Aktif
            </span>
        </a>
        <a href="javascript:void(0)"
            class="w-full flex flex-wrap justify-between items-center active:scale-90 transition-transform">
            <div class="flex flex-wrap space-x-2">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                <p class="ml-4 content-center text-base font-medium">Usaha Lain</p>
            </div>
        </a>
        <a href="javascript:void(0)"
            class="w-full flex flex-wrap justify-between items-center active:scale-90 transition-transform">
            <div class="flex flex-wrap space-x-2">
                {{-- <img src="https://via.placeholder.com/32" alt="Profile" class="w-8 h-8 rounded-full"> --}}
                <i
                    class="fa-solid fa-plus w-10 h-10 rounded-full bg-gray-300 text-center content-center text-white"></i>
                <p class="ml-4 content-center text-base font-medium">Tambah Usaha</p>
            </div>
        </a>
    </div>
</div>

<script>
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