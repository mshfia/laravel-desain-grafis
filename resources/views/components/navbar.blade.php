<nav class="fixed w-full top-0 z-50 transition-all duration-300" 
     x-data="{ 
       activeTab: window.location.pathname, 
       isScrolled: false,
       isHomeRoute(path) {
         return path === '/' || path === '{{ route('home') }}';
       }
     }" 
     @scroll.window="isScrolled = (window.pageYOffset > 10)"
     :class="{ 'h-14 shadow-lg': isScrolled, 'h-16 shadow-md': !isScrolled }">
  <div class="container mx-auto px-4">
    <!-- Glassmorphism Background dengan warna baru -->
    <div class="backdrop-blur-md bg-[rgba(255,255,255,0.3)] rounded-b-xl border-b border-white/20 w-full"
         :class="{ 'shadow-lg': isScrolled, 'shadow-md': !isScrolled }">
      <div class="flex items-center justify-between transition-all duration-300" :class="{ 'h-14': isScrolled, 'h-16 min-h-0': !isScrolled }">
        <!-- Logo -->
        <div class="flex items-center gap-x-3">
          <!-- Neumorphism Logo Container -->
          <div class="flex items-center rounded-full p-1 bg-gradient-to-br from-white to-gray-100 shadow-[inset_0_2px_4px_0_rgba(0,0,0,0.05),0_4px_6px_0_rgba(0,0,0,0.1)]">
            <img src="album/ftk.png" alt="Logo Desain Grafis" class="w-10 rounded-full">
            <h1 class="font-semibold text-gray-900">KaryaKu</h1>
          </div>
        </div>

        <!-- Desktop Menu dengan Gradien Baru -->
        <div class="hidden lg:block bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] px-6 rounded-full backdrop-blur-sm border border-white/20 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)]">
          <div class="flex items-center space-x-6">
            <a href="{{ route('home') }}" 
               @click.prevent="activeTab = '/'; window.location.href = '{{ route('home') }}'"
               :class="{
                 'bg-white/40 shadow-inner': isHomeRoute(activeTab),
                 'text-white hover:bg-white/30': true
               }"
               class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
              </svg>
              Beranda
            </a>
            <a href="{{ route('portfolio') }}" 
               @click.prevent="activeTab = '{{ route('portfolio') }}'; window.location.href = '{{ route('portfolio') }}'"
               :class="{
                 'bg-white/40 shadow-inner': activeTab === '{{ route('portfolio') }}',
                 'text-white hover:bg-white/30': true
               }"
               class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
              </svg>
              KaryaKu
            </a>
            <a href="{{ route('about') }}" 
               @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
               :class="{
                 'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
                 'text-white hover:bg-white/30': true
               }"
               class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
<svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
</svg>
              Profil
            </a>
            <a href="{{ route('resume') }}" 
               @click.prevent="activeTab = '{{ route('resume') }}'; window.location.href = '{{ route('resume') }}'"
               :class="{
                 'bg-white/40 shadow-inner': activeTab === '{{ route('resume') }}',
                 'text-white hover:bg-white/30': true
               }"
               class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
<svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
</svg>
              Kontak
            </a>
            @auth
            <a href="{{ route('kontributor') }}" 
              @click.prevent="activeTab = '{{ route('kontributor') }}'; window.location.href = '{{ route('kontributor') }}'"
              :class="{
                'bg-white/40 shadow-inner': activeTab === '{{ route('kontributor') }}',
                'text-white hover:bg-white/30': true
              }"
              class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
              </svg>
              Kontributor
            </a>
            @endauth
          </div>
        </div>

        <!-- Login Button - Desktop (Neumorphism Style) -->
        <!-- Guest: Tampilkan tombol Login -->
        @guest
          <div class="hidden lg:flex">
            <a href="{{ route('login') }}" class="rounded-full px-5 py-2 font-semibold text-black transition-all flex items-center gap-2
                                bg-gradient-to-br from-[rgba(255,255,255,0.8)] to-[rgba(255,255,255,0.8)] 
                                shadow-[0_4px_6px_0_rgba(0,0,0,0.1),0_1px_3px_0_rgba(0,0,0,0.08)]
                                hover:shadow-[0_6px_8px_0_rgba(0,0,0,0.1),0_2px_4px_0_rgba(0,0,0,0.08)]
                                active:shadow-inner">
              <img width="24" height="24" src="album/account.png" alt="user--v1"/>
              Login
            </a>
          </div>
        @endguest

        <!-- Authenticated: Tampilkan Foto Profil dan Dropdown -->
        @auth
          <div class="hidden lg:flex relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center gap-2 px-4 py-2 bg-white/80 rounded-full shadow hover:shadow-md transition">
              <img src="{{ Auth::user()->profile_photo_url ?? asset('album/account.png') }}" alt="Profil" class="w-8 h-8 rounded-full object-cover">
              <span class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</span>
              <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.174l3.71-3.943a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
            </button>

            <!-- Dropdown -->
            <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50 py-2 text-sm">
              <a href="{{ route('kontributor') }}" class="block px-4 py-2 hover:bg-gray-100">Ubah Profil Saya</a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
              </form>
            </div>
          </div>
        @endauth

        <!-- Mobile Menu Button -->
        <div class="lg:hidden" x-data="{ openMobileMenu: false }">
          @guest
            <!-- Jika belum login: tombol login -->
            <a href="{{ route('login') }}" class="p-2 rounded-full transition-all flex items-center gap-2
                            bg-gradient-to-br from-[rgba(14,83,112,0.8)] to-[rgba(147,80,38,0.8)] 
                            shadow-[0_4px_6px_0_rgba(0,0,0,0.1),0_1px_3px_0_rgba(0,0,0,0.08)]
                            hover:shadow-[0_6px_8px_0_rgba(0,0,0,0.1),0_2px_4px_0_rgba(0,0,0,0.08)]">
              <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/ffffff/user--v1.png" alt="user--v1"/>
              <span class="sr-only">Login</span>
            </a>
          @endguest

          @auth
            <!-- Jika sudah login: foto profil + dropdown -->
            <div class="relative">
              <button @click="openMobileMenu = !openMobileMenu" class="p-1.5 rounded-full bg-white shadow flex items-center justify-center">
                <img src="{{ Auth::user()->profile_photo_url ?? asset('album/account.png') }}" alt="Profil" class="w-8 h-8 rounded-full object-cover">
                <span class="sr-only">Akun</span>
              </button>

              <!-- Dropdown Menu -->
              <div x-show="openMobileMenu" @click.outside="openMobileMenu = false" class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg z-50 py-2 text-sm">
                <a href="{{ route('kontributor') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil Saya</a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                </form>
              </div>
            </div>
          @endauth
        </div>
      </div>
    </div>
  </div>

  <!-- Tablet Menu dengan Gradien Baru -->
  <div class="hidden md:flex lg:hidden bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(147,80,38,0.7)] to-[rgba(123,153,187,0.7)] backdrop-blur-sm border-b border-white/20">
    <div class="container mx-auto px-4 py-2">
      <div class="flex justify-center space-x-6">
        <a href="{{ route('home') }}" 
           @click.prevent="activeTab = '/'; window.location.href = '{{ route('home') }}'"
           :class="{
             'bg-white/40 shadow-inner': isHomeRoute(activeTab),
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
          </svg>
          <span>Beranda</span>
        </a>
        <a href="{{ route('portfolio') }}" 
           @click.prevent="activeTab = '{{ route('portfolio') }}'; window.location.href = '{{ route('portfolio') }}'"
           :class="{
             'bg-white/40 shadow-inner': activeTab === '{{ route('portfolio') }}',
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
          </svg>
          <span>KaryaKu</span>
        </a>
        <a href="{{ route('about') }}" 
           @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
           :class="{
             'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
<svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
</svg>

          <span>Profil</span>
        </a>
        <a href="{{ route('resume') }}" 
           @click.prevent="activeTab = '{{ route('resume') }}'; window.location.href = '{{ route('resume') }}'"
           :class="{
             'bg-white/40 shadow-inner': activeTab === '{{ route('resume') }}',
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
</svg>

          <span>Kontak</span>
        </a>
        @auth
        <a href="{{ route('kontributor') }}" 
           @click.prevent="activeTab = '{{ route('kontributor') }}'; window.location.href = '{{ route('kontributor') }}'"
           :class="{
             'bg-white/40 shadow-inner': activeTab === '{{ route('kontributor') }}',
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
          </svg>
          <span>Kontributor</span>
        </a>
        @endauth
      </div>
    </div>
  </div>

  <!-- Mobile Bottom Navigation dengan Gradien Baru -->
  <div class="fixed bottom-0 left-0 right-0 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(147,80,38,0.7)] to-[rgba(123,153,187,0.7)] backdrop-blur-sm flex justify-around items-center h-16 z-50 md:hidden border-t border-white/20 shadow-[0_-4px_6px_-1px_rgba(255,255,255,0.1),0_-2px_4px_-1px_rgba(255,255,255,0.06)]">
    <a href="{{ route('home') }}" 
       @click.prevent="activeTab = '/'; window.location.href = '{{ route('home') }}'"
       class="flex flex-col items-center justify-center p-2 rounded-full transition-all"
       :class="{
         'bg-white/40 shadow-inner': isHomeRoute(activeTab),
         'hover:bg-white/30': !isHomeRoute(activeTab)
       }">
      <svg class="w-6 h-6" :class="{'text-gray-900': isHomeRoute(activeTab), 'text-white': !isHomeRoute(activeTab)}" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
      </svg>
      <span class="text-xs" :class="{'text-gray-900 font-bold': isHomeRoute(activeTab), 'text-white': !isHomeRoute(activeTab)}">Beranda</span>
    </a>
    <a href="{{ route('portfolio') }}" 
       @click.prevent="activeTab = '{{ route('portfolio') }}'; window.location.href = '{{ route('portfolio') }}'"
       class="flex flex-col items-center justify-center p-2 rounded-full transition-all"
       :class="{
         'bg-white/40 shadow-inner': activeTab === '{{ route('portfolio') }}',
         'hover:bg-white/30': activeTab !== '{{ route('portfolio') }}'
       }">
      <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === '{{ route('portfolio') }}', 'text-white': activeTab !== '{{ route('portfolio') }}'}" fill="currentColor" viewBox="0 0 24 24">
        <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
      </svg>
      <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === '{{ route('portfolio') }}', 'text-white': activeTab !== '{{ route('portfolio') }}'}">KaryaKu</span>
    </a>
    <a href="{{ route('about') }}" 
       @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
       class="flex flex-col items-center justify-center p-2 rounded-full transition-all"
       :class="{
         'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
         'hover:bg-white/30': activeTab !== '{{ route('about') }}'
       }">
<svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
</svg>

      <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === '{{ route('about') }}', 'text-white': activeTab !== '{{ route('about') }}'}">Profil</span>
    </a>
    <a href="{{ route('resume') }}" 
       @click.prevent="activeTab = '{{ route('resume') }}'; window.location.href = '{{ route('resume') }}'"
       class="flex flex-col items-center justify-center p-2 rounded-full transition-all"
       :class="{
         'bg-white/40 shadow-inner': activeTab === '{{ route('resume') }}',
         'hover:bg-white/30': activeTab !== '{{ route('resume') }}'
       }">
<svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
</svg>

      <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === '{{ route('resume') }}', 'text-white': activeTab !== '{{ route('resume') }}'}">Kontak</span>
    </a>
  </div>
</nav>