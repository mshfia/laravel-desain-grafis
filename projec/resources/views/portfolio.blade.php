@extends('layouts.app')

@section('title', 'Desain Grafis')

@section('content')

    <section id="portfolio" class="py-16 bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-white sm:text-4xl">
            Proyek Gabut
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-400">
            Kumpulan karya desain tergabut saya dari berbagai kemalesan.
          </p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Portfolio1 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/bck.png" 
                   alt="Projek identitas merek">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Branding logo nama</h3>
                <p class="text-indigo-300 text-sm">Identitas nama saya</p>
              </div>
            </div>
          </div>

          <!-- Portfolio 2 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/hitam.png" 
                   alt="Projek desain web">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Desain Poster</h3>
                <p class="text-indigo-300 text-sm">Canva</p>
              </div>
            </div>
          </div>

          <!-- Portfolio 3 -->
          <div x-data="{ hover: false }" 
               class="group relative overflow-hidden rounded-lg shadow-xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                   src="album/kartini.jpg" 
                   alt="Projek desain cetak">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
              <div>
                <h3 class="text-white font-bold text-xl mb-1">Poster Kartini</h3>
                <p class="text-indigo-300 text-sm">CorelDraw, Cetak</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection
