<x-layout title="Beranda">
  <!-- Import the component -->
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
<div class="min-h-full bg-gray-50" x-data="{ openProfile: false, openMobile: false }">
  <main>
    <!-- Hero Section with Freepik-style elements -->
    <section id="home" class="relative bg-gray-50 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-b from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)]"></div>
      <div class="absolute inset-0 w-full h-full bg-cover bg-center animate-change-bg"></div>
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="flex flex-col lg:flex-row items-center gap-12">
          <!-- Text content -->
          <div class="lg:w-1/2 text-center lg:text-left">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-gray-800 mb-6">
              <span class="block">Kreativitas Tanpa Batas</span>
              <span class="block bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Untuk Projek Anda</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 mb-8 max-w-lg mx-auto lg:mx-0">
              Solusi desain profesional yang membawa ide-ide Anda menjadi kenyataan. Jelajahi koleksi karya kreatif kami.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
              <a href="{{ route('portfolio') }}" class="px-8 py-3 bg-white text-gray-800 font-medium rounded-lg shadow-md hover:shadow-lg transition duration-300">
                Jelajahi Karya
              </a>
              <a href="{{ route('resume') }}" class="px-8 py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-gray-800 transition duration-300">
                Hubungi Kami
              </a>
            </div>
          </div>
          
          <!-- image 3D -->
          <div class="lg:w-1/2 relative">
              <model-viewer src="album/donny.glb" class="w-150 h-150" camera-controls></model-viewer>
          </div>
        </div>
      </div>
      
    </section>
    <style>
      @keyframes changeBackground {
        0%, 100% {
          background-image: url('{{ asset('album/bg01.jpg') }}');
        }
        33% {
          background-image: url('{{ asset('album/bg02.jpg') }}');
        }
        66% {
          background-image: url('{{ asset('album/bg03.jpg') }}');
        }
      }
      .animate-change-bg {
        animation: changeBackground 9s infinite ease-in-out;
        background-size: cover;
        background-position: center;
        opacity: 0.8;
      }
      .glass-morphism {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
      }
    </style>
  </main>
</div>
</x-layout>