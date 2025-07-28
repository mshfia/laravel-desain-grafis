<x-layout title="Portfolio">
<!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-white mt-5">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Add Contributor Button -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
          <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">
              Halo, Kontributor <span class="bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] bg-clip-text text-transparent">{{ session('user_name') ?? Auth::user()->name }}</span>
            </h2>
            <p class="mt-2 text-lg text-gray-600">
              Selamat datang di halaman kontributor!
            </p>
          </div>
          
          <!-- Add Contributor Button -->
          <div class="flex gap-4">
            <a href="{{ route('karya.create') }}" class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 hover:border-[rgba(14,83,112,0.3)] text-gray-700 rounded-lg transition-all shadow-sm hover:shadow-md hover:bg-gray-50">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[rgba(14,83,112,0.7)]" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
              </svg>
              <span class="text-[rgba(14,83,112,0.9)] font-medium">Upload Kontributor</span>
            </a>
          </div>
        </div>
        
        <!-- Search and Filter Row -->
        <div class="flex flex-col sm:flex-row gap-4 mb-8">
          <!-- Search Input -->
          <div class="relative flex-grow">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-[rgba(14,83,112,0.5)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
            <input 
              type="text" 
              class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-[rgba(14,83,112,0.3)] focus:border-transparent transition-all duration-200" 
              placeholder="Cari proyek..."
              x-model="searchQuery"
              @input.debounce.300ms="filterProjects()"
            >
          </div>
        </div>
        
          <center>
            {{-- Flash message success --}}
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
                    {{ session('success') }}
                </div>
            @endif
          </center>

        <!-- Portfolio Grid with Original Size Layout -->
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-2xl font-bold text-center mb-6">Karya Kontributor</h2>

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div 
                class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                x-data="{
                projects: {{ Js::from($kontributor->map(function($item) {
                    return [
                        'id' => $item->id,
                        'title' => $item->judul,
                        'description' => $item->deskripsi,
                        'image' => asset('upload/' . $item->gambar),
                        'tools' => $item->tema,
                        'contributor' => [
                            'id' => $item->user_id,
                            'name' => $item->user->name ?? 'Tidak diketahui',
                            'avatar' => asset('img/default-avatar.jpg')
                        ],
                        'category' => $item->tema,
                        'date' => $item->created_at->toDateString(),
                        'likes' => rand(5, 100)
                    ];
                })) }},
                
                filteredProjects: [],
                currentPage: 1,
                itemsPerPage: 12,
                totalPages: 1,
                searchQuery: '',
                selectedContributor: '',

                showImageModal: false,
                selectedImage: '',
                showDownloadPopup: false,

                init() {
                  this.filterProjects();
                  this.calculateTotalPages();
                },

                filterProjects() {
                  const q = this.searchQuery.toLowerCase();
                  this.filteredProjects = this.projects.filter(project => 
                    project.title.toLowerCase().includes(q) ||
                    project.description.toLowerCase().includes(q) ||
                    project.tools.toLowerCase().includes(q)
                  );
                  this.currentPage = 1;
                  this.calculateTotalPages();
                },

                calculateTotalPages() {
                  this.totalPages = Math.ceil(this.filteredProjects.length / this.itemsPerPage);
                },

                paginatedProjects() {
                  const start = (this.currentPage - 1) * this.itemsPerPage;
                  return this.filteredProjects.slice(start, start + this.itemsPerPage);
                },

                prevPage() {
                  if (this.currentPage > 1) this.currentPage--;
                },

                nextPage() {
                  if (this.currentPage < this.totalPages) this.currentPage++;
                },

                goToPage(p) {
                  this.currentPage = p;
                },

                openImageModal(imageUrl) {
                  this.selectedImage = imageUrl;
                  this.showImageModal = true;
                },

                openDownloadPopup(imageUrl) {
                  this.selectedImage = imageUrl;
                  this.showDownloadPopup = true;
                },

                downloadImage() {
                  const a = document.createElement('a');
                  a.href = this.selectedImage;
                  a.download = this.selectedImage.split('/').pop();
                  document.body.appendChild(a);
                  a.click();
                  document.body.removeChild(a);
                  this.showDownloadPopup = false;
                },

                getAspectRatio(w, h) {
                  const gcd = (a, b) => b === 0 ? a : gcd(b, a % b);
                  const d = gcd(w, h);
                  return `${w/d}/${h/d}`;
                },

                downloadImage(imageUrl) {
                  const a = document.createElement('a');
                  a.href = imageUrl;
                  a.setAttribute('download', imageUrl.split('/').pop());
                  document.body.appendChild(a);
                  a.click();
                  document.body.removeChild(a);
                }
              }"
            >
                <!-- Kartu proyek -->
                <template x-for="project in paginatedProjects()" :key="project.id">
                    <div class="group relative overflow-hidden rounded-lg shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-1 bg-white"
                        :style="`aspect-ratio: ${getAspectRatio(project.width, project.height)}`">

                        <img 
                          :src="project.image"
                          class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 cursor-pointer"
                          loading="lazy"
                          @click.prevent="openImageModal(project.image)"
                          @contextmenu.prevent="openDownloadPopup(project.image)"
                        >
                        <div class="flex flex-col items-end space-y-1">
                          <!-- Tombol Unduh -->
                          <button 
                            @click="downloadImage(project.image)"
                            class="text-white bg-white/20 hover:bg-white/30 p-1.5 rounded-full"
                            title="Unduh Gambar"
                          >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                          </button>

                          <!-- Tanggal -->
                          <span class="text-xs text-white/70" x-text="new Date(project.date).toLocaleDateString('id-ID')"></span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-4 flex flex-col justify-between">
                            <div class="flex justify-between items-start">
                                <span class="text-xs font-semibold text-white bg-orange-600 px-2 py-1 rounded-full" x-text="project.category"></span>
                                <span class="text-white text-xs bg-gray-700/60 px-2 py-1 rounded-full" x-text="project.likes + ' likes'"></span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg mb-1" x-text="project.title"></h3>
                                <p class="text-gray-200 text-sm mb-2" x-text="project.description"></p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <img :src="project.contributor.avatar" class="w-6 h-6 rounded-full border border-white/50">
                                        <span class="text-xs text-white" x-text="project.contributor.name"></span>
                                    </div>
                                    <span class="text-xs text-white/70" x-text="new Date(project.date).toLocaleDateString('id-ID')"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- Kosong -->
                <div x-show="filteredProjects.length === 0" class="col-span-full text-center py-12">
                    <h3 class="text-gray-500">Tidak ada karya ditemukan</h3>
                </div>
            </div>

            <!-- Modal Perbesar Gambar -->
            <div 
              x-show="showImageModal" 
              x-cloak
              x-transition 
              @click.away="showImageModal = false"
              class="fixed inset-0 z-50 flex items-center justify-center bg-black/70"
            >
              <div class="relative">
                <button 
                  @click="showImageModal = false" 
                  class="absolute -top-4 -right-4 bg-white rounded-full p-2 shadow hover:bg-red-100"
                >
                  ✕
                </button>
                <img 
                  :src="selectedImage" 
                  class="max-w-4xl max-h-[90vh] rounded shadow-lg"
                  @click.stop 
                />
              </div>
            </div>

            <!-- Popup Unduh -->
            <div 
              x-show="showDownloadPopup" 
              x-cloak
              x-transition 
              @click.away="showDownloadPopup = false"
              class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
            >
              <div class="bg-white p-6 rounded shadow-lg max-w-sm w-full text-center space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Unduh Gambar?</h3>
                <img :src="selectedImage" class="w-full max-h-40 object-contain mx-auto rounded" />
                <div class="flex justify-center gap-4 mt-4">
                  <button @click="downloadImage()" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Unduh</button>
                  <button @click="showDownloadPopup = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Batal</button>
                </div>
              </div>
            </div>
        </div>

        <!-- Pagination -->
        <div 
          class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4"
          x-show="filteredProjects.length > 0"
        >
          <div class="text-sm text-gray-500">
            Menampilkan <span x-text="(currentPage - 1) * itemsPerPage + 1"></span> - 
            <span x-text="Math.min(currentPage * itemsPerPage, filteredProjects.length)"></span> dari 
            <span x-text="filteredProjects.length"></span> hasil
          </div>
          
          <div class="flex flex-wrap gap-2">
            <button 
              @click="prevPage()"
              :disabled="currentPage === 1"
              :class="{'opacity-50 cursor-not-allowed': currentPage === 1}"
              class="px-4 py-2 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors"
            >
              &larr; Sebelumnya
            </button>
            
            <template x-for="page in totalPages" :key="page">
              <button
                @click="goToPage(page)"
                :class="{
                  'bg-[rgba(14,83,112,0.7)] border-[rgba(14,83,112,0.7)] text-white': currentPage === page, 
                  'hover:bg-gray-100 border-gray-300': currentPage !== page
                }"
                class="px-4 py-2 rounded-lg border text-sm font-medium transition-all"
                x-text="page"
              ></button>
            </template>
            
            <button 
              @click="nextPage()"
              :disabled="currentPage === totalPages"
              :class="{'opacity-50 cursor-not-allowed': currentPage === totalPages}"
              class="px-4 py-2 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors"
            >
              Selanjutnya &rarr;
            </button>
          </div>
        </div>
      </div>
    </section>
</x-layout>