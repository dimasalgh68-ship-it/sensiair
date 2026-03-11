@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Kebijakan Privasi</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Kami menghormati privasi Anda dan berkomitmen untuk melindungi data pribadi Anda
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none" data-aos="fade-up">
            
            <h2 class="text-2xl font-bold mt-8 mb-4">1. Informasi yang Kami Kumpulkan</h2>
            <p class="text-gray-700 mb-4">
                Kami mengumpulkan informasi yang Anda berikan secara langsung kepada kami, termasuk:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Nama, email, dan nomor telepon</li>
                <li>Informasi perusahaan dan industri</li>
                <li>Data monitoring air dari sensor Anda</li>
                <li>Informasi pembayaran dan transaksi</li>
                <li>Komunikasi dan feedback dari Anda</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">2. Bagaimana Kami Menggunakan Informasi</h2>
            <p class="text-gray-700 mb-4">
                Informasi yang kami kumpulkan digunakan untuk:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Menyediakan dan meningkatkan layanan kami</li>
                <li>Mengirimkan notifikasi dan update penting</li>
                <li>Memproses pembayaran dan transaksi</li>
                <li>Memberikan dukungan pelanggan</li>
                <li>Melakukan riset dan analisis</li>
                <li>Mematuhi kewajiban hukum</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">3. Keamanan Data</h2>
            <p class="text-gray-700 mb-6">
                Kami menggunakan enkripsi SSL/TLS dan protokol keamanan lainnya untuk melindungi data Anda. Semua data disimpan di server yang aman dengan backup reguler. Namun, tidak ada sistem keamanan yang 100% aman, dan kami tidak dapat menjamin keamanan mutlak.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">4. Berbagi Data dengan Pihak Ketiga</h2>
            <p class="text-gray-700 mb-6">
                Kami tidak menjual atau membagikan data pribadi Anda kepada pihak ketiga tanpa persetujuan Anda, kecuali:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Untuk mematuhi hukum atau perintah pengadilan</li>
                <li>Untuk melindungi hak dan keselamatan kami</li>
                <li>Dengan mitra layanan yang membantu kami (dengan perjanjian kerahasiaan)</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">5. Retensi Data</h2>
            <p class="text-gray-700 mb-6">
                Kami menyimpan data Anda selama diperlukan untuk memberikan layanan. Anda dapat meminta penghapusan data kapan saja dengan menghubungi kami.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">6. Cookie dan Teknologi Pelacakan</h2>
            <p class="text-gray-700 mb-6">
                Kami menggunakan cookie untuk meningkatkan pengalaman pengguna. Anda dapat mengatur browser untuk menolak cookie, tetapi ini mungkin mempengaruhi fungsionalitas website.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">7. Hak Anda</h2>
            <p class="text-gray-700 mb-4">
                Anda memiliki hak untuk:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Mengakses data pribadi Anda</li>
                <li>Memperbaiki data yang tidak akurat</li>
                <li>Menghapus data Anda</li>
                <li>Membatasi penggunaan data Anda</li>
                <li>Menolak pemrosesan data</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">8. Perubahan Kebijakan</h2>
            <p class="text-gray-700 mb-6">
                Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan signifikan akan diumumkan melalui email atau notifikasi di website.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">9. Hubungi Kami</h2>
            <p class="text-gray-700 mb-6">
                Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Email: privacy@SensiAIR.id</li>
                <li>WhatsApp: +62 822-4698-4167</li>
                <li>Alamat: Jl. Teknologi No. 123, Jakarta Selatan</li>
            </ul>

            <p class="text-gray-500 text-sm mt-8">
                Terakhir diperbarui: Januari 2024
            </p>
        </div>
    </div>
</section>

@endsection
