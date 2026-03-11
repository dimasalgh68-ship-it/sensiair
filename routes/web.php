<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Sitemap
Route::get('/sitemap.xml', function() {
    $urls = [
        ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => route('layanan'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => route('portfolio'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => route('harga'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => route('faq'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => route('tentang'), 'priority' => '0.7', 'changefreq' => 'yearly'],
        ['url' => route('privacy'), 'priority' => '0.5', 'changefreq' => 'yearly'],
        ['url' => route('terms'), 'priority' => '0.5', 'changefreq' => 'yearly'],
        ['url' => route('kontak'), 'priority' => '0.8', 'changefreq' => 'monthly'],
    ];
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    foreach ($urls as $item) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . htmlspecialchars($item['url']) . '</loc>' . "\n";
        $xml .= '    <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $xml .= '    <changefreq>' . $item['changefreq'] . '</changefreq>' . "\n";
        $xml .= '    <priority>' . $item['priority'] . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }
    
    $xml .= '</urlset>';
    
    return response($xml, 200)->header('Content-Type', 'application/xml');
});

// Public Pages
Route::view('/', 'pages.home')->name('home');
Route::view('/layanan', 'pages.layanan')->name('layanan');
Route::view('/portfolio', 'pages.portofolio')->name('portfolio');
Route::view('/harga', 'pages.harga')->name('harga');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/tentang', 'pages.tentang')->name('tentang');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/kontak', 'pages.kontak')->name('kontak');

// Auth Pages
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');

// Contact form handler (jika perlu)
Route::post('/kontak', function(Request $request) {
    // Validasi data
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);
    
    return redirect()->back()->with('success', 'Pesan Anda telah terkirim! Tim kami akan segera menghubungi Anda.');
})->name('kontak.send');

// NONAKTIFKAN DULU AUTH ROUTES
// require __DIR__.'/auth.php';