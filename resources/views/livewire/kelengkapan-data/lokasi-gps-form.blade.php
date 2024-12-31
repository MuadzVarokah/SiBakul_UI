<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="" data-navigate-once></script>
    @endsection

    @section('styles')
        @parent
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    @endsection

    <x-sub-navbar href="javascript:history.back()">Form Lokasi GPS</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form wire:submit.prevent="simpan" class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center">
                    <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">

                        <style>
                            .required:after {
                                content: "*";
                                color: red;
                                font-weight: 900;
                            }
                        </style>

                        <!-- Input Latitude & Longitude -->
                        <div class="relative">
                            <label class="block mb-1 text-sm text-slate-600 required">Peta</label>
                            <div id="map" class="w-full h-[calc(100vh-18.75rem)] z-0 rounded-md shadow"></div>
                            <div class="grid grid-cols-2 gap-1 mt-1">
                                <div class="relative flex flex-wrap">
                                    <div class="absolute top-2 left-0 flex items-center pl-3">
                                        <Span class="w-5 self-start font-medium text-sm text-gray-500">Lat</Span>
                                        <div class="h-6 border-l border-slate-200 ml-2"></div>
                                    </div>
                                    <input wire:model="latitude" type="text" name="latitude" id="latitude" placeholder="cth. -7,8013966" autocomplete="on" inputmode="decimal" required
                                        class="block w-full !pl-12 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                </div>
                      
                                <div class="relative flex flex-wrap">
                                    <div class="absolute top-2 left-0 flex items-center pl-3">
                                        <Span class="w-6 self-start font-medium text-sm text-gray-500">Lng</Span>
                                        <div class="h-6 border-l border-slate-200 ml-2"></div>
                                    </div>
                                    <input wire:model="longitude" type="text" name="longitude" id="longitude" placeholder="cth. 110,3621892" autocomplete="on" inputmode="decimal" required
                                        class="block w-full !pl-[50px] !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
                                </div>

                                <div class="relative col-span-2 flex flex-wrap">
                                    <button type="button" id="get-location-btn"
                                        class="w-full px-2.5 py-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-600 active:scale-90 transition-transform dark:bg-green-600 dark:hover:bg-green-700">
                                        <i class="fa-solid fa-map-location-dot"></i>&nbsp;&nbsp;Dapatkan lokasi terkini
                                    </button>
                                </div>
                           </div>
                            @error('latitude')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                            @error('longitude')
                                <p class="flex items-center mt-2 text-xs text-[red]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
                            <div class="grid grid-cols-2 gap-1 mt-2">
                                <a href="javascript:history.back()" type="button"
                                    class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    Simpan
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('scripts')
        @parent
        <!-- Peta -->
        @script()
        <script>
            $(document).ready(function() {
                //Setting map
                if (@this.latitude && @this.longitude) {
                    var map = L.map('map').setView([@this.latitude, @this.longitude], 15);
                } else {
                    var map = L.map('map').setView([-7.8013966,110.3621892], 12.5);
                }
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                //Custom Marker
                var iconOptions = {
                    iconUrl: "{!! asset('public/images/location-pin.png') !!}",
                    iconSize: [38,50],
                }
                // var customIcon = L.icon(iconOptions);
                var markerOptions = {
                    // icon: customIcon,
                    draggable: true,
                };

                //on Click function
                var marker = null
                map.on("click", function(e){
                    if (marker) {
                        map.removeLayer(marker);
                    }
                    marker = L.marker([e.latlng.lat, e.latlng.lng], markerOptions).addTo(map);
                    @this.latitude = e.latlng.lat;
                    @this.longitude = e.latlng.lng;
                });

                //if default value lat & lng has set, place marker
                if (@this.latitude && @this.longitude) {
                    marker = L.marker([@this.latitude, @this.longitude], markerOptions).addTo(map);
                }

                //if value lat & lng set on form, place marker
                $('#latitude, #longitude').on('input',function(e){
                    if (@this.latitude && @this.longitude) {
                        map.panTo(new L.LatLng(@this.latitude, @this.longitude));
                        if (marker) {
                            map.removeLayer(marker);
                        }
                        marker = L.marker([@this.latitude, @this.longitude], markerOptions).addTo(map);
                    } else if (!@this.latitude || !@this.longitude) {
                        if (marker) {
                            map.removeLayer(marker);
                        }
                    }
                });

                // Handle get-location-btn click
                $('#get-location-btn').on('click', function() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            // Get user's latitude and longitude
                            @this.latitude = position.coords.latitude;
                            @this.longitude = position.coords.longitude;

                            // Pan the map to the new coordinates and place the marker
                            map.setView([@this.latitude, @this.longitude], 15);
                            if (marker) {
                                map.removeLayer(marker);
                            }
                            marker = L.marker([@this.latitude, @this.longitude], markerOptions).addTo(map);
                        }, function(error) {
                            alert('Geolocation error: ' + error.message);
                        });
                    } else {
                        alert("Geolocation is not supported by this browser.");
                    }
                });
            });
        </script>
        @endscript
    @endsection
</div>