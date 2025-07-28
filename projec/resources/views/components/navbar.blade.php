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
            <h1 class="font-semibold text-gray-900">KaryaKita</h1>
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
              Portofolio
            </a>
            <a href="{{ route('about') }}" 
               @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
               :class="{
                 'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
                 'text-white hover:bg-white/30': true
               }"
               class="px-4 py-2 rounded-full flex items-center gap-2 transition-all hover:shadow-sm">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
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
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
              </svg>
              Resume
            </a>
          </div>
        </div>

        <!-- Login Button - Desktop (Neumorphism Style) -->
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

        <!-- Mobile Menu Button (Login Icon - Neumorphism) -->
        <div class="lg:hidden">
          <a href="{{ route('login') }}" class="p-2 rounded-full transition-all flex items-center gap-2
                          bg-gradient-to-br from-[rgba(14,83,112,0.8)] to-[rgba(147,80,38,0.8)] 
                          shadow-[0_4px_6px_0_rgba(0,0,0,0.1),0_1px_3px_0_rgba(0,0,0,0.08)]
                          hover:shadow-[0_6px_8px_0_rgba(0,0,0,0.1),0_2px_4px_0_rgba(0,0,0,0.08)]">
            <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/ffffff/user--v1.png" alt="user--v1"/>
            <span class="sr-only">Login</span>
          </a>
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
          <span>Portofolio</span>
        </a>
        <a href="{{ route('about') }}" 
           @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
           :class="{
             'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
             'text-white hover:bg-white/30': true
           }"
           class="px-4 py-1 rounded-full flex items-center gap-2 transition-all">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
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
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
          </svg>
          <span>Resume</span>
        </a>
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
      <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === '{{ route('portfolio') }}', 'text-white': activeTab !== '{{ route('portfolio') }}'}">Portofolio</span>
    </a>
    <a href="{{ route('about') }}" 
       @click.prevent="activeTab = '{{ route('about') }}'; window.location.href = '{{ route('about') }}'"
       class="flex flex-col items-center justify-center p-2 rounded-full transition-all"
       :class="{
         'bg-white/40 shadow-inner': activeTab === '{{ route('about') }}',
         'hover:bg-white/30': activeTab !== '{{ route('about') }}'
       }">
      <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === '{{ route('about') }}', 'text-white': activeTab !== '{{ route('about') }}'}" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
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
      <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === '{{ route('resume') }}', 'text-white': activeTab !== '{{ route('resume') }}'}" fill="currentColor" viewBox="0 0 24 24">
        <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
      </svg>
      <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === '{{ route('resume') }}', 'text-white': activeTab !== '{{ route('resume') }}'}">Resume</span>
    </a>
  </div>
</nav>