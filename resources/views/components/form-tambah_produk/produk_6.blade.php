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
     <label class="block mb-1 text-sm text-slate-600" for="saran_penggunaan">Saran Penggunaan</label>
     <textarea wire:model="saran_penggunaan" name="saran_penggunaan" id="saran_penggunaan" rows="4" autocomplete="on" placeholder="cth. Gunakan di suhu ruangan"
          class="block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0"></textarea>
     @error('saran_penggunaan')
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
          <label class="block mb-1 text-sm text-slate-600" for="sertifikat_halal">Sertifikat Halal</label>
          <select wire:model="sertifikat_halal" id="sertifikat_halal" name="sertifikat_halal"
               class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option></option>
               <option value="1">Sertifikat Halal 1</option>
               <option value="2">Sertifikat Halal 2</option>
          </select>
     </div>
     @error('sertifikat_halal')
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
          <label class="block mb-1 text-sm text-slate-600" for="sertifikat_bpom">Sertifikat BPOM</label>
          <select wire:model="sertifikat_bpom" id="sertifikat_bpom" name="sertifikat_bpom"
               class="form-select block w-full !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option></option>
               <option value="1">Sertifikat BPOM 1</option>
               <option value="2">Sertifikat BPOM 2</option>
          </select>
     </div>
     @error('sertifikat_bpom')
          <p class="flex items-center mt-2 text-xs text-[red]">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1.5">
               <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
               </svg>
               {{ $message }}
          </p>
     @enderror
</div>

<div class="relative">
     <label class="block mb-1 text-sm text-slate-600" for="kapasitas_produksi">Kapasitas Produksi</label>
     <div class="flex flex-wrap">
          <input wire:model="kapasitas_produksi" type="text" name="kapasitas_produksi" id="kapasitas_produksi" placeholder="cth. 100" autocomplete="on" oninput="formatNumber(this)"
               class="block w-3/5 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border !border-slate-200 !rounded-l-md !cursor-pointer !transition !duration-300 !ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
     
          <select wire:model="satuan_produksi" id="satuan_produksi" class="block w-2/5 !bg-white placeholder:!text-slate-400 !text-sm !text-slate-700 !border border-slate-200 !rounded-r-md !cursor-pointer !transition !duration-300 ease focus:!outline-none focus:!border-slate-400 !shadow-sm focus:!shadow focus:!ring-0">
               <option value="hari" selected>per Hari</option>
               <option value="minggu">per Minggu</option>
               <option value="bulan">per Bulan</option>
               <option value="tahun">per Tahun</option>
          </select>
     </div>
     @error('kapasitas_produksi')
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
               $("#sertifikat_halal").select2({
                    placeholder: "Pilih Sertifikat Halal",
                    allowClear: true
               }).on('change', function(e) {
                    @this.set('sertifikat_halal', e.target.value);
               });
               if (@this.sertifikat_halal) {
                    $("#sertifikat_halal").val(@this.sertifikat_halal).trigger('change');
               }
          
               
               $("#sertifikat_bpom").select2({
                    placeholder: "Pilih Sertifikat BPOM",
                    allowClear: true
               }).on('change', function(e) {
                    @this.set('sertifikat_bpom', e.target.value);
               });
               if (@this.sertifikat_bpom) {
                    $("#sertifikat_bpom").val(@this.sertifikat_bpom).trigger('change');
               }
            });
     </script>
     @endscript
@endsection