@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">SensiAIR</h1>
                <p class="text-gray-600">Buat akun baru</p>
            </div>

            <!-- Form -->
            <div class="space-y-4">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Lengkap
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        disabled
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 outline-none"
                        placeholder="Nama Anda"
                    >
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        disabled
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 outline-none"
                        placeholder="nama@email.com"
                    >
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                        Nomor Telepon
                    </label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        disabled
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 outline-none"
                        placeholder="08123456789"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        disabled
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 outline-none"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                        Konfirmasi Password
                    </label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        disabled
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 outline-none"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Terms -->
                <div class="flex items-start">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms"
                        disabled
                        class="h-4 w-4 text-gray-400 border-gray-300 rounded mt-1"
                    >
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        Saya setuju dengan 
                        <a href="{{ route('terms') }}" class="text-blue-600 hover:text-blue-700">Syarat & Ketentuan</a>
                    </label>
                </div>

                <!-- Info Message -->
                <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-lg text-sm">
                    <p class="font-semibold mb-1">Fitur Registrasi</p>
                    <p>Halaman registrasi ini adalah bagian dari landing page. Untuk implementasi registrasi yang sebenarnya, hubungi tim development kami.</p>
                </div>

                <!-- Submit Button -->
                <button 
                    type="button"
                    disabled
                    class="w-full bg-gray-400 text-white font-semibold py-2 px-4 rounded-lg cursor-not-allowed"
                >
                    Daftar
                </button>
            </div>

            <!-- Links -->
            <div class="mt-6 space-y-3">
                <p class="text-center text-sm text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                        Masuk di sini
                    </a>
                </p>
                <p class="text-center text-sm">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-700">
                        ← Kembali ke beranda
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
