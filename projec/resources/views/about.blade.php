<x-layout title="Profil">
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
                        :class="activeTab === 'skills' ? 'bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] text-white' : 'bg-gray-300 text-gray-800 hover:bg-gray-400'"
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
</x-layout>