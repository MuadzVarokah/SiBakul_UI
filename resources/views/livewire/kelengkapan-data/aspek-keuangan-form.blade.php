<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <x-sub-navbar href="javascript:history.back()">Form Aspek Keuangan</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="w-full px-2 pt-2 pb-4">
            <div class="relative flex flex-col items-center bg-transparent">
                <form class="mt-2 mb-2 w-11/12 max-w-screen-md justify-items-center">
                    @csrf
                    <div class="flex flex-col gap-4 w-full max-w-md min-w-[200px]">

                        <style>
                            .required:after {
                                content: "*";
                                color: red;
                                font-weight: 900;
                            }
                        </style>

                        

                        {{-- <div class="relative mt-2">
                            <span class="text-gray-500 text-sm">Tanda bintang (<span
                                    class="text-[red] font-black">*</span>) berarti <b>wajib diisi</b></span>
                            <div class="grid grid-cols-2 gap-1 mt-2">
                                <a wire:navigate:hover href="javascript:history.back()" type="button"
                                    class="rounded-md !bg-slate-200 border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:!bg-slate-400 hover:!text-slate-50 focus:!bg-slate-400 focus:!text-slate-50 active:!bg-slate-400 active:!text-slate-50 active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    Simpan
                                </button>
                            </div>
                        </div> --}}

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
