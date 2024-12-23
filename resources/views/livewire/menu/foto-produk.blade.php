<div>
    <x-sub-navbar href="javascript:history.back()">Foto Produk</x-sub-navbar>

    <!-- Konten -->
    <div class="relative w-full max-w-screen-md mt-14 h-[calc(100vh-3.5rem)] bg-slate-100">
        <ul class="sticky top-14 flex flex-wrap p-4 pb-1.5 bg-slate-100 z-20" data-tabs="tabs" role="list">
            <li class="z-20 flex-auto text-center">
                <a class="z-20 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-green-600 font-semibold bg-inherit"
                    data-tab-target="" role="tab" aria-selected="{{ $activeTab === 'tersedia' ? 'true' : 'false' }}" aria-controls="tersedia">
                    Tersedia
                </a>
            </li>
            <li class="z-20 flex-auto text-center">
                <a class="z-20 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                    data-tab-target="" role="tab" aria-selected="{{ $activeTab === 'terdaftar' ? 'true' : 'false' }}" aria-controls="terdaftar">
                    Terdaftar
                </a>
            </li>
            <li class="z-20 flex-auto text-center">
                <a class="z-20 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                    data-tab-target="" role="tab" aria-selected="{{ $activeTab === 'riwayat' ? 'true' : 'false' }}" aria-controls="riwayat">
                    Riwayat
                </a>
            </li>
        </ul>

        <div data-tab-content="">
            <div class="{{ $activeTab === 'tersedia' ? '' : 'hidden opacity-0' }}" id="tersedia" role="tabpanel">
                <div class="relative w-full">
                    <!-- Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <!-- Filter section -->
                        <div class="grid grid-cols-5 gap-1">
                            <div class="col-span-2">
                                <input type="date" name="tanggal_tersedia" id="tanggal_tersedia" autocomplete="on"
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                            
                            <div class="col-span-3">
                                <select id="waktu_tersedia" name="waktu_tersedia" class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option value="">Pilih Waktu Foto</option>
                                    <option value="1">Pagi (09:00 - 12:00)</option>
                                    <option value="2">Siang (13:00 - 15:00)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4 inline-block">
                        <!-- Daftar Foto -->
                        @for ($i = 0; $i < 10; $i++)
                            <a wire:navigate:hover href="{{ route('detailFotoProduk', ['id_foto' => 1]) }}"
                                class="flex flex-wrap items-center justify-center w-full p-2 py-2 mb-4 text-sm border-0 rounded-md bg-white shadow">
    
                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        {{-- <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md"> --}}
                                        <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-icons"></i>
                                        </div>
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-tight">
                                            Foto Produk
                                        </p>
                                        
                                        <div class="w-full flex flex-wrap items-end justify-between">
                                            <div class="grid grid-cols-1">
                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    Pagi (09:00 - 12:00)
                                                </p>

                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    20 Des 2024
                                                </p>
                                            </div>
                                            <span class="w-fit inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-green-900 dark:text-green-300">
                                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                                &nbsp;0 / 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="{{ $activeTab === 'terdaftar' ? '' : 'hidden opacity-0' }}" id="terdaftar" role="tabpanel">
                <div class="relative w-full">
                    <!-- Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <!-- Filter section -->
                        <div class="grid grid-cols-5 gap-1">
                            <div class="col-span-2">
                                <input type="date" name="tanggal_terdaftar" id="tanggal_terdaftar" autocomplete="on"
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                            
                            <div class="col-span-3">
                                <select id="waktu_terdaftar" name="waktu_terdaftar" class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option value="">Pilih Waktu Foto</option>
                                    <option value="1">Pagi (09:00 - 12:00)</option>
                                    <option value="2">Siang (13:00 - 15:00)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4 inline-block">
                        <!-- Daftar Foto -->
                        @for ($j = 0; $j < 10; $j++)
                            <a wire:navigate:hover href="{{ route('detailFotoProduk', ['id_foto' => 2]) }}"
                                class="flex flex-wrap items-center justify-center w-full p-2 mb-4 text-sm border-0 rounded-md bg-white shadow">
    
                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md">
                                        {{-- <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-icons"></i>
                                        </div> --}}
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-tight">
                                            Foto Produk
                                        </p>
                                        
                                        <div class="w-full flex flex-wrap items-end justify-between">
                                            <div class="grid grid-cols-1">
                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    Pagi (09:00 - 12:00)
                                                </p>

                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    20 Des 2024
                                                </p>
                                            </div>
                                            <span class="w-fit inline-flex items-center bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                                <span class="w-2 h-2 me-1 bg-yellow-500 rounded-full"></span>
                                                &nbsp;1 / 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="{{ $activeTab === 'riwayat' ? '' : 'hidden opacity-0' }}" id="riwayat" role="tabpanel">
                <div class="relative w-full">
                    <!-- Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <!-- Filter section -->
                        <div class="grid grid-cols-5 gap-1">
                            <div class="col-span-2">
                                <input type="date" name="tanggal_riwayat" id="tanggal_riwayat" autocomplete="on"
                                    class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                            
                            <div class="col-span-3">
                                <select id="waktu_riwayat" name="waktu_riwayat" class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                    <option value="">Pilih Waktu Foto</option>
                                    <option value="1">Pagi (09:00 - 12:00)</option>
                                    <option value="2">Siang (13:00 - 15:00)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4 inline-block">
                        <!-- Daftar Foto -->
                        @for ($j = 0; $j < 10; $j++)
                            <a wire:navigate:hover href="{{ route('detailFotoProduk', ['id_foto' => 3]) }}"
                                class="flex flex-wrap items-center justify-center w-full p-2 py-2 mb-4 text-sm border-0 rounded-md bg-white shadow">

                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        {{-- <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md"> --}}
                                        <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-icons"></i>
                                        </div>
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-tight">
                                            Foto Produk
                                        </p>
                                        
                                        <div class="w-full flex flex-wrap items-end justify-between">
                                            <div class="grid grid-cols-1">
                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    Pagi (09:00 - 12:00)
                                                </p>

                                                <p class="w-fit text-xs text-slate-600 font-semibold">
                                                    16 Des 2024
                                                </p>
                                            </div>
                                            <span class="w-fit inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 h-fit rounded-full dark:bg-red-900 dark:text-red-300">
                                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                                &nbsp;5 / 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script> --}}
        <script>
            //Tabs
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
                    moving_div.classList.add("z-10", "absolute", "text-slate-700", "rounded-lg", "bg-inherit", "flex-auto", "text-center", "bg-none", "border-0", "block", "shadow");
                    moving_div.setAttribute("moving-tab", "");
                    moving_div.setAttribute("data-tab-target", "");
                    moving_div.appendChild(tab);
                    item.appendChild(moving_div);
                    var list_length = item.getElementsByTagName("li").length;
                    moving_div.style.padding = "0px";
                    moving_div.style.width = item.querySelector("li:nth-child(1)").offsetWidth + "px";
                    moving_div.style.transform = "translate3d(0px, 0px, 0px)";
                    moving_div.style.transition = ".5s ease";

                    // Set initial position based on active tab
                    function updateTabPosition() {
                        var activeTab = item.querySelector("li [aria-selected='true']");
                        var nodes = Array.from(item.querySelectorAll("li"));
                        var index = nodes.indexOf(activeTab.closest('li'));
                        var sum = 0;
                        nodes.slice(0, index).forEach(function(li) {
                            sum += li.offsetWidth;
                        });
                        moving_div.style.transform = "translate3d(" + sum + "px, 0px, 0px)";
                        moving_div.style.width = item.querySelector("li:nth-child(" + (index + 1) + ")").offsetWidth + "px";
                    }

                    // Call updateTabPosition to align moving_div with the active tab
                    updateTabPosition();

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
                                        list_item.firstElementChild.setAttribute("aria-selected", "false")
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
                                        moving_div.style.height = item.querySelector("li:nth-child(" + j + ")").offsetHeight
                                    } else {
                                        for (var j = 1; j <= nodes.indexOf(li); j++) {
                                            sum += item.querySelector("li:nth-child(" + j + ")").offsetWidth
                                        }
                                        moving_div.style.transform = "translate3d(" + sum + "px, 0px, 0px)";
                                        moving_div.style.width = item.querySelector("li:nth-child(" + index + ")").offsetWidth + "px"
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
    </div>
</div>
