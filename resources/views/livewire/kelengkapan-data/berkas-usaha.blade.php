<div>
    @section('head-scripts')
        @parent
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
    @endsection

    @section('styles')
        @parent
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css" rel="stylesheet">
    @endsection

    <x-sub-navbar href="javascript:history.back()">Berkas Usaha</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-md mt-14 min-h-[calc(100vh-3.5rem)] bg-slate-100">
        <div class="flex flex-wrap justify-center w-full p-4">
            <div class="w-full grid grid-cols-1 gap-4 py-2 px-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @foreach ($dataBerkas as $keyData => $valueData)
                    <div class="w-full flex flex-wrap justify-between items-center">
                        <p class="w-full font-semibold text-justify text-sm">{{ $valueData->jenis }}</p>
                        <a href="javascript:void(0)" data-dialog-target="dialog-{{ $valueData->id }}" class="w-full font-normal text-justify text-base text-green-600">{{ $valueData->nomor }}</a>
                    </div>

                    <!-- Detail modal -->
                    <div wire:ignore data-dialog-backdrop="dialog-{{ $valueData->id }}" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div data-dialog="dialog-{{ $valueData->id }}"
                            class="relative m-4 p-4 md:w-3/5 lg:w-2/5 min-w-[40%] max-w-[calc(11/12*100%)] rounded-lg bg-white shadow-sm">
                            <!-- Header modal -->
                            <div class="w-full flex flex-wrap justify-between">
                                <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                                    {{ $valueData->jenis }}
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

                            <!-- Content modal -->
                            <div class="relative border-y border-slate-200 leading-normal text-slate-600 font-light">
                                <div class="mt-2 mb-2 w-full max-w-screen-md justify-items-center">
                                    <div class="w-full grid grid-cols-1 gap-4 max-w-full min-w-[200px]">
                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Gambar</p>
                                            <img src="{{ $valueData->file }}" alt="" class="w-full h-auto rounded-md">
                                        </div>
                                        
                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Nomor</p>
                                            <p class="w-full font-normal text-justify text-base text-slate-600">{{ $valueData->nomor }}</p>
                                        </div>

                                        <div class="w-full flex flex-wrap justify-between items-center">
                                            <p class="w-full font-semibold text-justify text-sm">Keterangan</p>
                                            <p class="w-full font-normal text-justify text-base text-slate-600">{{ $valueData->keterangan }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex shrink-0 flex-wrap items-center pt-4 justify-between">
                                <button type="button" data-dialog-close="true" wire:click.prevent="confirmDelete({{ $valueData->id }})"
                                    class="rounded-md bg-red-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    <i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus
                                </button>
                                <a wire:navigate href="{{ route('form-berkasUsaha-edit', ['id_berkas' => $valueData->id ]) }}" type="button" data-dialog-close="true"
                                    class="rounded-md bg-yellow-300 py-2 px-4 border border-transparent text-center text-sm text-slate-600 transition-all shadow-md hover:shadow-lg focus:bg-yellow-400 focus:shadow-none active:bg-yellow-400 hover:bg-yellow-400 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                    <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Ubah
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="w-full mt-4">
                <a wire:navigate href="{{ route('form-berkasUsaha') }}" type="button" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;Tambah Berkas
                </a>
                {{-- <button type="button" data-dialog-target="tambah_berkas-dialog" class="w-full rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none active:scale-90 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;Tambah Berkas
                </button> --}}
            </div>
        </div>
    </div>

    @section('scripts')
        @parent
        @script()
        <script>
            Livewire.on('berkasDeleted', () => {
                Swal.fire({
                    title: 'Dihapus!',
                    text: 'Berkas telah berhasil dihapus.',
                    icon: 'success'
                });
            });

            Livewire.on('confirmDelete', id_berkas => {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Berkas ini akan dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e02424',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal',
                    // cancelButtonColor: '#d33'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $wire.call('deleteBerkas', {id_berkas: id_berkas});
                        // Livewire.dispatch('berkasDeleted');
                    }
                })
            });
        </script>
        @endscript

        <!-- Script sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script>

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