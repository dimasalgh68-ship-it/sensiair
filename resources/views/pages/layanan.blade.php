@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="video-bg text-white py-32 overflow-hidden relative">
   <video autoplay muted loop playsinline>
        <source src="{{ asset('videos/laut3.mp4') }}" type="video/mp4">
    </video>
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Layanan Kami</h1>
        <p class="text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Solusi lengkap monitoring air untuk berbagai kebutuhan
        </p>
    </div>
</section>

<!-- Detail Layanan -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Layanan 1 -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24" data-aos="fade-right">
            <div>
                <div class="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-tint text-3xl text-blue-600"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Monitoring Kualitas Air</h2>
                <p class="text-gray-600 mb-6 text-lg">
                    Pantau berbagai parameter kualitas air secara real-time dengan akurasi tinggi:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>pH Level:</strong> Monitoring tingkat keasaman air (0-14 pH)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Suhu:</strong> Pantau temperatur air dengan sensor digital</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Turbidity:</strong> Ukur tingkat kekeruhan air</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>DO (Dissolved Oxygen):</strong> Monitor kadar oksigen terlarut</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ route('kontak') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('images/layanan.png') }}" 
                     alt="Water Quality" 
                     class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">±0.01</div>
                        <div class="text-sm text-gray-600">Akurasi pH</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Layanan 2 -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24" data-aos="fade-left">
            <div class="order-2 md:order-1 relative">
                <img src="{{ asset('images/level.png') }}" 
                     alt="Water Level" 
                     class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-green-600">±1mm</div>
                        <div class="text-sm text-gray-600">Akurasi Level</div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <div class="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-3xl text-green-600"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Monitoring Level Air</h2>
                <p class="text-gray-600 mb-6 text-lg">
                    Sistem deteksi dini untuk potensi banjir dan manajemen air:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Sensor Ultrasonik:</strong> Akurasi tinggi untuk pengukuran jarak</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Early Warning System:</strong> Notifikasi otomatis saat level kritis</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Data Historis:</strong> Track perubahan level air dari waktu ke waktu</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Prediksi Trend:</strong> Analisis pola untuk prediksi kenaikan air</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ route('kontak') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Layanan 3 -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24" data-aos="fade-right">
            <div>
                <div class="bg-purple-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-dashboard text-3xl text-purple-600"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Dashboard & Analitik</h2>
                <p class="text-gray-600 mb-6 text-lg">
                    Dashboard interaktif untuk visualisasi data yang mudah dipahami:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Real-time Charts:</strong> Grafik live update setiap detik</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Export Data:</strong> Download laporan dalam format Excel/PDF</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Multi-device:</strong> Akses dari smartphone, tablet, atau desktop</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                        <span><strong>Custom Alerts:</strong> Atur batas threshold sesuai kebutuhan</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ route('kontak') }}" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('images/analitik.png') }}" 
                     alt="Dashboard" 
                     class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-purple-600">Live</div>
                        <div class="text-sm text-gray-600">Update 1 detik</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script>
const video = document.getElementById("bgVideo");

video.addEventListener("timeupdate", function () {
    if (video.currentTime >= 30) {
        video.pause(); 
    }
});
</script>

@endsection