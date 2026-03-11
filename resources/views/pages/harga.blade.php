@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="video-bg py-32 overflow-hidden relative">
<video autoplay muted loop playsinline>
        <source src="{{ asset('videos/laut.mp4') }}" type="video/mp4">
    </video>
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white" data-aos="fade-up">Paket Harga</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Pilih paket yang sesuai dengan kebutuhan monitoring air Anda
        </p>
    </div>
</section>

<!-- Pricing -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Basic Plan -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4">Basic</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">Rp 1.000.000</span>
                        <span class="text-gray-500">/bulan</span>
                    </div>
                    <p class="text-gray-600 mb-6">Cocok untuk pemula yang ingin memulai monitoring</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Dashboard Monitoring</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>1 Sensor</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Hosting 1 Tahun</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Data History 30 Hari</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-times mr-3"></i>
                            <span>Notifikasi WhatsApp</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-times mr-3"></i>
                            <span>API Access</span>
                        </li>
                    </ul>
                    <a href="{{ route('kontak') }}" class="block text-center bg-gray-100 text-gray-800 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                        Pilih Paket
                    </a>
                </div>
            </div>
            
            <!-- Pro Plan (Popular) -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 border-2 border-blue-500 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">
                    POPULER
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4">Pro</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">Rp 5.000.000</span>
                        <span class="text-gray-500">/bulan</span>
                    </div>
                    <p class="text-gray-600 mb-6">Solusi lengkap untuk monitoring profesional</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Dashboard + Grafik Interaktif</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>3 Sensor</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Hosting 1 Tahun</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Data History 1 Tahun</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Notifikasi WhatsApp</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Export Data (Excel/PDF)</span>
                        </li>
                    </ul>
                    <a href="{{ route('kontak') }}" class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Pilih Paket
                    </a>
                </div>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4">Enterprise</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">Custom</span>
                    </div>
                    <p class="text-gray-600 mb-6">Solusi khusus untuk kebutuhan skala besar</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Custom IoT System</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Unlimited Sensor</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Integrasi API</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Data History Unlimited</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>Dedicated Support 24/7</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span>On-premise Option</span>
                        </li>
                    </ul>
                    <a href="{{ route('kontak') }}" class="block text-center bg-gray-100 text-gray-800 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            
        </div>
        
        <!-- Note -->
        <p class="text-center text-gray-500 mt-8" data-aos="fade-up">
            * Harga sudah termasuk instalasi dan pelatihan penggunaan
        </p>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Pertanyaan Umum</h2>
            <p class="text-xl text-gray-600">Jawaban untuk pertanyaan yang sering diajakan</p>
        </div>
        
        <div class="space-y-4">
            <div class="border rounded-lg" data-aos="fade-up">
                <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                    <span>Apakah perlu membeli hardware sendiri?</span>
                    <i class="fas fa-chevron-down transition"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4 text-gray-600">
                    Tidak, kami menyediakan paket lengkap termasuk hardware sensor. Tim kami akan melakukan instalasi dan konfigurasi di lokasi Anda.
                </div>
            </div>
            
            <div class="border rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                    <span>Bagaimana dengan maintenance?</span>
                    <i class="fas fa-chevron-down transition"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4 text-gray-600">
                    Kami menyediakan layanan maintenance berkala dan support 24/7 untuk paket Pro dan Enterprise. Untuk paket Basic, support tersedia via email/chat.
                </div>
            </div>
            
            <div class="border rounded-lg" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                    <span>Bisa akses dari smartphone?</span>
                    <i class="fas fa-chevron-down transition"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4 text-gray-600">
                    Ya, dashboard kami responsive dan bisa diakses dari smartphone, tablet, maupun desktop. Tersedia juga PWA yang bisa diinstall seperti aplikasi native.
                </div>
            </div>
            
            <div class="border rounded-lg" data-aos="fade-up" data-aos-delay="300">
                <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                    <span>Ada garansi?</span>
                    <i class="fas fa-chevron-down transition"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4 text-gray-600">
                    Ya, kami memberikan garansi hardware 1 tahun dan garansi software 3 bulan termasuk update fitur.
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // FAQ Toggle
    document.querySelectorAll('.faq-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('fa-chevron-down');
            icon.classList.toggle('fa-chevron-up');
        });
    });
</script>
@endpush
