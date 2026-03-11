@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="bg-gray-500 text-white py-20 ">
     
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Pertanyaan Umum</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Temukan jawaban untuk pertanyaan yang sering diajukan
        </p>
    </div>
</section>

<!-- FAQ Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="space-y-4">
            <!-- Tentang Produk -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Tentang Produk</h2>
                
                <div class="space-y-4">
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Apa itu SensiAIR?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            SensiAIR adalah sistem monitoring air berbasis IoT yang memungkinkan Anda memantau kualitas dan level air secara real-time. Sistem ini dilengkapi dengan sensor canggih dan dashboard interaktif untuk analisis data.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Parameter apa saja yang bisa dimonitor?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Kami bisa memonitor berbagai parameter termasuk pH, suhu, kekeruhan (turbidity), dissolved oxygen (DO), salinitas, dan level air. Parameter dapat disesuaikan dengan kebutuhan Anda.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Berapa akurasi sensor yang digunakan?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Sensor kami memiliki akurasi tinggi: pH ±0.01, Suhu ±0.5°C, Level Air ±1mm. Semua sensor telah dikalibrasi dan teruji di lapangan.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instalasi & Setup -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Instalasi & Setup</h2>
                
                <div class="space-y-4">
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Apakah perlu membeli hardware sendiri?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Tidak, kami menyediakan paket lengkap termasuk hardware sensor, gateway, dan kabel. Tim kami akan melakukan instalasi dan konfigurasi di lokasi Anda.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Berapa lama proses instalasi?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Proses instalasi biasanya memakan waktu 1-2 hari tergantung kompleksitas lokasi. Kami juga akan memberikan pelatihan penggunaan sistem kepada tim Anda.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Apakah perlu koneksi internet khusus?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Sistem kami bisa bekerja dengan koneksi internet standar (minimal 1 Mbps). Kami juga menyediakan opsi backup dengan SIM card untuk area dengan koneksi terbatas.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Penggunaan & Fitur -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Penggunaan & Fitur</h2>
                
                <div class="space-y-4">
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bisa akses dari smartphone?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Ya, dashboard kami fully responsive dan bisa diakses dari smartphone, tablet, maupun desktop. Tersedia juga PWA yang bisa diinstall seperti aplikasi native.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bagaimana cara mendapat notifikasi?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Anda akan mendapat notifikasi via WhatsApp, Email, atau SMS ketika ada parameter yang melampaui batas yang telah ditentukan. Notifikasi dapat dikustomisasi sesuai kebutuhan.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bisa export data?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Ya, Anda bisa export data dalam format Excel, PDF, atau CSV. Data dapat difilter berdasarkan tanggal dan parameter yang diinginkan.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Maintenance & Support -->
            <div class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Maintenance & Support</h2>
                
                <div class="space-y-4">
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bagaimana dengan maintenance?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Kami menyediakan layanan maintenance berkala dan support 24/7 untuk paket Pro dan Enterprise. Untuk paket Basic, support tersedia via email/chat pada jam kerja.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Ada garansi?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Ya, kami memberikan garansi hardware 1 tahun dan garansi software 3 bulan termasuk update fitur. Garansi extended tersedia dengan biaya tambahan.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bagaimana jika ada masalah teknis?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Tim support kami siap membantu via WhatsApp, Email, atau Phone. Untuk paket Pro dan Enterprise, kami menjamin response time maksimal 1 jam.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Harga & Pembayaran -->
            <div data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Harga & Pembayaran</h2>
                
                <div class="space-y-4">
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Apa saja yang termasuk dalam harga?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Harga sudah termasuk hardware sensor, instalasi, konfigurasi, pelatihan, hosting, dan support. Tidak ada biaya tersembunyi.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bagaimana metode pembayaran?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Kami menerima pembayaran via transfer bank, kartu kredit, atau cicilan. Untuk paket tahunan, tersedia diskon khusus hingga 20%.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg">
                        <button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span>Bisa upgrade paket di kemudian hari?</span>
                            <i class="fas fa-chevron-down transition"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4 text-gray-600">
                            Ya, Anda bisa upgrade paket kapan saja. Kami akan menghitung ulang biaya berdasarkan sisa periode kontrak Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Masih ada pertanyaan?</h2>
        <p class="text-xl mb-8 text-blue-100">Hubungi tim kami untuk konsultasi lebih lanjut</p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
            Hubungi Kami
        </a>
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
