<x-layouts.app>
    <div class="min-h-screen bg-blue-50 text-gray-800">
        {{-- Panggil komponen navbar --}}
        @livewire('navbar')

        <!-- Hero Section -->
        <section class="bg-blue-100 py-30">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4">Selamat Datang di E-Learning!</h2>
            </div>
        </section>

        <!-- Menu Utama -->
        <section class="py-12">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/kuis.jpg') }}" alt="Icon Kuis" class="mx-auto mb-4 w-20 h-20">

                    <h3 class="text-xl font-bold mb-2">Kuis</h3>
                    <p class="text-gray-600 mb-4">Latihan soal interaktif untuk siswa.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Buka Kuis</a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/ujian.jpg') }}" alt="Icon Ujian" class="mx-auto mb-4 w-20 h-20">
                    <h3 class="text-xl font-bold mb-2">Ujian </h3>
                    <p class="text-gray-600 mb-4">Kerjakan ujian akhir semester di sini.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Masuk Ujian</a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/absensi.jpg') }}" alt="Icon absensi" class="mx-auto mb-4 w-20 h-20">
                    <h3 class="text-xl font-bold mb-2">Absensi</h3>
                    <p class="text-gray-600 mb-4">Absen harian dengan QR Code.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Isi Absensi</a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/materi.jpg') }}" alt="Icon absensi" class="mx-auto mb-4 w-20 h-20">
                    <h3 class="text-xl font-bold mb-2">Materi</h3>
                    <p class="text-gray-600 mb-4">Materi siswa .</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Materi</a>
            </div>
        </section>
    </div>
</x-layouts.app>
