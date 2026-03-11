<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>SensiAir - Solusi Monitoring Air IoT Terpercaya Indonesia</title>
    <meta name="description" content="SensiAir menyediakan sistem monitoring kualitas air real-time berbasis IoT untuk industri, tambak, dan lingkungan. Teknologi sensor terkini dengan dashboard interaktif dan notifikasi cerdas.">
    <meta name="keywords" content="monitoring air, IoT, kualitas air, sensor air, sistem monitoring, tambak udang, deteksi banjir, dashboard monitoring">
    <meta name="author" content="SensiAir">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="SensiAir - Solusi Monitoring Air IoT Terpercaya">
    <meta property="og:description" content="Sistem monitoring kualitas air real-time dengan teknologi IoT terkini. Hemat waktu, tingkatkan produktivitas.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="SensiAir">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url') }}">
    <meta property="twitter:title" content="SensiAir - Solusi Monitoring Air IoT">
    <meta property="twitter:description" content="Sistem monitoring kualitas air real-time berbasis IoT untuk bisnis Anda.">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ config('app.url') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    
    <!-- Preconnect to external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SensiAir",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "Solusi monitoring air berbasis IoT untuk industri, tambak, dan lingkungan",
        "sameAs": [
            "https://www.facebook.com/sensiair",
            "https://www.instagram.com/sensiair",
            "https://www.linkedin.com/company/sensiair"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "telephone": "+62-XXX-XXXX-XXXX",
            "email": "hello@sensiair.com"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID"
        }
    }
    </script>
    
    <!-- Additional SEO -->
    <meta name="theme-color" content="#1e3a8a">
    <meta name="msapplication-TileColor" content="#1e3a8a">
    <meta name="format-detection" content="telephone=no">
    
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
            .Btn {
                display: inline-flex;
                align-items: center;
                padding: 0.75rem 1.5rem;
                background-color: #25D366;
                color: white;
                border-radius: 9999px;
                font-weight: 600;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }
            .Btn:hover {
                background-color: #1DA851;
                transform: translateY(-2px);
            }
            .Btn:active {
                background-color: #1DA851;
                transform: translateY(0);
            }
            .socialSvg {
                width: 24px;
                height: 24px;
            }
            .whatsappSvg {
                fill: white;
            }
            .video-bg {
                position: relative;
                height: 50vh;
                overflow: hidden;
            }

            .video-bg video {
                position: absolute;
                left: 50%;
                min-width: 100%;
                min-height: 30%;
                transform: translate(-50%, -50%);
                object-fit: cover;
                z-index: -1;
                
            }

            .video-bg .content {
                position: relative;
                color: white;
                text-align: center;
                top: 50%;
                transform: translateY(-50%);
                opacity: 0.9 ;
                background: rgba(0,0,0,0.4);
                padding: 50px;
            }

            .btn {
                background: #00bcd4;
                padding: 10px 20px;
                text-decoration: none;
                color: white;
                border-radius: 5px;
            }
                        /* From Uiverse.io by Spacious74 */ 
            .outer {
                width: 150px;
                height: 125px;
                border-radius: 10px;
                padding: 1px;
                background: radial-gradient(circle 230px at 0% 0%, #ffffff, #0c0d0d);
                position: relative; 
            }

            .dot {
                width: 2px;
                aspect-ratio: 1;
                position: absolute;
                background-color: #fff;
                box-shadow: 0 0 10px #ffffff;
                border-radius: 100px;
                z-index: 2;
                right: 10%;
                top: 10%;
                animation: moveDot 6s linear infinite;
            }

            @keyframes moveDot {
            0%,
            100% {
                top: 10%;
                right: 10%;
            }
            25% {
                top: 10%;
                right: calc(100% - 35px);
            }
            50% {
                top: calc(100% - 30px);
                right: calc(100% - 35px);
            }
            75% {
                top: calc(100% - 30px);
                right: 10%;
            }
            }

            .card {
            z-index: 1;
            width: 100%;
            height: 100%;
            border-radius: 9px;
            border: solid 1px #202222;
            background-size: 20px 20px;
            background: radial-gradient(circle 280px at 0% 0%, #444444, #0c0d0d);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            flex-direction: column;
            color: #fff;
            }
            .ray {
            width: 220px;
            height: 45px;
            border-radius: 100px;
            position: absolute;
            background-color: #c7c7c7;
            opacity: 0.4;
            box-shadow: 0 0 50px #fff;
            filter: blur(10px);
            transform-origin: 10%;
            top: 0%;
            left: 0;
            transform: rotate(40deg);
            }

            .card .text {
            font-weight: bolder;
            font-size: 3rem;
            background: linear-gradient(45deg, #000000 4%, #fff, #000);
            background-clip: text;
            color: transparent;
            }

            .line {
            width: 100%;
            height: 1px;
            position: absolute;
            background-color: #2c2c2c;
            }
            .topl {
            top: 10%;
            background: linear-gradient(90deg, #888888 30%, #1d1f1f 70%);
            }
            .bottoml {
            bottom: 10%;
            }
            .leftl {
            left: 10%;
            width: 1px;
            height: 100%;
            background: linear-gradient(180deg, #747474 30%, #222424 70%);
            }
            .rightl {
            right: 10%;
            width: 1px;
            height: 100%;
            }

    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    
    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-gradient-to-r from-blue-900 to-gray-500 shadow-lg" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="SensiAir Logo" class="h-12 w-auto shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                    <div>
                        <span class="font-bold text-2xl text-white group-hover:text-blue-200 transition block leading-none">SensiAir</span>
                        <span class="text-xs text-blue-100 group-hover:text-blue-50 transition">IoT Solutions</span>
                    </div>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        Beranda
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-8 transition-all duration-300 rounded-full"></span>
                    </a>
                    <a href="{{ route('layanan') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        Layanan
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-12 transition-all duration-300 rounded-full"></span>
                    </a>
                    <a href="{{ route('portfolio') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        Portfolio
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-16 transition-all duration-300 rounded-full"></span>
                    </a>
                    <a href="{{ route('harga') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        Harga
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-8 transition-all duration-300 rounded-full"></span>
                    </a>
                    <a href="{{ route('faq') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        FAQ
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-6 transition-all duration-300 rounded-full"></span>
                    </a>
                    <a href="{{ route('kontak') }}" class="px-4 py-2 text-white hover:text-blue-100 font-medium transition relative group">
                        Kontak
                        <span class="absolute bottom-1 left-4 w-0 h-1 bg-gradient-to-r from-blue-300 to-blue-400 group-hover:w-10 transition-all duration-300 rounded-full"></span>
                    </a>
                </div>
                
                <!-- CTA Button & Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="hidden lg:inline-flex bg-white text-blue-600 px-6 py-2.5 rounded-lg font-semibold hover:bg-blue-50 hover:shadow-lg hover:scale-105 transition-all duration-300 items-center space-x-2">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Login</span>
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="lg:hidden text-white hover:text-blue-100 transition p-2 hover:bg-white/20 rounded-lg">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-blue-900/95 backdrop-blur-md border-t border-blue-700/50 shadow-2xl">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-home mr-3 text-blue-300"></i>Beranda
                </a>
                <a href="{{ route('layanan') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-cogs mr-3 text-blue-300"></i>Layanan
                </a>
                <a href="{{ route('portfolio') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-briefcase mr-3 text-blue-300"></i>Portfolio
                </a>
                <a href="{{ route('harga') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-tag mr-3 text-blue-300"></i>Harga
                </a>
                <a href="{{ route('faq') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-question-circle mr-3 text-blue-300"></i>FAQ
                </a>
                <a href="{{ route('kontak') }}" class="block px-4 py-3 text-white hover:bg-blue-800/50 hover:text-blue-100 rounded-lg font-medium transition">
                    <i class="fas fa-phone mr-3 text-blue-300"></i>Kontak
                </a>
                <div class="border-t border-blue-700/50 pt-3 mt-3">
                    <a href="{{ route('login') }}" class="block px-4 py-3 bg-white text-blue-600 rounded-lg font-semibold text-center hover:bg-blue-50 transition flex items-center justify-center space-x-2">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-water text-3xl text-blue-400"></i>
                        <span class="font-bold text-xl">SensiAIR</span>
                    </div>
                    <p class="text-gray-400">Solusi monitoring air berbasis IoT untuk industri, tambak, dan lingkungan.</p>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Monitoring Kualitas Air</a></li>
                        <li><a href="#" class="hover:text-white transition">Monitoring Level Air</a></li>
                        <li><a href="#" class="hover:text-white transition">Dashboard Custom</a></li>
                        <li><a href="#" class="hover:text-white transition">IoT Integration</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('tentang') }}" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="{{ route('harga') }}" class="hover:text-white transition">Harga</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Legal</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Kebijakan Privasi</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-white transition">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SensiAIR. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // AOS Initialization
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const icon = this.querySelector('i');
            menu.classList.toggle('hidden');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
        
        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.classList.remove('shadow-md');
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.classList.add('shadow-md');
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>