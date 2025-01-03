<div>
    <x-sub-navbar href="javascript:history.back()">Kelengkapan Data</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="w-full">
                <div class="relative right-0">
                    <ul class="relative flex flex-wrap px-1.5 py-1.5 rounded-t-md bg-slate-100" data-tabs="tabs"
                        role="list">
                        <li class="z-20 flex-auto text-center">
                            <a class="z-20 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-green-600 font-semibold bg-inherit"
                                data-tab-target="" role="tab" aria-selected="true" aria-controls="dataUsaha">
                                Data Usaha
                            </a>
                        </li>
                        <li class="z-20 flex-auto text-center">
                            <a class="z-20 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-green-600 font-semibold bg-inherit"
                                data-tab-target="" role="tab" aria-selected="false" aria-controls="perkembangan">
                                Data Perkembangan
                            </a>
                        </li>
                    </ul>

                    <div data-tab-content="" class="px-1.5 py-2">
                        <div id="dataUsaha" role="tabpanel">
                            <div class="w-[calc(100% + .75rem)] rounded-b-md bg-slate-100 px-2 py-2 -mt-2 -mx-1.5">
                                <div class="w-full bg-white rounded-md dark:bg-gray-700 shadow">
                                    @php
                                        $warnaPersenDataUsaha = ($persenDataUsaha > 0) ? "text-green-100" : "text-green-500";
                                    @endphp
                                    <div class="bg-green-500 text-xs font-medium {{ $warnaPersenDataUsaha }} text-center py-0.5 leading-none rounded-md shadow"
                                        style="width: {{ $persenDataUsaha }}%">&nbsp;{{ $persenDataUsaha }}%&nbsp;</div>
                                </div>
                            </div>
                            <div class="w-full px-4 pt-4">
                                <ol
                                    class="relative text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                    @foreach ($dataUsaha as $keyUsaha => $valueUsaha)
                                        <a wire:navigate href="{{ $valueUsaha->url }}">
                                            @if ($loop->last)
                                                <li class="ms-6">
                                                @else
                                                <li class="mb-4 ms-6">
                                            @endif
                                            @if ($valueUsaha->is_done == 'false')
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                                    {!! $valueUsaha->icon !!}
                                                </span>
                                            @else
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                    <i
                                                        class="fa-solid fa-check w-3.5 h-3.5 text-green-500 dark:text-green-400"></i>
                                                </span>
                                            @endif
                                            <h3 class="font-medium leading-tight">{{ $valueUsaha->menu }}</h3>
                                            <p class="text-xs text-green-500">Lihat detail</p>
                                            </li>
                                        </a>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="perkembangan" role="tabpanel">
                            <div class="w-[calc(100% + .75rem)] rounded-b-md bg-slate-100 px-2 py-2 -mt-2 -mx-1.5">
                                <div class="w-full bg-white rounded-md dark:bg-gray-700 shadow">
                                    @php
                                        $warnaPersenPerkembangan = ($persenDataPerkembangan > 0) ? "text-green-100" : "text-green-500";
                                    @endphp
                                    <div class="bg-green-500 text-xs font-medium {{ $warnaPersenPerkembangan }} text-center py-0.5 leading-none rounded-md shadow"
                                        style="width: {{ $persenDataPerkembangan }}%">&nbsp;{{ $persenDataPerkembangan }}%&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 pt-4">
                                <ol
                                    class="relative text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                    @foreach ($dataPerkembangan as $keyPerkembangan => $valuePerkembangan)
                                        <a wire:navigate href="{{ $valuePerkembangan->url }}">
                                            @if ($loop->last)
                                                <li class="ms-6">
                                                @else
                                                <li class="mb-4 ms-6">
                                            @endif
                                            @if ($valuePerkembangan->is_done == 'false')
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                                    {!! $valuePerkembangan->icon !!}
                                                </span>
                                            @else
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                    <i
                                                        class="fa-solid fa-check w-3.5 h-3.5 text-green-500 dark:text-green-400"></i>
                                                </span>
                                            @endif
                                            <h3 class="font-medium leading-tight">{{ $valuePerkembangan->menu }}</h3>
                                            <p class="text-xs text-green-500">Lihat detail</p>
                                            </li>
                                        </a>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        @parent
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
    @endsection
</div>
