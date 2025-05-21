<x-layouts.app>
    <div class="min-h-screen bg-red-50 text-gray-800">
        @livewire('navbar')

        <section class="py-12">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-6">Daftar Materi</h2>

                @if ($materis->isEmpty())
                    <p>Tidak ada materi tersedia.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($materis as $materi)
                            <div class="bg-white p-6 rounded-xl shadow">
                                <h3 class="text-lg font-semibold">{{ $materi->judul }}</h3>
                                <p class="text-sm text-gray-600 mb-3">{{ $materi->deskripsi }}</p>
                                <a href="{{ Storage::url($materi->file_path) }}" target="_blank" class="text-blue-600 underline">
                                    Download Materi
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-layouts.app>
