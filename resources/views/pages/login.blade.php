@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">SensiAIR</h1>
                <p class="text-gray-600">Masuk ke akun Anda</p>
            </div>

            <!-- Form -->
            <div class="space-y-6">
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

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember"
                        disabled
                        class="h-4 w-4 text-gray-400 border-gray-300 rounded"
                    >
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Ingat saya
                    </label>
                </div>

                <!-- Info Message -->
                <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-lg text-sm">
                    <p class="font-semibold mb-1">Fitur Login</p>
                    <p>Halaman login ini adalah bagian dari landing page. Untuk implementasi login yang sebenarnya, hubungi tim development kami.</p>
                </div>

                <!-- Submit Button -->
                <button 
                    type="button"
                    disabled
                    class="w-full bg-gray-400 text-white font-semibold py-2 px-4 rounded-lg cursor-not-allowed"
                >
                    Masuk
                </button>
            </div>

            <!-- Divider -->
            <div class="mt-6 relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">atau</span>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-6 space-y-3">
                <p class="text-center text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                        Daftar di sini
                    </a>
                </p>
                <p class="text-center text-sm">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-700">
                        ← Kembali ke beranda
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="mt-8 text-center text-sm text-gray-600">
            <p>Hubungi support jika ada masalah login</p>
            <p class="mt-1">
                <a href="https://wa.me/62812345678" target="_blank" class="text-blue-600 hover:text-blue-700 font-semibold">
                    WhatsApp Support
                </a>
            </p>
        </div>
    </div>
</div>

@endsection
