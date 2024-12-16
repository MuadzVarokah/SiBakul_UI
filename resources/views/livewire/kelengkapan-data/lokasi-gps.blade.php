<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="crossorigin=""></script>

    <x-sub-navbar href="javascript:history.back()">Lokasi GPS</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <p class="w-full font-semibold text-justify text-sm">Peta</p>
                    <div id="map" class="w-full h-[calc(100vh-15rem)] z-0 rounded-md"></div>
                </div>
                @script()
                <script>
                    $(document).ready(function() {
                        var map = L.map('map').setView([@this.latitude,@this.longitude], 15);
                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                        }).addTo(map);
                        //marker
                        var marker =  L.marker([@this.latitude, @this.longitude]).addTo(map);
                    });
                </script>
                @endscript

                <div class="grid grid-cols-2 gap-1">
                    <div class="w-full flex flex-wrap justify-between items-center">
                        <p class="w-full font-semibold text-justify text-sm">Latitude</p>
                        <p class="w-full font-normal text-justify text-base text-slate-600">{{ $latitude }}</p>
                    </div>
        
                    <div class="w-full flex flex-wrap justify-between items-center">
                        <p class="w-full font-semibold text-justify text-sm">Longitude</p>
                        <p class="w-full font-normal text-justify text-base text-slate-600">{{ $longitude }}</p>
                    </div>
                </div>

            </div>

            <div class="w-full mt-4">
                <a wire:navigate:hover href="{{ route('form-lokasiGps') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Lengkapi Data
                </a>
                {{-- <button type="button" class="w-full rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah Data
                </button> --}}
            </div>
        </div>
    </div>
</div>