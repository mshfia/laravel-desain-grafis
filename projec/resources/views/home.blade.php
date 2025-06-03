@extends('layouts.app')

@section('title', 'Desain Grafis')

@section('content')
<div class="min-h-full bg-gray-100" x-data="{ openProfile: false, openMobile: false }">

  <main class="mt-16">
    <!-- Home Section -->
    <section id="home" class="relative bg-gray-100 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-b from-blue-100/20 to-gray-100/80"></div>
      <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover object-center opacity-50">
        <source src="{{ asset('album/bg.mp4') }}" type="video/mp4">
      </video>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 sm:py-40">
        <div class="text-center">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
            <span class="block">Desain Visual</span>
            <span class="block bg-gradient-to-r from-blue-500 to-teal-500 bg-clip-text text-transparent">Yang Menginspirasi</span>
          </h1>
          <p class="mt-6 max-w-lg mx-auto text-xl text-gray-600">
            Menciptakan pengalaman merek yang berkesan melalui solusi desain yang penuh pertimbangan.
          </p>
          <div class="mt-10 flex justify-center gap-x-6">
            <a href="{{ route('portfolio') }}" 
               class="rounded-md bg-gradient-to-r from-blue-500 to-teal-500 px-6 py-3 text-sm font-semibold text-white shadow-md hover:from-blue-400 hover:to-teal-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 transition-all duration-300"
               aria-label="Lihat Portfolio">
              Lihat Portfolio
            </a>
            <a href="{{ route('resume') }}" 
               class="rounded-md bg-white/30 px-6 py-3 text-sm font-semibold text-gray-900 shadow-md hover:bg-white/40 transition-all duration-300"
               aria-label="Lihat Resume">
              Lihat Resume
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
            Proyek Gabut
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Kumpulan karya desain tergabut saya dari berbagai kemalesan.
          </p>
        </div>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-md transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/bck.png" 
                   alt="Projek identitas merek">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Branding Logo Nama</h3>
                <p class="text-blue-400 text-sm">Identitas Nama Saya</p>
              </div>
            </div>
          </div>
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-md transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/hitam.png" 
                   alt="Projek desain web">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Desain Poster</h3>
                <p class="text-blue-400 text-sm">Canva</p>
              </div>
            </div>
          </div>
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-md transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/kartini.jpg" 
                   alt="Projek desain cetak">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Poster Kartini</h3>
                <p class="text-blue-400 text-sm">CorelDraw, Cetak</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 text-center">
          <a href="{{ route('portfolio') }}" 
             class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-400 hover:to-teal-400 transition-all duration-300"
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
    <section id="about" class="py-16 bg-gradient-to-b from-gray-100 to-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
            Sang Desain Grafis
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Berdedikasi mengubah ide menjadi realitas visual yang menakjubkan.
          </p>
        </div>
        <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
          <div class="lg:col-span-5 mb-12 lg:mb-0">
            <div class="relative group">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-teal-400 rounded-lg opacity-20 group-hover:opacity-40 transition-opacity duration-500 transform rotate-3 group-hover:rotate-0"></div>
              <img class="relative rounded-lg shadow-xl w-full max-w-md mx-auto transform transition-transform duration-700 group-hover:scale-105" 
                   src="album/my.jpg" 
                   alt="Potret desainer">
              <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-300 rounded-full opacity-30 animate-pulse"></div>
            </div>
          </div>
          <div class="lg:col-span-7" x-data="{ activeTab: 'bio' }">
            <div class="flex justify-start mb-6 space-x-4">
              <button @click="activeTab = 'bio'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                      :class="activeTab === 'bio' ? 'bg-gradient-to-r from-blue-500 to-teal-500 text-white' : 'bg-gray-200 text-gray-900 hover:bg-gray-300'"
                      aria-label="Lihat Profil">
                Profil
              </button>
              <button @click="activeTab = 'skills'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                      :class="activeTab === 'skills' ? 'bg-gradient-to-r from-blue-500 to-teal-500 text-white' : 'bg-gray-200 text-gray-900 hover:bg-gray-300'"
                      aria-label="Lihat Keahlian">
                Keahlian
              </button>
              <button @click="activeTab = 'philosophy'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-all duration-300"
                      :class="activeTab === 'philosophy' ? 'bg-gradient-to-r from-blue-500 to-teal-500 text-white' : 'bg-gray-200 text-gray-900 hover:bg-gray-300'"
                      aria-label="Lihat Filosofi">
                Filosofi
              </button>
            </div>
            <div x-show="activeTab === 'bio'" 
                 class="space-y-4 text-gray-600">
              <p>
                Saya <strong>Ahmet Mahrus</strong>, seorang desainer grafis dengan hasrat untuk bercerita melalui visual. Dengan pengalaman lebih dari 4 minggu, saya telah bekerja dengan teman, menciptakan desain yang memikat dan menyentuh.
              </p>
              <p>
                Perjalanan saya dimulai dengan kecintaan pada tipografi dan teori warna, berkembang menjadi karier di mana saya menggabungkan strategi dan kreativitas untuk menciptakan pengalaman merek yang berkesan.
              </p>
              <p>
                Di luar desain, saya adalah penjelajah mahasiswa, mengabadikan desain saya melalui poster dan membimbing generasi desainer berikutnya.
              </p>
            </div>
            <div x-show="activeTab === 'skills'" 
                 class="grid grid-cols-2 gap-4">
              <div class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
                <h3 class="text-blue-500 font-semibold">Identitas Merek</h3>
                <p class="text-sm text-gray-600">Menciptakan sistem visual yang kohesif dan bermakna.</p>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
                <h3 class="text-blue-500 font-semibold">Desain Grafis</h3>
                <p class="text-sm text-gray-600">Merancang pengalaman digital yang intuitif dan menarik.</p>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
                <h3 class="text-blue-500 font-semibold">Desain Cetak</h3>
                <p class="text-sm text-gray-600">Membuat materi editorial dan pemasaran yang berdampak.</p>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
                <h3 class="text-blue-500 font-semibold">Arah Kreatif</h3>
                <p class="text-sm text-gray-600">Memimpin proyek dengan visi dan ketepatan.</p>
              </div>
            </div>
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
        </div>
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6">
          <div class="bg-gradient-to-br from-blue-400 to-teal-400 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">20+</div>
            <div class="text-sm text-white/80 mt-2">Proyek Selesai</div>
          </div>
          <div class="bg-gradient-to-br from-blue-400 to-teal-400 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">4</div>
            <div class="text-sm text-white/80 mt-2">Minggu Pengalaman</div>
          </div>
          <div class="bg-gradient-to-br from-blue-400 to-teal-400 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">-100%</div>
            <div class="text-sm text-white/80 mt-2">Kepuasan Klien</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Resume Section -->
    <section id="resume" class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
            Perjalanan Profesional Saya
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Gambaran singkat tentang pengalaman, keahlian, dan pencapaian saya.
          </p>
        </div>
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="p-8 md:p-12">
            <div class="space-y-12">
              <!-- Experience -->
              <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Pengalaman</h3>
                <div class="space-y-8">
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-blue-500 to-teal-500 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-900">Desainer Grafis</h4>
                    <p class="text-sm text-blue-500">Yayasan Alfalah | 2019 - 2020</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-blue-500 to-teal-500 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-900">Desainer Grafis</h4>
                    <p class="text-sm text-blue-500">Yayasan Darul Furqon | 2020 - 2021</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-blue-500 to-teal-500 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-gray-900">Desainer Grafis</h4>
                    <p class="text-sm text-blue-500">Yayasan Al-Mujtama' | 2021 - 2022</p>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Education -->
              <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Pendidikan</h3>
                <div class="relative pl-8">
                  <div class="absolute left-0 top-2 w-4 h-4 bg-gradient-to-r from-blue-500 to-teal-500 rounded-full"></div>
                  <h4 class="text-lg font-semibold text-gray-900">Desain Grafis</h4>
                  <p class="text-sm text-blue-500">Universitas Pertiwi | 2023 - Sekarang</p>
                  <ul class="mt-2 text-gray-600 list-disc list-inside">
                    <li>Lulus dengan pujian, Makasih ya Mas.</li>
                    <li>Spesialisasi dalam tipografi dan komunikasi visual.</li>
                    <li>Menerima Penghargaan Desain Tergabut pada tahun 2019.</li>
                  </ul>
                </div>
              </div>
              <!-- Skills -->
              <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Keahlian</h3>
                <div class="flex flex-wrap gap-3">
                  <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-teal-500 text-white text-sm font-medium rounded-full hover:from-blue-400 hover:to-teal-400 transition-all duration-300">Adobe Photoshop</span>
                  <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-teal-500 text-white text-sm font-medium rounded-full hover:from-blue-400 hover:to-teal-400 transition-all duration-300">Adobe Illustrator</span>
                  <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-teal-500 text-white text-sm font-medium rounded-full hover:from-blue-400 hover:to-teal-400 transition-all duration-300">Figma</span>
                  <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-teal-500 text-white text-sm font-medium rounded-full hover:from-blue-400 hover:to-teal-400 transition-all duration-300">CorelDraw</span>
                  <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-teal-500 text-white text-sm font-medium rounded-full hover:from-blue-400 hover:to-teal-400 transition-all duration-300">Canva</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
@endsection