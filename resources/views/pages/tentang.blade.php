@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="bg-linear-to-r from-blue-600 to-indigo-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Tentang Kami</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Mengenal lebih jauh tentang SensiAIR dan misi kami
        </p>
    </div>
</section>

<!-- Tentang Perusahaan -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Siapa Kami?</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    SensiAIR adalah perusahaan teknologi yang berfokus pada solusi monitoring air berbasis IoT. Kami berkomitmen untuk membantu bisnis dan organisasi mengelola sumber daya air dengan lebih efisien dan berkelanjutan.
                </p>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Dengan pengalaman lebih dari 5 tahun di industri IoT dan monitoring, kami telah membantu lebih dari 50 klien di berbagai sektor termasuk pertanian, industri, dan pemerintahan.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Tim kami terdiri dari engineer, software developer, dan specialist yang berpengalaman dalam mengembangkan solusi monitoring yang reliable dan user-friendly.
                </p>
            </div>
            <div data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Tentang SensiAIR" 
                     class="rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Misi & Visi -->
        <div class="grid md:grid-cols-2 gap-12 mb-20">
            <div class="bg-blue-50 p-8 rounded-lg" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Misi Kami</h3>
                <p class="text-gray-700 leading-relaxed">
                    Menyediakan solusi monitoring air yang inovatif, terjangkau, dan mudah digunakan untuk membantu setiap organisasi mengelola sumber daya air dengan lebih baik dan berkelanjutan.
                </p>
            </div>
            <div class="bg-green-50 p-8 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-bold mb-4 text-green-600">Visi Kami</h3>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi pemimpin dalam solusi IoT monitoring air di Asia Tenggara, dengan teknologi terdepan dan layanan pelanggan yang terbaik.
                </p>
            </div>
        </div>

        <!-- Nilai-Nilai -->
        <div data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-12 text-center">Nilai-Nilai Kami</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Inovasi</h3>
                    <p class="text-gray-600 text-sm">Terus berinovasi untuk memberikan solusi terbaik</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-3xl text-green-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Integritas</h3>
                    <p class="text-gray-600 text-sm">Jujur dan transparan dalam setiap transaksi</p>
                </div>
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Kolaborasi</h3>
                    <p class="text-gray-600 text-sm">Bekerja sama untuk mencapai tujuan bersama</p>
                </div>
                <div class="text-center">
                    <div class="bg-red-100 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-3xl text-red-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Keberlanjutan</h3>
                    <p class="text-gray-600 text-sm">Peduli terhadap lingkungan dan masa depan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pencapaian -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Pencapaian Kami</h2>
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div data-aos="fade-up">
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <p class="text-gray-600">Project Selesai</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                <p class="text-gray-600">Sensor Terpasang</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl font-bold text-blue-600 mb-2">30+</div>
                <p class="text-gray-600">Klien Puas</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl font-bold text-blue-600 mb-2">5+</div>
                <p class="text-gray-600">Tahun Pengalaman</p>
            </div>
        </div>
    </div>
</section>

<!-- Tim -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Tim Kami</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Tim Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold mb-1">Budi Santoso</h3>
                <p class="text-blue-600 font-semibold mb-2">Founder & CEO</p>
                <p class="text-gray-600 text-sm">Engineer berpengalaman dengan passion di IoT dan sustainability</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Tim Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold mb-1">Siti Rahayu</h3>
                <p class="text-blue-600 font-semibold mb-2">CTO</p>
                <p class="text-gray-600 text-sm">Software architect dengan expertise di cloud dan IoT platform</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Tim Member" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold mb-1">Ahmad Hidayat</h3>
                <p class="text-blue-600 font-semibold mb-2">Head of Operations</p>
                <p class="text-gray-600 text-sm">Profesional berpengalaman dalam project management dan customer success</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ingin Bekerja Sama?</h2>
        <p class="text-xl mb-8 text-blue-100">Hubungi kami untuk diskusi lebih lanjut tentang solusi monitoring air</p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
            Hubungi Kami
        </a>
    </div>
</section>

@endsection
