@extends('app')

@section('title', 'Beranda - Gereja Bethel Indonesia')

@section('content')
<!-- Hero Section dengan Welcome Home -->
<section class="relative min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 flex items-center justify-center overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20"
         style="background-image: url('{{ asset('images/gereja.png') }}');">
    </div>

    <!-- Welcome Content -->
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        <h1 class="text-5xl md:text-7xl lg:text-8xl mb-6 text-white drop-shadow-lg" style="font-family: 'Great Vibes', cursive;">
            Welcome Home
        </h1>
    </div>
</section>

<!-- Overview Gereja Section -->
<section id="overview" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Tentang Gereja Kami
            </h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Gereja Bethel Indonesia adalah rumah bagi semua orang yang mencari kasih Allah, 
                pertumbuhan rohani, dan persekutuan yang hangat dalam keluarga Kristus.
            </p>
        </div>

        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Visi -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi gereja yang mengasihi Allah dan sesama, serta menjadi berkat 
                    bagi masyarakat melalui pelayanan yang berkualitas.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                    Memberitakan Injil, membangun jemaat yang dewasa dalam iman, 
                    dan melayani masyarakat dengan kasih Kristus.
                </p>
            </div>

            <!-- Nilai -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 md:col-span-2 lg:col-span-1">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Nilai Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kasih, Kebenaran, Kesatuan, dan Pelayanan adalah fondasi 
                    dari setiap kegiatan dan program yang kami lakukan.
                </p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="border-r border-gray-200 last:border-r-0">
                    <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
                    <div class="text-gray-600">Tahun Melayani</div>
                </div>
                <div class="border-r border-gray-200 last:border-r-0">
                    <div class="text-4xl font-bold text-green-600 mb-2">500+</div>
                    <div class="text-gray-600">Jemaat Aktif</div>
                </div>
                <div class="border-r border-gray-200 last:border-r-0">
                    <div class="text-4xl font-bold text-purple-600 mb-2">12</div>
                    <div class="text-gray-600">Pelayanan</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">3</div>
                    <div class="text-gray-600">Cabang Gereja</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jadwal Ibadah Section -->
<section class="py-20 bg-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Jadwal Ibadah</h2>
            <p class="text-xl text-blue-100">Bergabunglah dengan kami dalam ibadah dan persekutuan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Ibadah Minggu Pagi -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20">
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold">Ibadah Minggu Pagi</h3>
                </div>
                <p class="text-blue-100 mb-2">Setiap Minggu</p>
                <p class="text-2xl font-bold text-yellow-400">08:00 - 10:00</p>
                <p class="text-sm text-blue-100 mt-2">Auditorium Utama</p>
            </div>

            <!-- Ibadah Minggu Sore -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20">
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-orange-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold">Ibadah Minggu Sore</h3>
                </div>
                <p class="text-blue-100 mb-2">Setiap Minggu</p>
                <p class="text-2xl font-bold text-orange-400">17:00 - 19:00</p>
                <p class="text-sm text-blue-100 mt-2">Auditorium Utama</p>
            </div>

            <!-- Doa Tengah Minggu -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20">
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold">Doa Tengah Minggu</h3>
                </div>
                <p class="text-blue-100 mb-2">Setiap Rabu</p>
                <p class="text-2xl font-bold text-green-400">19:00 - 20:30</p>
                <p class="text-sm text-blue-100 mt-2">Ruang Doa</p>
            </div>
        </div>

        <div class="text-center mt-12">
            {{-- <a href="{{ route('worship') }}" class="bg-yellow-500 hover:bg-yellow-400 text-black px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105"> --}}
                Lihat Jadwal Lengkap
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-4xl font-bold mb-6">Bergabunglah dengan Keluarga Kami</h2>
        <p class="text-xl mb-8 text-blue-100">
            Rasakan kasih Allah dan temukan keluarga rohani yang akan mendukung 
            perjalanan iman Anda. Kami menantikan kehadiran Anda!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            {{-- <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-colors duration-300"> --}}
                Hubungi Kami
            </a>
            <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-600 transition-colors duration-300">
                Daftar Sebagai Jemaat
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
    }
</style>
@endpush