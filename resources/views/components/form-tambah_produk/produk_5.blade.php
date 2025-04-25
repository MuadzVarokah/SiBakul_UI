{{-- @section('head-scripts')
     @parent
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" data-navigate-once></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" data-navigate-once></script>
@endsection

@section('styles')
     @parent
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endsection --}}

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600">Menggunakan Produk Organik</label>
     <div class="flex flex-wrap gap-2">
          <div class="flex flex-wrap items-center w-full">
               <input wire:model="produk_organik" id="produk_organik-1" type="radio" value="iya" name="produk_organik"
                    class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-green-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="produk_organik-1" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Iya</label>
          </div>
          <div class="flex flex-wrap items-center w-full">
               <input wire:model="produk_organik" id="produk_organik-2" type="radio" value="tidak" name="produk_organik"
                    class="w-4 h-4 !text-slate-600 bg-white border-gray-300 focus:!ring-green-600 dark:focus:!ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
               <label for="produk_organik-2" class="ms-2 text-sm text-slate-600 dark:text-slate-600 leading-none">Tidak</label>
          </div>
     </div>
     @error('produk_organik')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div class="relative">
     <div wire:ignore class="relative">
          <label class="block mb-1 text-sm text-slate-600" for="sertifikat_organik">Sertifikat Organik</label>
          <select wire:model="sertifikat_organik" id="sertifikat_organik" name="sertifikat_organik"
               class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option></option>
               <option value="1">Sertifikat Organik 1</option>
               <option value="2">Sertifikat Organik 2</option>
          </select>
     </div>
     @error('sertifikat_organik')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

@section('scripts')
     @parent
     @script()
     <script>
          $(document).ready(function() {
               $("#sertifikat_organik").select2({
                    placeholder: "Pilih Sertifikat Organik",
                    allowClear: true
               }).on('change', function(e) {
                    @this.set('sertifikat_organik', e.target.value);
               });
               if (@this.sertifikat_organik) {
                    $("#sertifikat_organik").val(@this.sertifikat_organik).trigger('change');
               }
          });
     </script>
     @endscript
@endsection