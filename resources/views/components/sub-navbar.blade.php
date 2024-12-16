<!-- Top Navbar -->
<nav class="fixed top-0 z-30 bg-white shadow-md h-14 w-full max-w-screen-md flex items-center justify-between px-4">
     <div class="flex">
         <!-- Back Button -->
         <a wire:navigate:hover href="{{ $href }}" type="button" id="btn-back" class="text-gray-700 hover:text-green-600">
             <i class="fa-solid fa-chevron-left w-7 h-7 content-center text-base text-center"></i>
         </a>

         <!-- Page Name -->
         <span class="text-lg font-normal text-gray-700 ml-2">{{ $slot }}</span>
     </div>

     <!-- Profile Picture -->
     {{-- <div class="flex items-center space-x-2">
         <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
     </div> --}}
 </nav>