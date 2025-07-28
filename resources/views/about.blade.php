<x-layout title="Profil Tim">
<!-- About Section -->
    <section id="about" class="mt-10 py-16 bg-gradient-to-b from-gray-50 to-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="glass-morphism-inline p-6 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20 inline-block">
            <h2 class="text-4xl font-extrabold text-gray-800 sm:text-5xl">
              Profil <span class="bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Tim Kami</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
              Kolaborasi kreatif yang mengubah visi menjadi realitas luar biasa.
            </p>
          </div>
        </div>

        <!-- Team Introduction -->
        <div class="glass-morphism p-8 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20 mb-16">
          <p class="text-center text-gray-600 text-lg">
            Kami adalah tim multidisiplin yang terdiri dari 5 profesional kreatif, masing-masing membawa keahlian unik untuk menciptakan solusi desain yang holistik. Dengan kombinasi keterampilan dalam desain grafis, strategi merek, ilustrasi, fotografi, dan pengembangan kreatif, kami memberikan pendekatan komprehensif untuk setiap proyek.
          </p>
        </div>

        <!-- Team Members -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
  <!-- Member 1 - Frontend Developer -->
  <div class="group relative" x-data="{ showDetails: false }">
    <div class="relative overflow-hidden rounded-xl shadow-xl transition-all duration-500 transform group-hover:scale-105">
      <img class="w-full h-80 object-cover" 
           src="{{ asset('album/team1.jpg') }}" 
           alt="Frontend Developer" loading="lazy">
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
        <div>
          <h3 class="text-white text-2xl font-bold">Faiq Shendy Yusuf</h3>
          <p class="text-gray-200">Frontend Developer</p>
          <button @click="showDetails = true" class="mt-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-md text-white border border-white/30 hover:bg-white/30 transition-all">
            Lihat Profil
          </button>
        </div>
      </div>
    </div>
    
    <!-- Modal for Member 1 -->
    <div x-show="showDetails" x-cloak @click.away="showDetails = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
      <div class="glass-morphism w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <div class="relative lg:col-span-1">
            <img class="w-full h-full object-cover" src="{{ asset('album/team1.jpg') }}" alt="Faiq Shendy Yusuf" loading="lazy">
          </div>
          <div class="lg:col-span-2 p-8 bg-white/90">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h4 class="text-xl font-semibold text-gray-800">Biodata</h4>
                <p class="text-gray-600 mt-2">Mengembangkan antarmuka pengguna yang responsif dan interaktif dengan pengalaman 5 tahun di pengembangan frontend.</p>
              </div>
              <button @click="showDetails = false" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div>
                <h5 class="text-sm font-medium text-gray-500">Keahlian</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    React.js
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Vue.js
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    JavaScript
                  </li>
                </ul>
              </div>
              <div>
                <h5 class="text-sm font-medium text-gray-500">Kontak</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    faiqsyendyy@gmail.com
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                    </svg>
                    @faiqshendy
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-t pt-4">
              <p class="text-gray-600 italic">"Antarmuka yang baik adalah yang tidak hanya indah tetapi juga memberikan pengalaman pengguna yang mulus dan intuitif."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Member 2 - Database Specialist -->
  <div class="group relative" x-data="{ showDetails: false }">
    <div class="relative overflow-hidden rounded-xl shadow-xl transition-all duration-500 transform group-hover:scale-105">
      <img class="w-full h-80 object-cover" 
           src="{{ asset('album/team2.jpg') }}" 
           alt="Database Specialist" loading="lazy">
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
        <div>
          <h3 class="text-white text-2xl font-bold">Adi Robby Kurniawan</h3>
          <p class="text-gray-200">Database Specialist</p>
          <button @click="showDetails = true" class="mt-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-md text-white border border-white/30 hover:bg-white/30 transition-all">
            Lihat Profil
          </button>
        </div>
      </div>
    </div>
    
    <!-- Modal for Member 2 -->
    <div x-show="showDetails" x-cloak @click.away="showDetails = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
      <div class="glass-morphism w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <div class="relative lg:col-span-1">
            <img class="w-full h-full object-cover" src="{{ asset('album/team2.jpg') }}" alt="Adi Robby Kurniawan" loading="lazy">
          </div>
          <div class="lg:col-span-2 p-8 bg-white/90">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h4 class="text-xl font-semibold text-gray-800">Biodata</h4>
                <p class="text-gray-600 mt-2">Spesialis dalam desain dan optimasi database dengan fokus pada keamanan dan kinerja sistem.</p>
              </div>
              <button @click="showDetails = false" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div>
                <h5 class="text-sm font-medium text-gray-500">Keahlian</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    MySQL
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    MongoDB
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Database Optimization
                  </li>
                </ul>
              </div>
              <div>
                <h5 class="text-sm font-medium text-gray-500">Kontak</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    adirobby@gmail.com
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                    </svg>
                    @rbykrnwan
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-t pt-4">
              <p class="text-gray-600 italic">"Data adalah aset paling berharga, dan tugas kami adalah menjaganya aman, terorganisir, dan mudah diakses."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Member 3 - UI/UX Designer -->
  <div class="group relative" x-data="{ showDetails: false }">
    <div class="relative overflow-hidden rounded-xl shadow-xl transition-all duration-500 transform group-hover:scale-105">
      <img class="w-full h-80 object-cover" 
           src="{{ asset('album/team3.jpg') }}" 
           alt="UI/UX Designer" loading="lazy">
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
        <div>
          <h3 class="text-white text-2xl font-bold">Ach Mahrus Shofi</h3>
          <p class="text-gray-200">UI/UX Designer</p>
          <button @click="showDetails = true" class="mt-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-md text-white border border-white/30 hover:bg-white/30 transition-all">
            Lihat Profil
          </button>
        </div>
      </div>
    </div>
    
    <!-- Modal for Member 3 -->
    <div x-show="showDetails" x-cloak @click.away="showDetails = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
      <div class="glass-morphism w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <div class="relative lg:col-span-1">
            <img class="w-full h-full object-cover" src="{{ asset('album/team3.jpg') }}" alt="Ach Mahrus Shofi" loading="lazy">
          </div>
          <div class="lg:col-span-2 p-8 bg-white/90">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h4 class="text-xl font-semibold text-gray-800">Biodata</h4>
                <p class="text-gray-600 mt-2">Fokus pada pengalaman pengguna yang intuitif dan antarmuka yang menarik secara visual.</p>
              </div>
              <button @click="showDetails = false" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div>
                <h5 class="text-sm font-medium text-gray-500">Keahlian</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    User Research
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Wireframing
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Prototyping
                  </li>
                </ul>
              </div>
              <div>
                <h5 class="text-sm font-medium text-gray-500">Kontak</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    mahrus.shofi@gmail.com
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                    </svg>
                    @mahrusahmet
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-t pt-4">
              <p class="text-gray-600 italic">"Desain yang baik adalah ketika fungsi dan estetika bertemu dalam harmoni sempurna."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Member 4 - Backend Developer -->
  <div class="group relative" x-data="{ showDetails: false }">
    <div class="relative overflow-hidden rounded-xl shadow-xl transition-all duration-500 transform group-hover:scale-105">
      <img class="w-full h-80 object-cover" 
           src="{{ asset('album/team4.jpg') }}" 
           alt="Backend Developer" loading="lazy">
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
        <div>
          <h3 class="text-white text-2xl font-bold">Roby Julyana</h3>
          <p class="text-gray-200">Backend Developer</p>
          <button @click="showDetails = true" class="mt-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-md text-white border border-white/30 hover:bg-white/30 transition-all">
            Lihat Profil
          </button>
        </div>
      </div>
    </div>
    
    <!-- Modal for Member 4 -->
    <div x-show="showDetails" x-cloak @click.away="showDetails = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
      <div class="glass-morphism w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <div class="relative lg:col-span-1">
            <img class="w-full h-full object-cover" src="{{ asset('album/team4.jpg') }}" alt="Roby Julyana" loading="lazy">
          </div>
          <div class="lg:col-span-2 p-8 bg-white/90">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h4 class="text-xl font-semibold text-gray-800">Biodata</h4>
                <p class="text-gray-600 mt-2">Membangun logika bisnis dan infrastruktur server yang kuat dan skalabel untuk aplikasi.</p>
              </div>
              <button @click="showDetails = false" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div>
                <h5 class="text-sm font-medium text-gray-500">Keahlian</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Node.js
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Python
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    API Development
                  </li>
                </ul>
              </div>
              <div>
                <h5 class="text-sm font-medium text-gray-500">Kontak</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    robyjulyana@gmail.com
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                    </svg>
                    @robyjulyana
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-t pt-4">
              <p class="text-gray-600 italic">"Backend yang baik adalah yang tidak terlihat tetapi membuat semua yang terlihat bekerja dengan sempurna."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Member 5 - Testing & Documentation -->
  <div class="group relative" x-data="{ showDetails: false }">
    <div class="relative overflow-hidden rounded-xl shadow-xl transition-all duration-500 transform group-hover:scale-105">
      <img class="w-full h-80 object-cover" 
           src="{{ asset('album/team5.jpg') }}" 
           alt="Testing & Documentation" loading="lazy">
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
        <div>
          <h3 class="text-white text-2xl font-bold">Ega Bunga Alqiah</h3>
          <p class="text-gray-200">Testing & Documentation</p>
          <button @click="showDetails = true" class="mt-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-md text-white border border-white/30 hover:bg-white/30 transition-all">
            Lihat Profil
          </button>
        </div>
      </div>
    </div>
    
    <!-- Modal for Member 5 -->
    <div x-show="showDetails" x-cloak @click.away="showDetails = false" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
      <div class="glass-morphism w-full max-w-4xl rounded-xl overflow-hidden shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <div class="relative lg:col-span-1">
            <img class="w-full h-full object-cover" src="{{ asset('album/team5.jpg') }}" alt="Ega Bunga Alqiah" loading="lazy">
          </div>
          <div class="lg:col-span-2 p-8 bg-white/90">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h4 class="text-xl font-semibold text-gray-800">Biodata</h4>
                <p class="text-gray-600 mt-2">Memastikan kualitas produk melalui pengujian menyeluruh dan dokumentasi yang jelas.</p>
              </div>
              <button @click="showDetails = false" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div>
                <h5 class="text-sm font-medium text-gray-500">Keahlian</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Automated Testing
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Quality Assurance
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Technical Writing
                  </li>
                </ul>
              </div>
              <div>
                <h5 class="text-sm font-medium text-gray-500">Kontak</h5>
                <ul class="mt-2 space-y-1">
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    bungalqiah@gmail.com
                  </li>
                  <li class="text-gray-700 flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[rgba(14,83,112,0.9)]" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                    </svg>
                    @bungalqiah
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-t pt-4">
              <p class="text-gray-600 italic">"Kualitas bukanlah kebetulan, melainkan hasil dari upaya yang sungguh-sungguh dan perhatian terhadap detail."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        <div class="glass-morphism p-8 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20">
          <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">Pencapaian & Keunggulan Tim</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Diagram Lingkaran Proyek -->
            <div class="flex flex-col items-center">
              <div class="relative w-32 h-32 mb-4">
                <svg class="w-full h-full" viewBox="0 0 36 36">
                  <path
                    d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831"
                    fill="none"
                    stroke="#E5E7EB"
                    stroke-width="3"
                  />
                  <path
                    d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831"
                    fill="none"
                    stroke="rgba(14,83,112,0.9)"
                    stroke-width="3"
                    stroke-dasharray="85, 100"
                    stroke-linecap="round"
                  />
                  <text x="18" y="20.5" text-anchor="middle" fill="rgba(14,83,112,0.9)" font-size="10" font-weight="bold">85%</text>
                </svg>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-[rgba(14,83,112,0.9)]">75+</div>
                <h4 class="text-lg font-semibold text-gray-800 mt-2">Proyek Terselesaikan</h4>
                <p class="text-gray-600 text-sm mt-1">Dari berbagai industri dengan tingkat kepuasan tinggi</p>
              </div>
            </div>

            <!-- Diagram Batang Klien -->
            <div class="flex flex-col items-center">
              <div class="relative w-32 h-32 mb-4 flex items-end justify-center space-x-2">
                <div class="w-6 bg-gray-200 rounded-t-sm" style="height: 40%"></div>
                <div class="w-6 bg-gray-200 rounded-t-sm" style="height: 60%"></div>
                <div class="w-6 bg-[rgba(14,83,112,0.9)] rounded-t-sm" style="height: 90%"></div>
                <div class="w-6 bg-gray-200 rounded-t-sm" style="height: 50%"></div>
                <div class="w-6 bg-gray-200 rounded-t-sm" style="height: 70%"></div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-[rgba(14,83,112,0.9)]">30+</div>
                <h4 class="text-lg font-semibold text-gray-800 mt-2">Klien Puas</h4>
                <p class="text-gray-600 text-sm mt-1">Tingkat kepuasan 9.5/10 berdasarkan survei klien</p>
              </div>
            </div>

            <!-- Diagram Pie Keahlian -->
            <div class="flex flex-col items-center">
              <div class="relative w-32 h-32 mb-4">
                <svg class="w-full h-full" viewBox="0 0 36 36">
                  <circle cx="18" cy="18" r="15.9155" fill="#E5E7EB"/>
                  <path
                    d="M18 18 L18 2 A15.9155 15.9155 0 0 1 33 18 Z"
                    fill="rgba(14,83,112,0.7)"
                  />
                  <path
                    d="M18 18 L33 18 A15.9155 15.9155 0 0 1 25 33 Z"
                    fill="rgba(14,83,112,0.8)"
                  />
                  <path
                    d="M18 18 L25 33 A15.9155 15.9155 0 0 1 2 18 Z"
                    fill="rgba(14,83,112,0.9)"
                  />
                  <text x="18" y="18" text-anchor="middle" fill="white" font-size="4" dy=".3em">5+</text>
                </svg>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-[rgba(14,83,112,0.9)]">5+</div>
                <h4 class="text-lg font-semibold text-gray-800 mt-2">Bidang Keahlian</h4>
                <p class="text-gray-600 text-sm mt-1">Spesialisasi multidisiplin yang saling melengkapi</p>
              </div>
            </div>
          </div>

          <!-- Garis Pemisah -->
          <div class="my-8 border-t border-gray-200/50"></div>

          <!-- Statistik Tambahan -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center p-4 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
              <div class="text-2xl font-bold text-[rgba(14,83,112,0.9)]">100%</div>
              <div class="text-gray-600 text-sm mt-1">Dedikasi Tim</div>
            </div>
            <div class="text-center p-4 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
              <div class="text-2xl font-bold text-[rgba(14,83,112,0.9)]">24/7</div>
              <div class="text-gray-600 text-sm mt-1">Dukungan Kreatif</div>
            </div>
            <div class="text-center p-4 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
              <div class="text-2xl font-bold text-[rgba(14,83,112,0.9)]">3x</div>
              <div class="text-gray-600 text-sm mt-1">Revisi Garansi</div>
            </div>
            <div class="text-center p-4 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
              <div class="text-2xl font-bold text-[rgba(14,83,112,0.9)]">99%</div>
              <div class="text-gray-600 text-sm mt-1">Tepat Waktu</div>
            </div>
          </div>
        </div>

        <!-- Team Philosophy -->
        <div class="mt-16">
          <div class="glass-morphism p-8 rounded-xl backdrop-blur-lg bg-white/15 shadow-lg border border-white/20">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Tools yang Kami Kuasai</h3>
            <div class="relative overflow-hidden">
              <!-- Marquee Container -->
              <div class="flex animate-marquee whitespace-nowrap py-4">
                <!-- Marquee Content - Duplicate for seamless looping -->
                <!-- Adobe Illustrator -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-illustrator.svg') }}" alt="Adobe Illustrator" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Illustrator</span>
                </div>

                <!-- Adobe Photoshop -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-photoshop.svg') }}" alt="Adobe Photoshop" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Photoshop</span>
                </div>

                <!-- Figma -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-figma.svg') }}" alt="Figma" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Figma</span>
                </div>

                <!-- HTML -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-html.svg') }}" alt="HTML" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">HTML</span>
                </div>

                <!-- Tailwind CSS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-tailwind.svg') }}" alt="Tailwind CSS" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Tailwind</span>
                </div>

                <!-- CSS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-css.svg') }}" alt="CSS" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">CSS</span>
                </div>

                <!-- JavaScript -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-javascript.svg') }}" alt="JavaScript" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">JavaScript</span>
                </div>

                <!-- Java -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-java.svg') }}" alt="Java" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Java</span>
                </div>

                <!-- MySQL -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-mysql.svg') }}" alt="MySQL" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">MySQL</span>
                </div>

                <!-- Alpine JS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-alpinejs.svg') }}" alt="Alpine.js" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Alpine.js</span>
                </div>
                
                <!-- Duplicate the content for seamless looping -->
                <!-- Adobe Illustrator -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-illustrator.svg') }}" alt="Adobe Illustrator" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Illustrator</span>
                </div>

                <!-- Adobe Photoshop -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-photoshop.svg') }}" alt="Adobe Photoshop" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Photoshop</span>
                </div>

                <!-- Figma -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-figma.svg') }}" alt="Figma" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Figma</span>
                </div>

                <!-- HTML -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-html.svg') }}" alt="HTML" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">HTML</span>
                </div>

                <!-- Tailwind CSS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-tailwind.svg') }}" alt="Tailwind CSS" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Tailwind</span>
                </div>

                <!-- CSS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-css.svg') }}" alt="CSS" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">CSS</span>
                </div>

                <!-- JavaScript -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-javascript.svg') }}" alt="JavaScript" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">JavaScript</span>
                </div>

                <!-- Java -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-java.svg') }}" alt="Java" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Java</span>
                </div>

                <!-- MySQL -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-mysql.svg') }}" alt="MySQL" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">MySQL</span>
                </div>

                <!-- Alpine JS -->
                <div class="inline-flex flex-col items-center p-4 bg-white/5 rounded-lg hover:bg-white/20 transition-all duration-300 group hover:shadow-md mx-2">
                  <img src="{{ asset('album/icon-alpinejs.svg') }}" alt="Alpine.js" class="w-16 h-16 mb-3 object-contain group-hover:scale-110 transition-transform" loading="lazy">
                  <span class="text-sm font-medium text-gray-800 group-hover:text-[rgba(14,83,112,0.9)]">Alpine.js</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <style>
          @keyframes marquee {
            0% {
              transform: translateX(0);
            }
            100% {
              transform: translateX(-50%);
            }
          }
          .animate-marquee {
            animation: marquee 20s linear infinite;
            display: inline-block;
          }
          .animate-marquee:hover {
            animation-play-state: paused;
          }
          [x-cloak] { display: none !important; }
        </style>
      </div>
    </section>
</x-layout>