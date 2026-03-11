@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Syarat & Ketentuan</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Ketentuan penggunaan layanan SensiAIR
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none" data-aos="fade-up">
            
            <h2 class="text-2xl font-bold mt-8 mb-4">1. Penerimaan Syarat</h2>
            <p class="text-gray-700 mb-6">
                Dengan menggunakan layanan SensiAIR, Anda menyetujui untuk terikat oleh syarat dan ketentuan ini. Jika Anda tidak setuju dengan salah satu bagian, silakan jangan gunakan layanan kami.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">2. Deskripsi Layanan</h2>
            <p class="text-gray-700 mb-6">
                SensiAIR menyediakan sistem monitoring air berbasis IoT yang memungkinkan pengguna untuk memantau parameter kualitas dan level air secara real-time melalui dashboard online.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">3. Akun Pengguna</h2>
            <p class="text-gray-700 mb-4">
                Anda bertanggung jawab untuk:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Menjaga kerahasiaan password Anda</li>
                <li>Semua aktivitas yang terjadi di akun Anda</li>
                <li>Memberikan informasi yang akurat dan lengkap</li>
                <li>Mematuhi semua hukum yang berlaku</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">4. Pembayaran dan Penagihan</h2>
            <p class="text-gray-700 mb-4">
                Ketentuan pembayaran:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Harga dapat berubah dengan pemberitahuan 30 hari sebelumnya</li>
                <li>Pembayaran harus dilakukan sesuai jadwal yang disepakati</li>
                <li>Keterlambatan pembayaran dapat mengakibatkan penghentian layanan</li>
                <li>Tidak ada pengembalian dana untuk periode yang sudah berlalu</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">5. Penggunaan yang Dilarang</h2>
            <p class="text-gray-700 mb-4">
                Anda tidak boleh:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Menggunakan layanan untuk tujuan ilegal</li>
                <li>Mengganggu atau merusak sistem kami</li>
                <li>Mencoba mengakses akun orang lain</li>
                <li>Mengirim spam atau konten berbahaya</li>
                <li>Melanggar hak kekayaan intelektual kami</li>
                <li>Menggunakan layanan untuk aktivitas yang merugikan pihak lain</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">6. Garansi dan Disclaimer</h2>
            <p class="text-gray-700 mb-6">
                Layanan kami disediakan "sebagaimana adanya" tanpa garansi apapun. Kami tidak menjamin:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Layanan akan selalu tersedia tanpa gangguan</li>
                <li>Data akan selalu akurat atau lengkap</li>
                <li>Sistem akan bebas dari error atau bug</li>
                <li>Hasil yang diharapkan akan tercapai</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">7. Pembatasan Tanggung Jawab</h2>
            <p class="text-gray-700 mb-6">
                SensiAIR tidak bertanggung jawab atas:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Kerugian data atau informasi</li>
                <li>Kehilangan keuntungan atau pendapatan</li>
                <li>Kerusakan tidak langsung atau konsekuensial</li>
                <li>Gangguan layanan di luar kontrol kami</li>
                <li>Penggunaan data yang tidak sesuai dengan tujuan</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">8. Uptime dan Maintenance</h2>
            <p class="text-gray-700 mb-6">
                Kami berkomitmen untuk menjaga uptime 99.5% untuk paket Pro dan Enterprise. Kami dapat melakukan maintenance yang mungkin menyebabkan downtime dengan pemberitahuan sebelumnya.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">9. Penghentian Layanan</h2>
            <p class="text-gray-700 mb-6">
                Kami dapat menghentikan layanan Anda jika:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                <li>Anda melanggar syarat dan ketentuan ini</li>
                <li>Pembayaran tidak dilakukan tepat waktu</li>
                <li>Anda menggunakan layanan untuk tujuan ilegal</li>
                <li>Anda melakukan aktivitas yang merugikan sistem kami</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4">10. Perubahan Syarat</h2>
            <p class="text-gray-700 mb-6">
                Kami dapat mengubah syarat dan ketentuan ini kapan saja. Perubahan signifikan akan diumumkan melalui email atau notifikasi di website. Penggunaan layanan setelah perubahan berarti Anda menerima syarat baru.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">11. Hukum yang Berlaku</h2>
            <p class="text-gray-700 mb-6">
                Syarat dan ketentuan ini diatur oleh hukum Republik Indonesia. Setiap perselisihan akan diselesaikan melalui pengadilan yang berwenang di Jakarta.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">12. Hubungi Kami</h2>
            <p class="text-gray-700 mb-6">
                Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Email: legal@SensiAIR.id</li>
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
