@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="video-bg text-white py-32 overflow-hidden relative">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('videos/laut2.mp4') }}" type="video/mp4">
    </video>
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Portfolio Project</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Beberapa project yang telah kami kerjakan untuk berbagai klien
        </p>
    </div>
</section>

<!-- Filter -->
<section class="py-8 bg-transparent ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn px-6 py-2 rounded-full bg-blue-600 text-white" data-filter="all">Semua</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 transition" data-filter="tambak">Tambak</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 transition" data-filter="sungai">Sungai</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 transition" data-filter="industri">Industri</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 transition" data-filter="bendungan">Bendungan</button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-16 bg-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1 - Tambak -->
            <div class="portfolio-item bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-category="tambak" data-aos="fade-up">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/tambak.png') }}" 
                         alt="Tambak Udang" 
                         class="w-full h-full object-cover">
                    
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Tambak</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Smart Tambak Udang</h3>
                    <p class="text-gray-600 mb-4">Monitoring kualitas air untuk 10 tambak udang vaname dengan sensor pH, suhu, dan salinitas.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Banyuwangi</span>
                        </div>
                        <a href="https://repository.poltekkpsidoarjo.ac.id/id/eprint/279/" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project1')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 - Sungai -->
            <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300" data-category="sungai" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/kaliciliwung.png') }}" 
                         alt="Monitoring Sungai" 
                         class="w-full h-full object-cover">
                    
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Sungai</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Early Warning System Sungai Ciliwung</h3>
                    <p class="text-gray-600 mb-4">Sistem peringatan dini banjir dengan 5 sensor level air dan notifikasi ke masyarakat.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Jakarta</span>
                        </div>
                        <a href="https://utara.jakarta.go.id/berita/camat-pademangan-monitor-debit-air-kali-kali-anak-ciliwung" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project2')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 - Industri -->
            <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300" data-category="industri" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/pabrik.png') }}" 
                         alt="Industri" 
                         class="w-full h-full object-cover">
                    
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Industri</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Monitoring Limbah Pabrik</h3>
                    <p class="text-gray-600 mb-4">Sistem monitoring kualitas air limbah sebelum dibuang ke sungai sesuai standar baku mutu.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Bekasi</span>
                        </div>
                        <a href="https://sparingklhk.co.id/digital-monitoring-limbah-cair-industri-menjaga-sungai-tetap-bernapas" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project3')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 - Bendungan -->
            <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300" data-category="bendungan" data-aos="fade-up">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/dam.png') }}" 
                         alt="Bendungan" 
                         class="w-full h-full object-cover">
                    
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-semibold">Bendungan</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Smart Dam Monitoring</h3>
                    <p class="text-gray-600 mb-4">Monitoring level air dan pintu air bendungan dengan kontrol otomatis.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Jatiluhur</span>
                        </div>
                        <a href="https://telematica.co.id/our_projects/dam-real-time-monitoring-jatiluhur/" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project4')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 - Tambak -->
            <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300" data-category="tambak" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/keramba.png') }}" 
                         alt="Tambak Ikan" 
                         class="w-full h-full object-cover">
                    
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Tambak</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Keramba Jaring Apung</h3>
                    <p class="text-gray-600 mb-4">Monitoring kualitas air untuk keramba jaring apung ikan nila di Waduk Cirata.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Purwakarta</span>
                        </div>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project5')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6 - Sungai -->
            <div class="portfolio-item bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300" data-category="sungai" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/sungai.png') }}" 
                         alt="Sungai" 
                         class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm">
                        On Progress
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Sungai</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Monitoring Kualitas Air Sungai Code</h3>
                    <p class="text-gray-600 mb-4">Pemasangan 3 sensor untuk monitoring pH dan polusi di Sungai Code Yogyakarta.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>Yogyakarta</span>
                        </div>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700" onclick="openModal('project6')">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Modal Detail Project -->
<div id="projectModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 overflow-y-auto">
    <div class="min-h-screen px-4 text-center">
        <div class="fixed inset-0" onclick="closeModal()"></div>
        <div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 max-w-4xl w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex justify-between items-start">
                    <h3 class="text-2xl font-bold" id="modalTitle">Detail Project</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                <div class="mt-4" id="modalContent">
                    <!-- Content akan diisi via JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Filter dan Modal -->
@push('scripts')
<script>
    // Filter Portfolio
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update button style
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('bg-blue-600', 'text-white');
                b.classList.add('bg-gray-200');
            });
            this.classList.remove('bg-gray-200');
            this.classList.add('bg-blue-600', 'text-white');
            
            // Filter items
            const filter = this.dataset.filter;
            document.querySelectorAll('.portfolio-item').forEach(item => {
                if(filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Modal functions
    function openModal(projectId) {
        const modal = document.getElementById('projectModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalContent = document.getElementById('modalContent');
        
        // Set content based on project
        const projects = {
            project1: {
                title: 'Smart Tambak Udang',
                content: `
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="w-full h-64 object-cover rounded-lg">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <h4 class="font-bold mb-2">Detail Project</h4>
                                <ul class="space-y-2">
                                    <li><strong>Klien:</strong> PT. Mina Global</li>
                                    <li><strong>Lokasi:</strong> Banyuwangi, Jawa Timur</li>
                                    <li><strong>Tahun:</strong> 2024</li>
                                    <li><strong>Status:</strong> Selesai</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2">Teknologi</h4>
                                <ul class="space-y-2">
                                    <li>• Sensor pH Digital</li>
                                    <li>• Sensor Suhu DS18B20</li>
                                    <li>• Sensor Salinitas</li>
                                    <li>• Dashboard Laravel</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2">Deskripsi</h4>
                            <p>Sistem monitoring kualitas air untuk 10 tambak udang vaname dengan kapasitas 100 ton per tahun. Data real-time ditampilkan di dashboard dan notifikasi WhatsApp jika ada parameter yang tidak normal.</p>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2">Hasil</h4>
                            <p>Produktivitas meningkat 30% dan tingkat kematian udang menurun 50%.</p>
                        </div>
                    </div>
                `
            },
            // Tambahkan project lainnya...
        };
        
        modalTitle.textContent = projects[projectId].title;
        modalContent.innerHTML = projects[projectId].content;
        modal.classList.remove('hidden');
    }
    
    function closeModal() {
        document.getElementById('projectModal').classList.add('hidden');
    }
</script>
@endpush

@endsection