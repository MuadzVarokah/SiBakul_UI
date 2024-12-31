<div class="flex justify-center w-full max-w-screen-md">
    <x-main-navbar />

    @if ($showSyarat == true)
        <div data-dialog-backdrop="important-dialog" data-dialog-backdrop-close="false"
            class="pointer-events-auto fixed inset-0 z-[20] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-100 backdrop-blur-sm transition-opacity duration-300">
            <div class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm !z-20"
                data-dialog="important-dialog">
                <!-- Header modal -->
                <div class="w-full flex flex-wrap justify-between">
                    <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                        Lengkapi Syarat Administrasi
                    </div>
                </div>

                <!-- Content modal -->
                <div class="relative border-y border-slate-200 pt-4 leading-normal text-slate-600 font-light">
                    <p class="flex -mt-2 text-xs text-slate-400 items-center text-justify">
                        <i class="fa-solid fa-circle-exclamation w-5 h-5 mr-1.5" style="font-size: medium"></i>
                        Silahkan lengkapi syarat administrasi berikut agar dapat mengakses layanan MarketHUB
                    </p>
                    <div class="w-full mt-4 pb-4">
                        <div class="px-4">
                            <ol
                                class="relative text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                @foreach ($dataSyarat as $keySyarat => $valueSyarat)
                                    <a href="{{ $valueSyarat->url }}">
                                        @if ($loop->last)
                                            <li class="ms-6">
                                            @else
                                            <li class="mb-4 ms-6">
                                        @endif
                                        @if ($valueSyarat->is_done == 'false')
                                            <span
                                                class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                                {!! $valueSyarat->icon !!}
                                            </span>
                                        @else
                                            <span
                                                class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                <i
                                                    class="fa-solid fa-check w-3.5 h-3.5 text-green-500 dark:text-green-400"></i>
                                            </span>
                                        @endif
                                        <h3 class="font-medium leading-tight">{{ $valueSyarat->menu }}</h3>
                                        <p class="text-xs text-green-500">Lihat detail</p>
                                        </li>
                                    </a>
                                @endforeach
                            </ol>
                        </div>

                    </div>
                </div>
                <a wire:navigate:hover href="{{ route('kelengkapanData') }}">
                    <p class="w-full text-center text-sm text-green-600 font-bold pt-4 pb-2">Lihat Kelengkapan Data</p>
                </a>

            </div>
        </div>

        @section('scripts')
            @parent
            <!-- Script untuk menampilkan dialog syarat administrasi -->
            <script>
                document.addEventListener("livewire:navigated", () => {
                    const dialogBackdrop = document.querySelector('[data-dialog-backdrop]');
                    const dialog = document.querySelector('[data-dialog]');

                    // Ensure the dialog shows up on page load
                    window.addEventListener('load', () => {
                        dialogBackdrop.classList.add('opacity-100', 'pointer-events-auto');
                        dialog.classList.add('opacity-100', 'pointer-events-auto');
                    });

                    // Fungsi untuk menangani klik pada backdrop (tetapi tidak menutup dialog)
                    dialogBackdrop.addEventListener('click', (e) => {
                        if (e.target === dialogBackdrop) {
                            // Animasi untuk dialog memberi kesan tidak bisa ditutup
                            // Reset dan beri jeda animasi
                            dialog.classList.remove('animate-shake'); // Hapus kelas animasi
                            void dialog.offsetWidth; // Memaksa reflow, trik untuk mereset animasi
                            dialog.classList.add('animate-shake'); // Tambahkan kembali animasi
                        }
                    });

                    // Animasi shake ketika backdrop diklik
                    document.styleSheets[0].insertRule(`
                        @keyframes shake {
                            0% { transform: translateX(-2.5px); }
                            25% { transform: translateX(2.5px); }
                            50% { transform: translateX(-2.5px); }
                            75% { transform: translateX(2.5px); }
                            100% { transform: translateX(0); }
                        }
                    `);

                    document.styleSheets[0].insertRule(`
                        .animate-shake {
                            animation: shake 0.5s ease-in-out;
                        }
                    `);
                }, { once: true });
            </script>
        @endsection
    @endif

    <div class="w-full max-w-screen-md mt-14 mb-16 bg-slate-100">
        <!-- Search & Filter -->
        <div class="flex items-center max-w-screen-md mx-auto p-4">
            <!-- Search form -->
            <form class="flex w-full">
                <label for="search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
                <div class="relative w-full">
                    <input type="search" id="search"
                        class="block px-2.5 py-2 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500"
                        placeholder="Cari..." required />
                    <button type="submit"
                        class="absolute top-0 end-0 h-full px-2.5 py-2 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </form>
            <!-- Filter Button -->
            <button type="button" id="sidebar-toggle"
                class="px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                <i class="fa-solid fa-filter"></i>
            </button>
        </div>

        <div class="w-full h-[calc(100vh-(69.6px+3.5rem+4rem))] overflow-y-scroll">
            <div class="w-11/12 m-auto">
                @foreach ($listBarang as $keyBarang => $valueBarang)
                    <a wire:navigate:hover href="{{ route('detailProduk', ['id_produk' => 1]) }}"
                        class="flex flex-wrap items-center justify-center w-full px-4 pt-2 pb-4 mb-4 text-sm border-0 rounded-md bg-white shadow">
                        <div class="w-full flex flex-wrap justify-between items-start">
                            <p class="w-fit text-xs text-slate-600 font-semibold mb-2">{{ $valueBarang->created_at }}
                            </p>
                        </div>

                        <div class="w-full flex flex-wrap">
                            <div class="w-fit mr-2">
                                <img src="{{ $valueBarang->gambar }}" alt="" loading="lazy" class="w-20 h-20 rounded-md">
                            </div>
                            <div class="w-[calc(100%-5.5rem)] flex flex-col justify-between">
                                <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                    {{ $valueBarang->nama }}</p>

                                <div class="w-full flex flex-wrap justify-between items-end">
                                    @if ($valueBarang->kurasi == 2)
                                        <div class="w-full flex flex-wrap justify-start items-end mb-1">
                                            @switch($valueBarang->status)
                                                @case(0)
                                                    <span
                                                        class="inline-flex items-center bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-gray-900 dark:text-gray-300">
                                                        <span class="w-2 h-2 me-1 bg-gray-500 rounded-full"></span>
                                                        Tidak Aktif
                                                    </span>
                                                @break

                                                @default
                                                    <span
                                                        class="inline-flex items-center bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-blue-900 dark:text-blue-300">
                                                        <span class="w-2 h-2 me-1 bg-blue-500 rounded-full"></span>
                                                        Aktif
                                                    </span>
                                            @endswitch
                                        </div>
                                    @endif

                                    @switch($valueBarang->kurasi)
                                        @case(1)
                                            <span
                                                class="inline-flex items-center bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                                <span class="w-2 h-2 me-1 bg-yellow-500 rounded-full"></span>
                                                Proses Kurasi
                                            </span>
                                        @break

                                        @case(2)
                                            <span
                                                class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                                Lolos Kurasi
                                            </span>
                                        @break

                                        @default
                                            <span
                                                class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-red-900 dark:text-red-300">
                                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                                Tidak Lolos Kurasi
                                            </span>
                                    @endswitch
                                    <p class="text-sm font-semibold text-green-600"><span class="text-xs">Rp.
                                        </span>{{ $valueBarang->harga }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="fixed bottom-20 right-4">
                <button type="button" data-dialog-target="dialog"
                    class="px-4 py-3 text-white bg-green-700 rounded-xl border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700 shadow">
                    <i class="fa-solid fa-cart-plus text-xl w-6 h-6"></i>
                </button>
                {{-- <a wire:navigate:hover href="{{ route('tambahProduk') }}" type="button"
                    class="px-4 py-3 text-white bg-green-700 rounded-xl border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700 shadow">
                    <i class="fa-solid fa-cart-plus text-xl w-6 h-6"></i>
                </a> --}}
            </div>

        </div>
    </div>

    <!-- Main modal -->
    <div wire:ignore data-dialog-backdrop="dialog" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="dialog"
            class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
            <!-- Header modal -->
            <div class="w-full flex flex-wrap justify-between">
                <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                    Pilih Jenis Produk
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

            <!-- Form -->
            <form wire:submit.prevent="tambahProduk">
                <!-- Content modal -->
                <div class="relative border-y border-slate-200 pt-4 pb-2 leading-normal text-slate-600 font-light">
                    <p class="flex -mt-2 text-xs text-slate-400 items-center text-justify">
                        <i class="fa-solid fa-circle-exclamation w-5 h-5 mr-1.5" style="font-size: medium"></i>
                        Silahkan pilih jenis produk terlebih dahulu sebelum menambahkan produk
                    </p>
                    <div class="w-full mt-4">
                        <div class="mt-2 mb-2 w-full max-w-screen-md justify-items-center">
                            <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">
                                <div wire:ignore class="relative">
                                    <label class="block mb-1 text-sm text-slate-600 required" for="jenis_produk">Jenis Produk</label>
                                    <select id="jenis_produk" name="jenis_produk" wire:model="jenis_produk" onchange="checkSelection()" class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                        <option></option>
                                        @foreach ($listProduk as $keyProduk => $valueProduk)
                                            <option value="{!! $valueProduk->id !!}">{!! $valueProduk->produk !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer modal -->
                <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
                    <button type="button" data-dialog-close="true"
                        class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Batal
                    </button>
                    <button type="submit" data-dialog-close="true" id="next" disabled
                        {{-- wire:click="tambahProduk" --}}
                        class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Sidebar -->
    <style>
        /* Custom Styles for Sidebar Animation */
        .sidebar {
            transform: translateX(100%);
            opacity: 0;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .sidebar-open {
            transform: translateX(0);
            opacity: 1;
        }

        .backdrop-sidebar-hidden {
            opacity: 0;
            pointer-events: none;
        }

        .backdrop-sidebar-visible {
            opacity: 1;
            pointer-events: all;
            transition: opacity 0.3s ease-in-out;
        }
    </style>

    <!-- Backdrop -->
    <div id="backdrop-sidebar" class="fixed inset-0 bg-black bg-opacity-50 backdrop-sidebar-hidden z-40"></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="sidebar hidden fixed right-0 z-50 w-[250px] h-full rounded-l-lg bg-white shadow-xl overflow-y-auto">
        <div class="flex items-center gap-4 px-4 py-2 mb-2">
            <i class="fa-solid fa-filter w-8 h-8 text-xl text-center content-center"></i>
            <h5
                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Filter
            </h5>
        </div>

        <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">

        </nav>
    </div>

    <x-main-footer />

    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" data-navigate-once></script>
    @endsection

    @section('styles')
        @parent
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    @endsection

    @section('scripts')
        @parent
        {{-- <script>
            document.addEventListener("livewire:navigated", () => {
                console.log("Navigated markethub");
            }, { once: true });
        </script> --}}

        <!-- Script untuk menampilkan sidebar -->
        <script>
            document.addEventListener("livewire:navigated", () => {
                const sidebarToggle = document.getElementById('sidebar-toggle');
                const sidebar = document.getElementById('sidebar');
                const backdropSidebar = document.getElementById('backdrop-sidebar');

                // Fungsi untuk membuka drawer
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.remove('hidden'); // Menampilkan sidebar
                    setTimeout(() => {
                        sidebar.classList.add('sidebar-open'); // Menambahkan animasi buka
                    }, 10); // Memberikan sedikit delay agar transisi berlaku

                    backdropSidebar.classList.remove('backdrop-sidebar-hidden'); // Menampilkan backdrop
                    backdropSidebar.classList.add('backdrop-sidebar-visible'); // Memberikan efek tampilan
                });

                // Fungsi untuk menutup drawer
                backdropSidebar.addEventListener('click', function() {
                    sidebar.classList.remove('sidebar-open'); // Menghapus animasi buka

                    // Menyembunyikan backdrop dan sidebar setelah transisi
                    setTimeout(() => {
                        sidebar.classList.add('hidden'); // Menyembunyikan sidebar
                        backdropSidebar.classList.add('backdrop-sidebar-hidden'); // Menyembunyikan backdrop
                        backdropSidebar.classList.remove('backdrop-sidebar-visible');
                    }, 300); // Waktu yang sama dengan durasi transisi (300ms)
                });
            }, { once: true });
        </script>

        <!-- Script select2 - jenis_produk -->
        @script
        <script>
            document.addEventListener("livewire:navigated", () => {
                $(document).ready(function() {
                    $("#jenis_produk").select2({
                        placeholder: "Pilih Jenis Produk",
                        allowClear: true
                    }).on('change', function(e) {
                        @this.set('jenis_produk', e.target.value);
                    });

                    if (@this.jenis_produk) {
                        // Menyinkronkan Select2 dengan nilai jenis_produk yang sudah ada
                        $("#jenis_produk").val(@this.jenis_produk).trigger('change');
                    }
                })
            }, { once: true });
        </script>
        @endscript

        <script>
            // Fungsi untuk cek apakah ada pilihan yang dipilih
            function checkSelection() {
                const selectElement = document.getElementById("jenis_produk");
                const buttonElement = document.getElementById("next");
        
                if (selectElement.value !== "") {
                    buttonElement.disabled = false;  // Aktifkan tombol jika ada pilihan
                } else {
                    buttonElement.disabled = true;   // Nonaktifkan tombol jika tidak ada pilihan
                }
            }
        </script>

        <!-- Script component dialog - material tailwind -->
        {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js data-navigate-track"></script> --}}
        <script>
            document.addEventListener("livewire:navigated", () => {
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
            }, { once: true });
        </script>
    @endsection
</div>
