<x-layout title="Kontak">
<!-- Contact Section -->
    <section id="contact" class="py-16 bg-white mt-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800 sm:text-5xl">
            Hubungi <span class="bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] bg-clip-text text-transparent">Saya</span>
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
            Mau bikin desain yang menarik.
          </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Contact Form -->
          <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-8 md:p-10 transition-all hover:shadow-xl">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
            <form class="space-y-6" id="contactForm">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[rgba(121,155,193,0.7)] focus:border-transparent transition-all placeholder-gray-400" placeholder="Masukkan nama Anda">
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[rgba(121,155,193,0.7)] focus:border-transparent transition-all placeholder-gray-400" placeholder="email@contoh.com">
              </div>
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek <span class="text-red-500">*</span></label>
                <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[rgba(121,155,193,0.7)] focus:border-transparent transition-all placeholder-gray-400" placeholder="Apa yang bisa saya bantu?">
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan <span class="text-red-500">*</span></label>
                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[rgba(121,155,193,0.7)] focus:border-transparent transition-all placeholder-gray-400" placeholder="Tulis pesan Anda disini..."></textarea>
              </div>
              <button type="submit" class="w-full bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] text-white font-medium py-3 px-6 rounded-lg hover:opacity-90 transition-all duration-300 shadow-md hover:shadow-lg">
                Kirim Pesan
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                </svg>
              </button>
              <div id="formMessage" class="hidden p-4 rounded-lg text-center"></div>
            </form>
          </div>
          
          <!-- Contact Info -->
          <div class="space-y-8">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-8 md:p-10 transition-all hover:shadow-xl">
              <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
              <div class="space-y-5">
                <div class="flex items-start">
                  <div class="flex-shrink-0 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] p-3 rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Email</h4>
                    <a href="mailto:contoh@email.com" class="text-[rgba(14,83,112,0.9)] hover:text-[rgba(14,83,112,1)] transition-colors">mahrus.ahmet@gmail.com</a>
                  </div>
                </div>
                
                <div class="flex items-start">
                  <div class="flex-shrink-0 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] p-3 rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Telepon/WhatsApp</h4>
                    <a href="https://wa.me/6281234567890" class="text-[rgba(14,83,112,0.9)] hover:text-[rgba(14,83,112,1)] transition-colors">+62 812 3456 7890</a>
                  </div>
                </div>
                
                <div class="flex items-start">
                  <div class="flex-shrink-0 bg-gradient-to-r from-[rgba(14,83,112,0.9)] via-[rgba(173,94,45,0.9)] to-[rgba(121,155,193,0.9)] p-3 rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Lokasi</h4>
                    <p class="text-gray-600">Jakarta, Indonesia</p>
                    <a href="https://maps.google.com/?q=Jakarta" class="text-sm text-[rgba(14,83,112,0.9)] hover:text-[rgba(14,83,112,1)] transition-colors mt-1 inline-block">Lihat di Peta →</a>
                  </div>
                </div>
              </div>
              
              <div class="mt-8">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">Media Sosial</h4>
                <div class="flex space-x-4">
                  <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-all duration-300">
                    <svg class="h-6 w-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                  </a>
                  <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-all duration-300">
                    <svg class="h-6 w-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                    </svg>
                  </a>
                  <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-all duration-300">
                    <svg class="h-6 w-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                  <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-all duration-300">
                    <svg class="h-6 w-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            
            <!-- Working Hours -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-8 md:p-10 transition-all hover:shadow-xl">
              <h3 class="text-2xl font-bold text-gray-800 mb-6">Jam Kerja</h3>
              <div class="space-y-4">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                  <span class="text-gray-700">Senin - Jumat</span>
                  <span class="font-medium text-gray-800 bg-gray-50 px-3 py-1 rounded-full text-sm">09:00 - 17:00</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                  <span class="text-gray-700">Sabtu</span>
                  <span class="font-medium text-gray-800 bg-gray-50 px-3 py-1 rounded-full text-sm">10:00 - 15:00</span>
                </div>
                <div class="flex justify-between items-center py-2">
                  <span class="text-gray-700">Minggu</span>
                  <span class="font-medium text-gray-800 bg-gray-100 px-3 py-1 rounded-full text-sm">Libur</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Simple JavaScript for form handling -->
    <script>
      document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        // Simple validation
        if (!name || !email || !subject || !message) {
          showMessage('Harap isi semua field yang wajib diisi!', 'error');
          return;
        }
        
        // Here you would typically send the data to a server
        // For demo purposes, we'll just show a success message
        showMessage('Pesan Anda telah terkirim! Saya akan segera menghubungi Anda.', 'success');
        
        // Reset form
        this.reset();
      });
      
      function showMessage(text, type) {
        const messageDiv = document.getElementById('formMessage');
        messageDiv.textContent = text;
        messageDiv.className = 'p-4 rounded-lg text-center ';
        
        if (type === 'error') {
          messageDiv.classList.add('bg-red-100', 'text-red-700');
        } else {
          messageDiv.classList.add('bg-green-100', 'text-green-700');
        }
        
        messageDiv.classList.remove('hidden');
        
        // Hide message after 5 seconds
        setTimeout(() => {
          messageDiv.classList.add('hidden');
        }, 5000);
      }
    </script>
</x-layout>