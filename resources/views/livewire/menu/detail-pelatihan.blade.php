<div>
    <x-sub-navbar href="javascript:history.back()">Detail Pelatihan</x-sub-navbar>

    <!-- Konten -->
    <div class="w-full max-w-screen-sm mt-14 pb-8 min-h-[calc(100vh-3.5rem)] bg-slate-300">
        <div class="relative w-full h-full">
            <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="w-auto h-auto max-w-full max-h-full" alt="...">
        </div>

        <!-- Section utama -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <p class="text-2xl font-semibold text-green-600 leading-none">Nama Pelatihan - Lorem ipsum dolor sit amet.</p>
            {{-- <p class="w-full font-normal text-justify text-lg line-clamp-2 leading-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> --}}
            <hr class="mt-2" style="border-top: 2px solid #cbd5e1">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-full font-semibold text-justify text-lg">Waktu Pelatihan</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">
                    13 April 2024 - 15 April 2024
                    <br>
                    08:00 - 15:00
                </p>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Pemateri -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Pemateri</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">Nama Pemateri</p>
            </div>

            <hr style="border-top: 2px solid #cbd5e1">

            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Kontak Pemateri</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600">+6281234567890 (WA)</p>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Materi -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Materi Pelatihan</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, earum maxime ad animi maiores quae?
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text">Lihat Selengkapnya</p> 
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-4 bg-transparent"></div>

        <!-- Section Materi -->
        <div class="w-full p-4 grid grid-cols-1 gap-2 bg-slate-100">
            <div class="w-full flex flex-wrap justify-between items-center">
                <p class="w-fit font-semibold text-justify text-lg">Syarat Pelatihan</p>
                <p class="w-fit font-normal text-justify text-base text-slate-600 content-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores blanditiis dolor, officiis ad consequatur, labore nulla, nisi quos libero alias nihil. Maxime ipsa assumenda temporibus vel quo facere ut est id qui quam numquam error nihil ducimus dolor facilis placeat distinctio aut, magni vero velit, repellat iusto. Consequuntur, amet libero?
                </p>
                <p class="w-fit font-semibold text-justify text-base text-green-600 cursor-pointer toggle-text">Lihat Selengkapnya</p> 
            </div>
        </div>

        <script>
            // Fungsi untuk memeriksa apakah teks lebih dari 3 baris
            function checkTextLength(textElement) {
                const toggleText = textElement.nextElementSibling; // Tombol toggle setelah elemen teks
        
                // Mengukur tinggi elemen dan membandingkan dengan tinggi tiga baris
                const lineHeight = parseInt(window.getComputedStyle(textElement).lineHeight, 10);
                const maxHeight = lineHeight * 3; // Untuk 3 baris
                const currentHeight = textElement.offsetHeight;
        
                if (currentHeight > maxHeight) {
                    textElement.classList.add('line-clamp-3'); // Membatasi hanya 3 baris
                    toggleText.style.display = 'block'; // Menampilkan tombol "Lihat Selengkapnya"
                } else {
                    toggleText.style.display = 'none'; // Menyembunyikan tombol jika teks lebih pendek dari 3 baris
                }
            }
        
            // Fungsi untuk toggle tampilan teks
            function toggleText(button) {
                const textElement = button.previousElementSibling; // Elemen teks sebelumnya
        
                if (textElement.classList.contains('line-clamp-3')) {
                    // Tampilkan teks penuh
                    textElement.classList.remove('line-clamp-3');
                    button.textContent = 'Lihat Lebih Sedikit';
                } else {
                    // Potong teks setelah 3 baris
                    textElement.classList.add('line-clamp-3');
                    button.textContent = 'Lihat Selengkapnya';
                }
            }
        
            // Menambahkan event listener pada seluruh elemen dengan kelas 'content-text'
            document.addEventListener('DOMContentLoaded', () => {
                const contentText = document.querySelectorAll('.content-text');
                contentText.forEach(checkTextLength); // Memeriksa panjang teks untuk setiap deskripsi
        
                // Menambahkan event listener pada tombol toggle
                const toggleButtons = document.querySelectorAll('.toggle-text');
                toggleButtons.forEach(button => {
                    button.addEventListener('click', () => toggleText(button));
                });
            });
        </script>
    </div>
</div>