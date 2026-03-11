@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800  text-white overflow-hidden">
    <!-- Background Image with Opacity -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/water monitoring.png') }}" 
             alt="Water Monitoring" 
             class="w-full h-full object-cover opacity-60">
    </div>
    
    <!-- Pattern Overlay -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="max-w-3xl" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Monitoring Kualitas Air Real-Time untuk Bisnis Anda
            </h1>
            <p class="text-lg md:text-xl mb-8 text-blue-100">
                Sistem IoT yang membantu Anda memantau pH, suhu, dan kualitas air secara otomatis. Hemat waktu, tingkatkan produktivitas.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('kontak') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition text-center">
                    Konsultasi Gratis
                </a>
                <a href="{{ route('portfolio') }}" class="inline-block border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/10 transition text-center">
                    Lihat Project Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div data-aos="fade-up">
                <x-stat-card number="30+" label="Project Selesai" icon="fa-check-circle" />
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <x-stat-card number="100+" label="Sensor Terpasang" icon="fa-microchip" />
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <x-stat-card number="30+" label="Klien Puas" icon="fa-smile" />
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <x-stat-card number="24/7" label="Monitoring" icon="fa-clock" />
            </div>
        </div>
    </div>
</section>

<!-- Layanan Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Layanan Kami</h2>
            <p class="text-xl text-gray-600">Solusi lengkap untuk kebutuhan monitoring air Anda</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition" data-aos="fade-up">
                <div class="h-48 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/kit.png') }}" alt="Monitoring Kualitas Air" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Monitoring Kualitas Air</h3>
                    <p class="text-gray-600 mb-4">Pantau pH, suhu, kekeruhan, dan parameter kualitas air lainnya secara real-time.</p>
                    <a href="{{ route('layanan') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/level.png') }}" alt="Monitoring Level Air" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Monitoring Level Air</h3>
                    <p class="text-gray-600 mb-4">Deteksi potensi banjir dengan sensor ultrasonik dan notifikasi dini.</p>
                    <a href="{{ route('layanan') }}" class="text-green-600 font-semibold hover:text-green-700">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/analitik.png') }}" alt="Dashboard Custom" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Dashboard Custom</h3>
                    <p class="text-gray-600 mb-4">Dashboard interaktif dengan grafik real-time dan laporan otomatis.</p>
                    <a href="{{ route('layanan') }}" class="text-purple-600 font-semibold hover:text-purple-700">
                        Selengkapnya →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600">Keunggulan yang membedakan kami dari yang lain</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-microchip text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Teknologi Terkini</h3>
                        <p class="text-gray-600">Menggunakan sensor IoT terkini dengan akurasi tinggi dan kalibrasi otomatis.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-clock text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Real-time Monitoring</h3>
                        <p class="text-gray-600">Data diperbarui setiap detik, dapat diakses dari mana saja via smartphone.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-bell text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Notifikasi Cerdas</h3>
                        <p class="text-gray-600">Dapatkan notifikasi WhatsApp/Email jika terjadi anomali atau kondisi darurat.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-headset text-2xl text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Support 24/7</h3>
                        <p class="text-gray-600">Tim teknis siap membantu kapanpun Anda membutuhkan.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative" data-aos="fade-left">
                <img src="{{ asset('images/about.png') }}" 
                     alt="IoT Monitoring" 
                     class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                        <span class="font-semibold">Online 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-500 text-white">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
        <p class="text-xl mb-8 text-blue-100">Konsultasikan kebutuhan monitoring air Anda dengan tim kami</p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Apa Kata Klien Kami</h2>
            <p class="text-xl text-gray-600">Testimoni dari mereka yang telah menggunakan layanan kami</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                <div class="flex items-center mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Sistem monitoringnya sangat membantu kami mengelola kualitas air tambak udang. Hasil panen meningkat 30%!"</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <h4 class="font-bold">Budi Santoso</h4>
                        <p class="text-sm text-gray-500">Pemilik Tambak Udang</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Sistem deteksi banjirnya akurat. Kami bisa melakukan evakuasi dini sebelum air naik."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <h4 class="font-bold">Siti Rahayu</h4>
                        <p class="text-sm text-gray-500">Kepala Desa</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Dashboard-nya user-friendly. Tim teknisnya responsif dan profesional."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <h4 class="font-bold">Ahmad Hidayat</h4>
                        <p class="text-sm text-gray-500">Manager Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="text-gray-600 font-medium text-lg">Dipercaya oleh perusahaan-perusahaan terkemuka</p>
        </div>
        
        <!-- Marquee Container -->
        <div class="overflow-hidden bg-transparent rounded-lg ">
            <style>
                @keyframes marquee {
                    0% {
                        transform: translateX(100%);
                    }
                    100% {
                        transform: translateX(-100%);
                    }
                }
                
                .marquee {
                    display: flex;
                    animation: marquee 30s linear infinite;
                    gap: 2rem;
                }
                
                .marquee:hover {
                    animation-play-state: paused;
                }
                
                .marquee-item {
                    flex-shrink: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 1.5rem;
                    min-width: 100px;
                }
            </style>
            
            <div class="marquee">
                <div class="marquee-item">
                    <img src="{{ asset('images/pertamina.png') }}" alt="Pertamina" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/pln.png') }}" alt="PLN" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/telkom.png') }}" alt="Telkom" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/aqua.png') }}" alt="Aqua" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/indofood.png') }}" alt="Indofood" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                
                <!-- Duplicate untuk seamless loop -->
                <div class="marquee-item">
                    <img src="{{ asset('images/pertamina.png') }}" alt="Pertamina" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/pln.png') }}" alt="PLN" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/telkom.png') }}" alt="Telkom" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/aqua.png') }}" alt="Aqua" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
                <div class="marquee-item">
                    <img src="{{ asset('images/indofood.png') }}" alt="Indofood" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
