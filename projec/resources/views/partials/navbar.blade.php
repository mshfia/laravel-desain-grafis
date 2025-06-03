<nav class="bg-white shadow-md fixed w-full top-0 z-50 transition-all duration-300" 
       x-data="{ activeTab: 'home', isScrolled: false }" 
       @scroll.window="isScrolled = (window.pageYOffset > 10)"
       :class="{ 'h-14 shadow-lg bg-white/75': isScrolled, 'h-16 shadow-md bg-white/75': !isScrolled }">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between" :class="{ 'h-14': isScrolled, 'h-16': !isScrolled }">
        <!-- Logo -->
        <div class="flex items-center gap-x-3">
          <img src="album/ftk.png" alt="Logo Desain Grafis" class="w-10 rounded-full">
          <h1 class="font-semibold text-gray-900">Desain Grafis</h1>
        </div>

        <!-- Desktop Menu with Gradient Background -->
        <div class="hidden lg:block bg-gradient-to-r from-blue-300 via-teal-300 to-green-300 px-6 rounded-full">
          <div class="flex items-center space-x-6">
            <a href="{{ route('home') }}" 
               @click="activeTab = 'home'"
               :class="{'bg-white/30': activeTab === 'home'}"
               class="text-gray-900 px-4 py-2 rounded-full flex items-center gap-2 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
              </svg>
              Beranda
            </a>
            <a href="{{ route('portfolio') }}" 
               @click="activeTab = 'portfolio'"
               :class="{'bg-white/30': activeTab === 'portfolio'}"
               class="text-gray-900 px-4 py-2 rounded-full flex items-center gap-2 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
              </svg>
              Portofolio
            </a>
            <a href="{{ route('about') }}" 
               @click="activeTab = 'about'"
               :class="{'bg-white/30': activeTab === 'about'}"
               class="text-gray-900 px-4 py-2 rounded-full flex items-center gap-2 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
              </svg>
              Tentang
            </a>
            <a href="{{ route('resume') }}" 
               @click="activeTab = 'resume'"
               :class="{'bg-white/30': activeTab === 'resume'}"
               class="text-gray-900 px-4 py-2 rounded-full flex items-center gap-2 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
              </svg>
              Resume
            </a>
          </div>
        </div>

        <!-- Login Button - Desktop -->
        <div class="hidden lg:flex">
          <a href="#" class="rounded-full bg-blue-400/30 px-5 py-2 font-semibold text-gray-900 transition-all hover:bg-blue-400/50 flex items-center gap-2">
            <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/user--v1.png" alt="user--v1"/>
            Login
          </a>
        </div>

        <!-- Mobile Menu Button (Login Icon) -->
        <div class="lg:hidden">
          <a href="#" class="bg-blue-400/30 text-gray-900 p-2 rounded-full transition-all hover:bg-blue-400/50 flex items-center gap-2">
            <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/user--v1.png" alt="user--v1"/>
            Login
          </a>
        </div>
      </div>
    </div>

    <!-- Tablet Menu with Gradient Background -->
    <div class="hidden md:flex lg:hidden bg-gradient-to-r from-blue-300 via-teal-300 to-green-300">
      <div class="container mx-auto px-4 py-2">
        <div class="flex justify-center space-x-6">
          <a href="{{ route('home') }}" 
             @click="activeTab = 'home'"
             :class="{'bg-white/30': activeTab === 'home'}"
             class="text-gray-900 px-4 py-1 rounded-full flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
            </svg>
            <span>Beranda</span>
          </a>
          <a href="{{ route('portfolio') }}" 
             @click="activeTab = 'portfolio'"
             :class="{'bg-white/30': activeTab === 'portfolio'}"
             class="text-gray-900 px-4 py-1 rounded-full flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
            </svg>
            <span>Portofolio</span>
          </a>
          <a href="{{ route('about') }}" 
             @click="activeTab = 'about'"
             :class="{'bg-white/30': activeTab === 'about'}"
             class="text-gray-900 px-4 py-1 rounded-full flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
            </svg>
            <span>Tentang</span>
          </a>
          <a href="{{ route('resume') }}" 
             @click="activeTab = 'resume'"
             :class="{'bg-white/30': activeTab === 'resume'}"
             class="text-gray-900 px-4 py-1 rounded-full flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
            </svg>
            <span>Resume</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Mobile Bottom Navigation with Gradient Background -->
    <div class="fixed bottom-0 left-0 right-0 bg-gradient-to-r from-blue-300 via-teal-300 to-green-300 flex justify-around items-center h-16 z-50 md:hidden">
      <a href="{{ route('home') }}" 
         @click="activeTab = 'home'"
         class="flex flex-col items-center justify-center p-2">
        <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === 'home', 'text-gray-600': activeTab !== 'home'}" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2.25a2.25 2.25 0 00-1.573.648L2.648 9.923A2.25 2.25 0 002 11.973v7.777A2.25 2.25 0 004.25 22h15.5A2.25 2.25 0 0022 19.75v-7.777a2.25 2.25 0 00-.648-2.05l-7.779-7.075A2.25 2.25 0 0012 2.25zM12 5.818l7.779 7.075a.25.25 0 01.073.23v7.777a.25.25 0 01-.25.25H4.25a.25.25 0 01-.25-.25v-7.777a.25.25 0 01.073-.23L12 5.818z"/>
        </svg>
        <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === 'home', 'text-gray-600': activeTab !== 'home'}">Beranda</span>
      </a>
      <a href="{{ route('portfolio') }}" 
         @click="activeTab = 'portfolio'"
         class="flex flex-col items-center justify-center p-2">
        <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === 'portfolio', 'text-gray-600': activeTab !== 'portfolio'}" fill="currentColor" viewBox="0 0 24 24">
          <path d="M4 4.5A2.5 2.5 0 016.5 2h11A2.5 2.5 0 0120 4.5v15A2.5 2.5 0 0117.5 22h-11A2.5 2.5 0 014 19.5v-15zm4 2a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5h-2zm-6 6a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5H8zm6 0a.5.5 0 00-.5.5v2a.5.5 0 00.5.5h2a.5.5 0 00.5-.5v-2a.5.5 0 00-.5-.5h-2z"/>
        </svg>
        <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === 'portfolio', 'text-gray-600': activeTab !== 'portfolio'}">Portofolio</span>
      </a>
      <a href="{{ route('about') }}" 
         @click="activeTab = 'about'"
         class="flex flex-col items-center justify-center p-2">
        <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === 'about', 'text-gray-600': activeTab !== 'about'}" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a5 5 0 00-5 5 5 5 0 003.57 4.77 8 8 0 00-3.57 6.73c0 .69.56 1.25 1.25 1.25h8c.69 0 1.25-.56 1.25-1.25a8 8 0 00-3.57-6.73A5 5 0 0017 7a5 5 0 00-5-5zm0 2a3 3 0 013 3 3 3 0 01-3 3 3 3 0 01-3-3 3 3 0 013-3zm-2.75 9.75A6 6 0 016 18.5c0 .41.34.75.75.75h10.5c.41 0 .75-.34.75-.75a6 6 0 01-3.25-4.75h-4.5z"/>
        </svg>
        <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === 'about', 'text-gray-600': activeTab !== 'about'}">Tentang</span>
      </a>
      <a href="{{ route('resume') }}" 
         @click="activeTab = 'resume'"
         class="flex flex-col items-center justify-center p-2">
        <svg class="w-6 h-6" :class="{'text-gray-900': activeTab === 'resume', 'text-gray-600': activeTab !== 'resume'}" fill="currentColor" viewBox="0 0 24 24">
          <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6H6zm0 2h7v5h5v11H6V4zm8 1.41L16.59 8H14V5.41z"/>
        </svg>
        <span class="text-xs" :class="{'text-gray-900 font-bold': activeTab === 'resume', 'text-gray-600': activeTab !== 'resume'}">Resume</span>
      </a>
    </div>
  </nav>