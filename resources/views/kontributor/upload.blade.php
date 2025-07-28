<x-layout title="Portfolio">

<!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-white mt-5">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Add Contributor Button -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
          <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">
              Upload <span class="bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] bg-clip-text text-transparent">Kontributor</span>
            </h2>
          </div>
        </div>
        <body class="bg-white font-poppins min-h-screen flex items-center justify-center p-4">
          <!-- Decorative Elements -->
          <center><div class="fixed top-10 left-10 w-32 h-32 rounded-full bg-[rgba(14,83,112,0.1)] animate-float"></div>
            <div class="fixed bottom-20 right-20 w-40 h-40 rounded-full bg-[rgba(173,94,45,0.1)] animate-float-delay"></div>

            <div class="w-full max-w-xl bg-white rounded-3xl shadow-lg overflow-hidden z-10 border border-gray-100 transition-all duration-500 hover:shadow-xl">
                <div class="relative h-32 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] flex items-end">
                    <div class="w-full p-6 pt-16 text-center">
                        <h1 class="text-2xl font-bold text-white">Upload Karya</h1>
                        <p class="text-white/80">Kontributor - Desain Grafis</p>
                    </div>
                </div>

                <div class="p-8 pt-12">
                    @if (session('success'))
                        <div class="mb-4 text-green-600 font-medium">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('karya.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div>
                            <label for="judul" class="block mb-2 text-sm font-medium text-gray-700">Judul Karya</label>
                            <input type="text" name="judul" id="judul" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500">
                        </div>

                        <div>
                            <label for="tema" class="block mb-2 text-sm font-medium text-gray-700">Tema</label>
                            <input type="text" name="tema" id="tema" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500">
                        </div>

                        <div>
                            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500"></textarea>
                        </div>

                        <div>
                            <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700">Upload Gambar</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*" required class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-white file:bg-primary-500 hover:file:bg-primary-600">
                        </div>

                        <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] hover:from-[rgba(14,83,112,0.8)] hover:via-[rgba(173,94,45,0.8)] hover:to-[rgba(121,155,193,0.8)] text-white font-semibold rounded-lg shadow-md hover:shadow-btn-hover transition-all duration-300 transform hover:-translate-y-0.5">
                            Simpan Karya
                        </button>
                    </form>
                </div>
            </div></center>
        </body>
      </div>
    </section>
</x-layout>