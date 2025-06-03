@extends('layouts.app')

@section('title', 'Desain Grafis')

@section('content')

<section id="about" class="py-16 bg-gradient-to-b from-gray-800 to-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-extrabold text-white sm:text-5xl">
            Sang Desain Grafis
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-300">
            Berdedikasi mengubah ide menjadi realitas visual yang menakjubkan.
          </p>
        </div>

        <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
          <div class="lg:col-span-5 mb-12 lg:mb-0">
            <div class="relative group">
              <div class="absolute inset-0 bg-indigo-600 rounded-lg opacity-20 group-hover:opacity-40 transition-opacity duration-500 transform rotate-3 group-hover:rotate-0"></div>
              <img class="relative rounded-lg shadow-2xl w-full max-w-md mx-auto transform transition-transform duration-700 group-hover:scale-105" 
                   src="album/my.jpg" 
                   alt="Potret desainer">
              <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-indigo-400 rounded-full opacity-30 animate-pulse"></div>
            </div>
          </div>

          <div class="lg:col-span-7" x-data="{ activeTab: 'bio' }">
            <div class="flex justify-start mb-6 space-x-4">
              <button @click="activeTab = 'bio'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-300"
                      :class="activeTab === 'bio' ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600'">
                Profil
              </button>
              <button @click="activeTab = 'skills'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-300"
                      :class="activeTab === 'skills' ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600'">
                Keahlian
              </button>
              <button @click="activeTab = 'philosophy'" 
                      class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-300"
                      :class="activeTab === 'philosophy' ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600'">
                Filosofi
              </button>
            </div>
            <div x-show="activeTab === 'bio'" 
                 class="space-y-4 text-gray-300">
              <p>
                Saya <strong>Ahmet Mahrus</strong>, seorang desainer grafis dengan hasrat untuk bercerita melalui visual. Dengan pengalaman lebih dari 4 minggu, saya telah bekerja dengan teman, menciptakan desain yang memikat dan menyentuh.
              </p>
              <p>
                Perjalanan saya dimulai dengan kecintaan pada tipografi dan teori warna, berkembang menjadi karier di mana saya menggabungkan strategi dan kreativitas untuk menciptakan pengalaman merek yang berkesan.
              </p>
              <p>
                Di Luar Desain, saya adalah penjelajah mahasiswa, mengabadikan desain saya melalui poster dan membimbing generasi desainer berikutnya.
              </p>
            </div>

            <div x-show="activeTab === 'skills'" 
                 class="grid grid-cols-2 gap-4">
              <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:bg-gray-700 transition-colors duration-300">
                <h3 class="text-indigo-400 font-semibold">Identitas Merek</h3>
                <p class="text-sm text-gray-400">Menciptakan sistem visual yang kohesif dan bermakna.</p>
              </div>
              <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:bg-gray-700 transition-colors duration-300">
                <h3 class="text-indigo-400 font-semibold">Desain Grafis</h3>
                <p class="text-sm text-gray-400">Merancang pengalaman digital yang intuitif dan menarik.</p>
              </div>
              <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:bg-gray-700 transition-colors duration-300">
                <h3 class="text-indigo-400 font-semibold">Desain Cetak</h3>
                <p class="text-sm text-gray-400">Membuat materi editorial dan pemasaran yang berdampak.</p>
              </div>
              <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:bg-gray-700 transition-colors duration-300">
                <h3 class="text-indigo-400 font-semibold">Arah Kreatif</h3>
                <p class="text-sm text-gray-400">Memimpin proyek dengan visi dan ketepatan.</p>
              </div>
            </div>

            <div x-show="activeTab === 'philosophy'" 
                 class="space-y-4 text-gray-300">
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
          <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">20+</div>
            <div class="text-sm text-indigo-200 mt-2">Proyek Selesai</div>
          </div>
          <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">4</div>
            <div class="text-sm text-indigo-200 mt-2">Minggu Pengalaman</div>
          </div>
          <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-6 rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105">
            <div class="text-3xl text-white font-bold">-100%</div>
            <div class="text-sm text-indigo-200 mt-2">Kepuasan Klien</div>
          </div>
        </div>
      </div>
    </section>

@endsection