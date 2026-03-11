# SensiAir - Solusi Monitoring Air IoT

Website resmi SensiAir - Sistem monitoring kualitas air berbasis IoT untuk industri, tambak, dan lingkungan.

## 🌐 Tentang SensiAir

SensiAir menyediakan solusi monitoring air real-time berbasis teknologi IoT terkini. Dengan sensor berkualitas tinggi dan dashboard interaktif, kami membantu bisnis Anda:

- Memantau kualitas air (pH, suhu, kekeruhan, dll)
- Mendeteksi potensi banjir dengan notifikasi dini
- Mengakses data dari mana saja via smartphone
- Mendapatkan laporan otomatis dan analisis mendalam

## 🚀 Fitur Utama

- **Real-time Monitoring**: Data diperbarui setiap detik
- **Dashboard Interaktif**: Visualisasi data yang mudah dipahami
- **Notifikasi Cerdas**: Alert via WhatsApp/Email untuk anomali
- **Teknologi Terkini**: Sensor IoT dengan akurasi tinggi
- **Support 24/7**: Tim teknis siap membantu kapanpun

## 📋 Persyaratan Sistem

- PHP 8.2 atau lebih tinggi
- Composer
- Node.js 18+
- SQLite atau MySQL
- Apache dengan mod_rewrite

## 🛠️ Instalasi Lokal

### 1. Clone Repository
```bash
git clone <repository-url>
cd sensiair
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Build Assets
```bash
npm run build
```

### 5. Run Development Server
```bash
php artisan serve
npm run dev
```

Akses aplikasi di `http://localhost:8000`

## 📦 Struktur Proyek

```
sensiair/
├── app/                    # Aplikasi Laravel
├── bootstrap/              # Bootstrap files
├── config/                 # Konfigurasi aplikasi
├── database/               # Migrations & seeders
├── public/                 # File publik (CSS, JS, images)
├── resources/
│   ├── css/               # Stylesheet
│   ├── js/                # JavaScript
│   └── views/             # Blade templates
├── routes/                # Route definitions
├── storage/               # File storage
├── .env.example           # Environment template
├── composer.json          # PHP dependencies
├── package.json           # Node dependencies
└── vite.config.js         # Vite configuration
```

## 🎨 Teknologi yang Digunakan

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, Alpine.js
- **Build Tool**: Vite
- **Database**: SQLite (development), MySQL (production)
- **Animation**: AOS (Animate On Scroll)
- **Icons**: Font Awesome 6

## 📄 Halaman Utama

- **Beranda** (`/`) - Landing page dengan hero section dan fitur utama
- **Layanan** (`/layanan`) - Daftar layanan yang ditawarkan
- **Portfolio** (`/portfolio`) - Proyek-proyek yang telah dikerjakan
- **Harga** (`/harga`) - Paket pricing
- **FAQ** (`/faq`) - Pertanyaan yang sering diajukan
- **Tentang Kami** (`/tentang`) - Informasi perusahaan
- **Kontak** (`/kontak`) - Halaman kontak (WhatsApp)
- **Kebijakan Privasi** (`/privacy`) - Privacy policy
- **Syarat & Ketentuan** (`/terms`) - Terms of service

## 🔍 SEO Configuration

### Sitemap
- Otomatis generate di `/sitemap.xml`
- Submit ke Google Search Console

### Robots.txt
- Konfigurasi di `/robots.txt`
- Mengizinkan search engine untuk crawl

### Meta Tags
- Semua halaman memiliki meta description
- Open Graph tags untuk social sharing
- Structured data (JSON-LD) untuk rich snippets

### Performance
- Gzip compression enabled
- Browser caching configured
- Image optimization
- CSS/JS minification

## 🚀 Deployment

Lihat `DEPLOYMENT.md` untuk panduan lengkap deployment ke production.

### Quick Deployment Checklist
1. Update `.env` dengan domain production
2. Set `APP_DEBUG=false` dan `APP_ENV=production`
3. Run `php artisan config:cache`
4. Run `npm run build`
5. Upload ke hosting
6. Configure document root ke folder `public`
7. Submit sitemap ke Google Search Console

## 📊 Monitoring & Analytics

- Google Search Console: Monitor indexing dan search performance
- Google Analytics 4: Track user behavior
- Uptime Monitoring: Monitor ketersediaan website
- Error Logging: Check `storage/logs/laravel.log`

## 🔒 Security

- HTTPS/SSL certificate required
- Security headers configured
- CSRF protection enabled
- XSS protection enabled
- SQL injection prevention

## 📞 Support

Untuk pertanyaan atau bantuan:
- Email: hello@sensiair.com
- WhatsApp: [Nomor WhatsApp]
- Website: https://sensiair.com

## 📝 License

Proprietary - SensiAir 2024

## 👥 Tim Pengembang

Dikembangkan oleh tim profesional SensiAir

---

**Terakhir diupdate**: 2024
**Versi**: 1.0.0
