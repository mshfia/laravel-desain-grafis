<x-layout title="Portfolio">
<!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-white mt-5">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Add Contributor Button -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
          <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">
              Proyek <span class="bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] bg-clip-text text-transparent">Kreatif</span>
            </h2>
            <p class="mt-2 text-lg text-gray-600">
              Kumpulan karya desain profesional dari berbagai kontributor.
            </p>
          </div>
          
          <!-- Add Contributor Button -->
          <div class="flex gap-4">
            <a href="{{ route('register') }}" class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 hover:border-[rgba(14,83,112,0.3)] text-gray-700 rounded-lg transition-all shadow-sm hover:shadow-md hover:bg-gray-50">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[rgba(14,83,112,0.7)]" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
              </svg>
              <span class="text-[rgba(14,83,112,0.9)] font-medium">Daftar Kontributor</span>
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
        
        <!-- Portfolio Grid with Original Size Layout -->
        <div 
          class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
          x-data="{
            showAddContributor: false,
            newContributor: { name: '', email: '' },
            projects: [
              {
                id: 1,
                title: 'Branding Logo Nama',
                description: 'Identitas Nama Saya',
                image: '{{ asset('album/bck.png') }}',
                width: 1200,
                height: 800,
                tools: 'Adobe Illustrator, Photoshop',
                contributor: { id: 1, name: 'Anda Sendiri', avatar: '{{ asset('images/default-avatar.jpg') }}' },
                category: 'Branding',
                date: '2023-05-15',
                likes: 42
              },
              {
                id: 2,
                title: 'Desain Poster',
                description: 'Canva',
                image: '{{ asset('album/hitam.png') }}',
                width: 800,
                height: 1200,
                tools: 'Canva Pro',
                contributor: { id: 2, name: 'Tim Desain', avatar: '{{ asset('images/team-avatar.jpg') }}' },
                category: 'Poster',
                date: '2023-06-22',
                likes: 28
              },
              {
                id: 3,
                title: 'Poster Kartini',
                description: 'CorelDraw, Cetak',
                image: '{{ asset('album/kartini.jpg') }}',
                width: 1000,
                height: 1500,
                tools: 'CorelDraw X8',
                contributor: { id: 1, name: 'Anda Sendiri', avatar: '{{ asset('images/default-avatar.jpg') }}' },
                category: 'Poster',
                date: '2023-04-21',
                likes: 56
              },
              // Add more projects with their original dimensions
            ],
            filteredProjects: [],
            contributors: [
              { id: 1, name: 'Anda Sendiri', email: 'you@example.com' },
              { id: 2, name: 'Tim Desain', email: 'team@example.com' }
            ],
            selectedContributor: '',
            searchQuery: '',
            currentPage: 1,
            itemsPerPage: 12,
            totalPages: 1,
            
            init() {
              this.filterProjects();
              this.calculateTotalPages();
            },
            
            filterProjects() {
              this.filteredProjects = this.projects.filter(project => {
                const matchesSearch = project.title.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                     project.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                     project.tools.toLowerCase().includes(this.searchQuery.toLowerCase());
                
                const matchesContributor = !this.selectedContributor || 
                                         project.contributor.id == this.selectedContributor;
                
                return matchesSearch && matchesContributor;
              });
              
              this.currentPage = 1;
              this.calculateTotalPages();
            },
            
            calculateTotalPages() {
              this.totalPages = Math.ceil(this.filteredProjects.length / this.itemsPerPage);
            },
            
            paginatedProjects() {
              const start = (this.currentPage - 1) * this.itemsPerPage;
              const end = start + this.itemsPerPage;
              return this.filteredProjects.slice(start, end);
            },
            
            addContributor() {
              if (!this.newContributor.name || !this.newContributor.email) return;
              
              const newId = Math.max(...this.contributors.map(c => c.id)) + 1;
              this.contributors.push({
                id: newId,
                name: this.newContributor.name,
                email: this.newContributor.email
              });
              
              this.newContributor = { name: '', email: '' };
              this.showAddContributor = false;
            },
            
            getAspectRatio(width, height) {
              const gcd = (a, b) => b === 0 ? a : gcd(b, a % b);
              const divisor = gcd(width, height);
              return `${width/divisor}/${height/divisor}`;
            },
            
            prevPage() {
              if (this.currentPage > 1) {
                this.currentPage--;
              }
            },
            
            nextPage() {
              if (this.currentPage < this.totalPages) {
                this.currentPage++;
              }
            },
            
            goToPage(page) {
              this.currentPage = page;
            }
          }"
        >
          <!-- Project Cards with Original Aspect Ratio -->
          <template x-for="project in paginatedProjects" :key="project.id">
            <div 
              class="group relative overflow-hidden rounded-lg shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-1 bg-white"
              :style="`aspect-ratio: ${getAspectRatio(project.width, project.height)}`"
            >
              <img 
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                :src="project.image" 
                :alt="project.title"
                loading="lazy"
                :width="project.width"
                :height="project.height"
              >
              
              <!-- Project Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-[rgba(14,83,112,0.8)] via-[rgba(14,83,112,0.2)] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-between p-4">
                <!-- Top Section - Category and Likes -->
                <div class="flex justify-between items-start">
                  <span class="px-2 py-1 bg-[rgba(173,94,45,0.9)] text-white text-xs font-semibold rounded-full" x-text="project.category"></span>
                  <span class="flex items-center text-white text-xs bg-[rgba(121,155,193,0.7)] px-2 py-1 rounded-full">
                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                      <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    <span x-text="project.likes"></span>
                  </span>
                </div>
                
                <!-- Bottom Section - Project Info -->
                <div>
                  <h3 class="text-white font-bold text-lg mb-1" x-text="project.title"></h3>
                  <p class="text-[rgba(121,155,193,0.9)] text-sm mb-2" x-text="project.description"></p>
                  
                  <!-- Contributor Info -->
                  <div class="flex items-center justify-between">
                    <div class="flex items-center">
                      <img 
                        :src="project.contributor.avatar" 
                        class="w-6 h-6 rounded-full mr-2 border border-white/50"
                        :alt="project.contributor.name"
                      >
                      <span class="text-xs text-white" x-text="project.contributor.name"></span>
                    </div>
                    <span class="text-xs text-white/80" x-text="new Date(project.date).toLocaleDateString('id-ID')"></span>
                  </div>
                </div>
              </div>
            </div>
          </template>
          
          <!-- Empty State -->
          <div 
            x-show="filteredProjects.length === 0" 
            class="col-span-full text-center py-12"
            x-transition
          >
            <div class="mx-auto w-24 h-24 bg-[rgba(14,83,112,0.1)] rounded-full flex items-center justify-center">
              <svg class="h-12 w-12 text-[rgba(14,83,112,0.7)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="mt-4 text-lg font-medium text-gray-800">Tidak ada proyek ditemukan</h3>
            <p class="mt-1 text-gray-500">Coba ubah kriteria pencarian atau filter</p>
            <button @click="searchQuery = ''; selectedContributor = ''; filterProjects();" class="mt-4 px-4 py-2 bg-white border border-[rgba(14,83,112,0.3)] text-[rgba(14,83,112,0.9)] hover:bg-[rgba(14,83,112,0.05)] rounded-lg transition-colors text-sm">
              Reset Pencarian
            </button>
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