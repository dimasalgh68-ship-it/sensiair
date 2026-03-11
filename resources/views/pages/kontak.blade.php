@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="bg-blue-900 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Hubungi Kami</h1>
        <p class="text-xl max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="100">
            Konsultasi gratis untuk kebutuhan monitoring air Anda
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Mari Berdiskusi</h2>
        <p class="text-lg text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
            Tim kami siap membantu Anda memilih solusi monitoring air yang tepat sesuai kebutuhan. Hubungi kami melalui WhatsApp untuk konsultasi gratis.
        </p>
        
        <div class=" bg-gradient-to-r from-green-50 to-emerald-50 p-12 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-12">
               <button class="Btn">
                <div class="sign">
                    <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                    ></path>
                    </svg>
                </div>
                </button>

                <h3 class="text-2xl font-bold mb-2">Chat via WhatsApp</h3>
                <p class="text-gray-600 mb-6">Respon cepat dari tim kami</p>
            </div>
            
            <a href="https://wa.me/6282246984167?text=Halo%20SensiAIR%2C%20saya%20tertarik%20dengan%20layanan%20monitoring%20air" 
               class="inline-flex items-center bg-green-500 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-600 transition text-lg">
                <i class="fab fa-whatsapp text-2xl mr-3"></i>
                Hubungi Kami di WhatsApp
            </a>
            
            <p class="text-gray-600 mt-6 text-sm">
                Nomor: <span class="font-semibold">+62 822-4698-4167</span>
            </p>
        </div>
    </div>
</section>

@endsection