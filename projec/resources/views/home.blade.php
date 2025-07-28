<x-layout title="Beranda">
<div class="min-h-full bg-gray-50" x-data="{ openProfile: false, openMobile: false }">
  <main>
    <!-- Home Section -->
    <section id="home" class="relative bg-gray-50 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-b from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)]"></div>
      <div class="absolute inset-0 w-full h-full bg-cover bg-center animate-change-bg"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 sm:py-40">
        <div class="text-center">
          <div class="glass-morphism p-8 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-800 sm:text-5xl lg:text-6xl">
              <span class="block">Desain Visual</span>
              <span class="block bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Yang Menginspirasi</span>
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-gray-100">
              Menciptakan pengalaman merek yang berkesan melalui solusi desain yang penuh pertimbangan.
            </p>
            <div class="mt-10 flex justify-center gap-x-6">
              <a href="{{ route('portfolio') }}" 
                 class="neumorphism-btn rounded-md bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] px-6 py-3 text-sm font-semibold text-white shadow-md hover:opacity-90 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300"
                 aria-label="Lihat Portfolio">
                Lihat Portfolio
              </a>
              <a href="{{ route('resume') }}" 
                 class="glass-morphism-btn rounded-md bg-white/20 px-6 py-3 text-sm font-semibold text-gray-800 shadow-md hover:bg-white/30 transition-all duration-300"
                 aria-label="Lihat Resume">
                Lihat Resume
              </a>
            </div>
          </div>
        </div>
      </div>

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
      </style>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-gradient-to-b from-gray-100 to-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">
            Proyek <span class="bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Kreatif</span>
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Kumpulan karya desain profesional saya dari berbagai proyek.
          </p>
        </div>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Project 1 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg neumorphism-card transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="{{ asset('album/bck.png') }}" 
                   alt="Projek identitas merek">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Branding Logo Nama</h3>
                <p class="text-[rgba(121,155,193,0.9)] text-sm">Identitas Nama Saya</p>
              </div>
            </div>
          </div>
          
          <!-- Project 2 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg neumorphism-card transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="{{ asset('album/hitam.png') }}" 
                   alt="Projek desain web">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Desain Poster</h3>
                <p class="text-[rgba(121,155,193,0.9)] text-sm">Canva</p>
              </div>
            </div>
          </div>
          
          <!-- Project 3 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg neumorphism-card transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="{{ asset('album/kartini.jpg') }}" 
                   alt="Projek desain cetak">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Poster Kartini</h3>
                <p class="text-[rgba(121,155,193,0.9)] text-sm">CorelDraw, Cetak</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 text-center">
          <a href="{{ route('portfolio') }}" 
             class="neumorphism-btn inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300"
             aria-label="Lihat Portfolio Lengkap">
            Lihat Portfolio Lengkap
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="mt-10 py-16 bg-gradient-to-b from-gray-50 to-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="glass-morphism-inline p-6 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20 inline-block">
            <h2 class="text-4xl font-extrabold text-gray-800 sm:text-5xl">
              Tentang <span class="bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Saya</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
              Berdedikasi mengubah ide menjadi realitas visual yang menakjubkan.
            </p>
          </div>
        </div>
        <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
          <div class="lg:col-span-5 mb-12 lg:mb-0">
            <div class="relative group">
              <div class="absolute inset-0 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] rounded-lg opacity-20 group-hover:opacity-40 transition-opacity duration-500 transform rotate-3 group-hover:rotate-0"></div>
              <img class="relative rounded-lg shadow-xl w-full max-w-md mx-auto transform transition-transform duration-700 group-hover:scale-105 neumorphism-img" 
                   src="{{ asset('album/my.jpg') }}" 
                   alt="Potret desainer">
              <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[rgba(121,155,193,0.5)] rounded-full opacity-30 animate-pulse"></div>
            </div>
          </div>
          <div class="lg:col-span-7" x-data="{ activeTab: 'bio' }">
            <div class="glass-morphism p-8 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20">
              <div class="flex justify-start mb-6 space-x-4">
                <button @click="activeTab = 'bio'" 
                        class="neumorphism-tab px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                        :class="activeTab === 'bio' ? 'bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] text-white' : 'bg-gray-300 text-gray-800 hover:bg-gray-400'"
                        aria-label="Lihat Profil">
                  Profil
                </button>
                <button @click="activeTab = 'skills'" 
                        class="neumorphism-tab px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                        :class="activeTab === 'skills' ? 'bg-gray-300 text-white' : ' px-3.5 py-1.5 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] text-gray-800 hover:bg-gray-400'"
                        aria-label="Lihat Keahlian">
                  Keahlian
                </button>
                <button @click="activeTab = 'philosophy'" 
                        class="neumorphism-tab px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                        :class="activeTab === 'philosophy' ? 'bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] text-white' : 'bg-gray-300 text-gray-800 hover:bg-gray-400'"
                        aria-label="Lihat Filosofi">
                  Filosofi
                </button>
              </div>
              
              <!-- Bio Tab Content -->
              <div x-show="activeTab === 'bio'" 
                   class="space-y-4 text-gray-600">
                <p>
                  Saya <strong class="text-[rgba(14,83,112,0.9)]">Ahmet Mahrus</strong>, seorang desainer grafis dengan hasrat untuk bercerita melalui visual. Dengan pengalaman lebih dari 4 minggu, saya telah bekerja dengan teman, menciptakan desain yang memikat dan menyentuh.
                </p>
                <p>
                  Perjalanan saya dimulai dengan kecintaan pada tipografi dan teori warna, berkembang menjadi karier di mana saya menggabungkan strategi dan kreativitas untuk menciptakan pengalaman merek yang berkesan.
                </p>
                <p>
                  Di luar desain, saya adalah penjelajah mahasiswa, mengabadikan desain saya melalui poster dan membimbing generasi desainer berikutnya.
                </p>
              </div>
              
              <!-- Skills Tab Content -->
              <div x-show="activeTab === 'skills'" 
                   class="grid grid-cols-2 gap-4">
                <div class="neumorphism-small p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
                  <h3 class="text-[rgba(14,83,112,0.9)] font-semibold">Identitas Merek</h3>
                  <p class="text-sm text-gray-600">Menciptakan sistem visual yang kohesif dan bermakna.</p>
                </div>
                <div class="neumorphism-small p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
                  <h3 class="text-[rgba(14,83,112,0.9)] font-semibold">Desain Grafis</h3>
                  <p class="text-sm text-gray-600">Merancang pengalaman digital yang intuitif dan menarik.</p>
                </div>
                <div class="neumorphism-small p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
                  <h3 class="text-[rgba(14,83,112,0.9)] font-semibold">Desain Cetak</h3>
                  <p class="text-sm text-gray-600">Membuat materi editorial dan pemasaran yang berdampak.</p>
                </div>
                <div class="neumorphism-small p-4 rounded-lg hover:bg-gray-200 transition-all duration-300">
                  <h3 class="text-[rgba(14,83,112,0.9)] font-semibold">Arah Kreatif</h3>
                  <p class="text-sm text-gray-600">Memimpin proyek dengan visi dan ketepatan.</p>
                </div>
              </div>
              
              <!-- Philosophy Tab Content -->
              <div x-show="activeTab === 'philosophy'" 
                   class="space-y-4 text-gray-600">
                <p>
                  Desain lebih dari sekadar estetika—ini tentang memecahkan masalah dan membangkitkan emosi. Saya percaya dalam menciptakan karya yang tidak hanya indah tetapi juga bermakna, selaras dengan nilai inti merek.
                </p>
                <p>
                  Kolaborasi adalah kunci. Saya berkembang dengan perspektif yang beragam, bekerja sama dengan klien untuk mewujudkan visi mereka sambil mendorong batas kreatif.
                </p>
                <p>
                  Setiap proyek adalah cerita yang menunggu untuk diceritakan, dan saya di sini untuk membuatnya tak terlupakan.
                </p>
              </div>
            </div>
            
            <!-- Stats -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-6">
              <div class="neumorphism-card p-6 rounded-lg transform transition-all duration-500 hover:scale-105">
                <div class="text-3xl text-[rgba(14,83,112,0.9)] font-bold">20+</div>
                <div class="text-sm text-gray-600 mt-2">Proyek Selesai</div>
              </div>
              <div class="neumorphism-card p-6 rounded-lg transform transition-all duration-500 hover:scale-105">
                <div class="text-3xl text-[rgba(14,83,112,0.9)] font-bold">4</div>
                <div class="text-sm text-gray-600 mt-2">Minggu Pengalaman</div>
              </div>
              <div class="neumorphism-card p-6 rounded-lg transform transition-all duration-500 hover:scale-105">
                <div class="text-3xl text-[rgba(14,83,112,0.9)] font-bold">100%</div>
                <div class="text-sm text-gray-600 mt-2">Kepuasan Klien</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Resume Section -->
    <section id="resume" class="mt-10 py-16 bg-gradient-to-b from-gray-100 to-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">
            Perjalanan <span class="bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Profesional</span>
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Gambaran singkat tentang pengalaman, keahlian, dan pencapaian saya.
          </p>
        </div>
        <div class="glass-morphism rounded-xl shadow-lg border border-white/20 overflow-hidden">
          <div class="p-8 md:p-12">
            <div class="space-y-12">
              <!-- Experience -->
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Pengalaman</h3>
                <div class="space-y-8">
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-800">Desainer Grafis</h4>
                    <p class="text-sm text-[rgba(121,155,193,0.9)]">Yayasan Alfalah | 2019 - 2020</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-800">Desainer Grafis</h4>
                    <p class="text-sm text-[rgba(121,155,193,0.9)]">Yayasan Darul Furqon | 2020 - 2021</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-800">Desainer Grafis</h4>
                    <p class="text-sm text-[rgba(121,155,193,0.9)]">Yayasan Al-Mujtama' | 2021 - 2022</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <!-- Education -->
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Pendidikan</h3>
                <div class="relative pl-8">
                  <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] rounded-full"></div>
                  <h4 class="text-lg font-semibold text-gray-800">Desain Grafis</h4>
                  <p class="text-sm text-[rgba(121,155,193,0.9)]">Universitas Pertiwi | 2023 - Sekarang</p>
                  <ul class="mt-2 text-gray-600 list-disc list-inside">
                    <li>Lulus dengan pujian, Makasih ya Mas.</li>
                    <li>Spesialisasi dalam tipografi dan komunikasi visual.</li>
                    <li>Menerima Penghargaan Desain Tergabut pada tahun 2019.</li>
                  </ul>
                </div>
              </div>
              
              <!-- Skills -->
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Keahlian</h3>
                <div class="flex flex-wrap gap-3">
                  <span class="px-4 py-2 text-white text-sm font-medium rounded-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300">Adobe Photoshop</span>
                  <span class="px-4 py-2 text-white text-sm font-medium rounded-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300">Adobe Illustrator</span>
                  <span class="px-4 py-2 text-white text-sm font-medium rounded-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300">Figma</span>
                  <span class="px-4 py-2 text-white text-sm font-medium rounded-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300">CorelDraw</span>
                  <span class="px-4 py-2 text-white text-sm font-medium rounded-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] hover:opacity-90 transition-all duration-300">Canva</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<style>
  /* Glassmorphism Effect */
  .glass-morphism {
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
    background-color: #F9FAFB; /* Fallback */
  }
  
  .glass-morphism-inline {
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 4px 16px 0 rgba(31, 38, 135, 0.15);
    background-color: #F9FAFB; /* Fallback */
  }
  
  .glass-morphism-btn {
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 16px 0 rgba(31, 38, 135, 0.15);
    background-color: #F9FAFB; /* Fallback */
  }
  
  /* Neumorphism Effect */
  .neumorphism-card {
    background: #E5E7EB;
    box-shadow: 6px 6px 12px #D1D5DB, 
                -6px -6px 12px #FFFFFF;
    transition: all 0.3s ease;
  }
  
  .neumorphism-card:hover {
    box-shadow: 8px 8px 16px #D1D5DB, 
                -8px -8px 16px #FFFFFF;
  }
  
  .neumorphism-btn {
    background: #E5E7EB;
    box-shadow: 4px 4px 8px #D1D5DB, 
                -4px -4px 8px #FFFFFF;
    transition: all 0.3s ease;
  }
  
  .neumorphism-btn:hover {
    box-shadow: 6px 6px 12px #D1D5DB, 
                -6px -6px 12px #FFFFFF;
  }
  
  .neumorphism-tab {
    background: #E5E7EB;
    box-shadow: 3px 3px 6px #D1D5DB, 
                -3px -3px 6px #FFFFFF;
    transition: all 0.3s ease;
  }
  
  .neumorphism-tab:hover {
    box-shadow: 4px 4px 8px #D1D5DB, 
                -4px -4px 8px #FFFFFF;
  }
  
  .neumorphism-small {
    background: #E5E7EB;
    box-shadow: 2px 2px 4px #D1D5DB, 
                -2px -2px 4px #FFFFFF;
    transition: all 0.3s ease;
  }
  
  .neumorphism-img {
    background: #E5E7EB;
    box-shadow: 8px 8px 16px #D1D5DB, 
                -8px -8px 16px #FFFFFF;
  }
  
  /* Custom Gradient Text */
  .gradient-text {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
  }
</style>
</x-layout>