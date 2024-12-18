<div>
    <x-sub-navbar href="javascript:history.back()">Pelatihan</x-sub-navbar>

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
                    data-tab-target="" role="tab" aria-selected="{{ $activeTab === 'sedangDiikuti' ? 'true' : 'false' }}" aria-controls="sedangDiikuti">
                    Sedang Diikuti
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
                    <!-- Search & Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <div class="flex items-center max-w-screen-md mx-auto">
                            <!-- Search form -->
                            <form class="flex w-full">
                                <div class="relative w-full">
                                    <input type="search" id="search_tersedia" class="block px-2.5 py-2 w-full text-sm z-10 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500"
                                        placeholder="Cari..." required />
                                    <button type="submit" class="absolute top-0 end-0 h-full px-2.5 py-2 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </form>
                            <!-- Filter Button -->
                            <button type="button" data-collapse-target="filter_tersedia"
                                class="px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                        </div>
                        
                        <div data-collapse="filter_tersedia" class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="flex flex-wrap justify-between mt-2">
                                <input type="date" name="tanggal_mulai_tersedia" id="tanggal_mulai_tersedia" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                <span class="w-fit content-center"><i class="fa-solid fa-minus"></i></span>
                                <input type="date" name="tanggal_selesai_tersedia" id="tanggal_selesai_tersedia" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <!-- Daftar Pelatihan -->
                        @for ($i = 0; $i < 10; $i++)
                            <a wire:navigate:hover href="{{ route('detailPelatihan', ['id_pelatihan' => 1]) }}"
                                class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 mb-4 text-sm border-0 rounded-md bg-white shadow">
    
                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        {{-- <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md"> --}}
                                        <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-book-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                            Nama Pelatihan - Lorem ipsum dolor sit.
                                        </p>
    
                                        <div class="w-full flex flex-wrap items-end">
                                            <p class="w-full text-xs text-slate-600 font-semibold">08:00 - 15:00</p>
                                            <p class="w-full text-xs text-slate-600 font-semibold">13 Apr 2024 - 15 Apr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="{{ $activeTab === 'sedangDiikuti' ? '' : 'hidden opacity-0' }}" id="sedangDiikuti" role="tabpanel">
                <div class="relative w-full">
                    <!-- Search & Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <div class="flex items-center max-w-screen-md mx-auto">
                            <!-- Search form -->
                            <form class="flex w-full">
                                <div class="relative w-full">
                                    <input type="search" id="search_sedangDiikuti" class="block px-2.5 py-2 w-full text-sm z-10 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500"
                                        placeholder="Cari..." required />
                                    <button type="submit" class="absolute top-0 end-0 h-full px-2.5 py-2 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </form>
                            <!-- Filter Button -->
                            <button type="button" data-collapse-target="filter_sedangDiikuti"
                                class="px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                        </div>
                        
                        <div data-collapse="filter_sedangDiikuti" class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="flex flex-wrap justify-between mt-2">
                                <input type="date" name="tanggal_mulai_sedangDiikuti" id="tanggal_mulai_sedangDiikuti" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                <span class="w-fit content-center"><i class="fa-solid fa-minus"></i></span>
                                <input type="date" name="tanggal_selesai_sedangDiikuti" id="tanggal_selesai_sedangDiikuti" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <!-- Daftar Pelatihan -->
                        @for ($j = 0; $j < 10; $j++)
                            <a wire:navigate:hover href="{{ route('detailPelatihan', ['id_pelatihan' => 2]) }}"
                                class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 mb-4 text-sm border-0 rounded-md bg-white shadow">
    
                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md">
                                        {{-- <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-book-bookmark"></i>
                                        </div> --}}
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                            Nama Pelatihan
                                        </p>
    
                                        <div class="w-full flex flex-wrap items-end">
                                            <p class="w-full text-xs text-slate-600 font-semibold">08:00 - 15:00</p>
                                            <p class="w-full text-xs text-slate-600 font-semibold">13 Apr 2024 - 15 Apr 2024</p>
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
                    <!-- Search & Filter -->
                    <div class="sticky top-[calc(3.5rem+58px)] w-full pb-4 pt-1.5 px-4 bg-slate-100">
                        <div class="flex items-center max-w-screen-md mx-auto">
                            <!-- Search form -->
                            <form class="flex w-full">
                                <div class="relative w-full">
                                    <input type="search" id="search_riwayat" class="block px-2.5 py-2 w-full text-sm z-10 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500"
                                        placeholder="Cari..." required />
                                    <button type="submit" class="absolute top-0 end-0 h-full px-2.5 py-2 text-sm font-medium text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </form>
                            <!-- Filter Button -->
                            <button type="button" data-collapse-target="filter_riwayat"
                                class="px-2.5 py-2 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                        </div>
                        
                        <div data-collapse="filter_riwayat" class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="flex flex-wrap justify-between mt-2">
                                <input type="date" name="tanggal_mulai_riwayat" id="tanggal_mulai_riwayat" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                <span class="w-fit content-center"><i class="fa-solid fa-minus"></i></span>
                                <input type="date" name="tanggal_selesai_riwayat" id="tanggal_selesai_riwayat" autocomplete="on" class="block w-[45%] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <!-- Daftar Pelatihan -->
                        @for ($j = 0; $j < 10; $j++)
                            <a wire:navigate:hover href="{{ route('detailPelatihan', ['id_pelatihan' => 3]) }}"
                                class="flex flex-wrap items-center justify-center w-full pl-2 pr-4 py-2 mb-4 text-sm border-0 rounded-md bg-white shadow">
    
                                <div class="w-full flex flex-wrap">
                                    <div class="w-fit mr-2">
                                        {{-- <img src="https://via.placeholder.com/80" alt="" class="w-16 h-16 rounded-md"> --}}
                                        <div class="w-16 h-16 rounded-md text-4xl text-green-700 border border-green-700 text-center content-center">
                                            <i class="fa-solid fa-book-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="w-[calc(100%-4.5rem)] flex flex-col justify-between">
                                        <p class="w-full font-bold text-justify line-clamp-2 leading-none">
                                            Nama Pelatihan - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, totam?
                                        </p>
    
                                        <div class="w-full flex flex-wrap items-end">
                                            <p class="w-full text-xs text-slate-600 font-semibold">08:00 - 15:00</p>
                                            <p class="w-full text-xs text-slate-600 font-semibold">13 Apr 2024 - 15 Apr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script> --}}
        {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script> --}}
        <script>
            //Collapse
            (function() {
                var triggers = document.querySelectorAll("[data-collapse-target]");
                var collapses = document.querySelectorAll("[data-collapse]");
                if (triggers && collapses) {
                    Array.from(triggers).forEach(function(trigger) {
                        return Array.from(collapses).forEach(function(collapse) {
                            if (trigger.dataset.collapseTarget === collapse.dataset.collapse) {
                                trigger.addEventListener("click", function() {
                                    if (collapse.style.height && collapse.style.height !== "0px") {
                                        collapse.style.height = 0;
                                        collapse.style.overflow = "hidden";
                                        trigger.removeAttribute("open")
                                    } else {
                                        collapse.style.height = "".concat(collapse.children[0]
                                            .clientHeight, "px");
                                        collapse.style.overflow = "visible";
                                        trigger.setAttribute("open", "")
                                    }
                                })
                            }
                        })
                    })
                }
            })();

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
    </div>
</div>
