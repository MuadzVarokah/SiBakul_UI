<!-- Footer -->
<div class="fixed justify-items-center bottom-0 z-30 w-full max-w-screen-md h-16 bg-white border-t border-gray-200">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
        <x-main-footer-menu :active="request()->routeIs('dashboard')" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-house w-5 h-5 mb-2"></i><span class="text-xs">Beranda</span>
        </x-main-footer-menu>

        <x-main-footer-menu :active="request()->routeIs('markethub')" href="{{ route('markethub') }}">
            <i class="fa-solid fa-shop w-5 h-5 mb-2"></i><span class="text-xs">MarketHUB</span>
        </x-main-footer-menu>

        <div class="inline-flex flex-col items-center justify-center px-5 group">
            <div class="flex items-center justify-center">
                <button type="button"
                    class="inline-flex items-center justify-center w-14 h-14 mt-[-2rem] text-2xl font-medium text-white bg-green-600 rounded-full hover:bg-green-700 group active:scale-90 transition-transform">
                    <i class="fa-solid fa-plus w-6 h-6"></i>
                    <span class="sr-only">Order</span>
                </button>
            </div>
            <span
                class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-green-700 dark:group-hover:text-green-600 mt-1">Order</span>
        </div>

        <x-main-footer-menu>
            <i class="fa-solid fa-bell w-5 h-5 mb-2"></i><span class="text-xs">Notifikasi</span>
        </x-main-footer-menu>

        <x-main-footer-menu>
            <i class="fa-solid fa-headset w-5 h-5 mb-2"></i><span class="text-xs">Konsultasi</span>
        </x-main-footer-menu>
    </div>
</div>