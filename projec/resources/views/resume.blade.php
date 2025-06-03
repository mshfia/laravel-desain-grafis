@extends('layouts.app')

@section('title', 'Desain Grafis')

@section('content')
<section id="resume" class="py-16 bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl font-bold text-white sm:text-4xl">
            Perjalanan Profesional Saya
          </h2>
          <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-400">
            Gambaran singkat tentang pengalaman, keahlian, dan pencapaian saya.
          </p>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-xl overflow-hidden">
          <div class="p-8 md:p-12">
            <div class="space-y-12">
              <!-- Experience -->
              <div>
                <h3 class="text-2xl font-bold text-white mb-6">Pengalaman</h3>
                <div class="space-y-8">
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-white">Desainer Grafis</h4>
                    <p class="text-sm text-indigo-400">Yayasan Alfalah | 2019 - 2020</p>
                    <ul class="mt-2 text-gray-300 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-white">Desainer Grafis</h4>
                    <p class="text-sm text-indigo-400">Yayasan Darul Furqon | 2020 - 2021</p>
                    <ul class="mt-2 text-gray-300 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                  <div class="relative pl-8">
                    <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                    <h4 class="text-lg font-semibold text-white">Desainer Grafis</h4>
                    <p class="text-sm text-indigo-400">Yayasan Al-Mujtama' | 2021 - 2022</p>
                    <ul class="mt-2 text-gray-300 list-disc list-inside">
                      <li>Menyediakan Media Publik.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Education -->
              <div>
                <h3 class="text-2xl font-bold text-white mb-6">Pendidikan</h3>
                <div class="relative pl-8">
                  <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                  <h4 class="text-lg font-semibold text-white"></h4>
                  <p class="text-sm text-indigo-400">Universitas Pertiwi | 2023 - 202- </p>
                  <ul class="mt-2 text-gray-300 list-disc list-inside">
                    <li>Lulus dengan pujian, Makasih ya Mas.</li>
                    <li>Spesialisasi dalam tipografi dan komunikasi visual.</li>
                    <li>Menerima Penghargaan Desain Tergabut pada tahun 2019.</li>
                  </ul>
                </div>
              </div>

              <!-- Skills -->
              <div>
                <h3 class="text-2xl font-bold text-white mb-6">Keahlian</h3>
                <div class="flex flex-wrap gap-3">
                  <span class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-full hover:bg-indigo-500 transition-colors duration-300">Adobe Photoshop</span>
                  <span class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-full hover:bg-indigo-500 transition-colors duration-300">Adobe Illustrator</span>
                  <span class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-full hover:bg-indigo-500 transition-colors duration-300">Figma</span>
                  <span class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-full hover:bg-indigo-500 transition-colors duration-300">CorelDraw</span>
                  <span class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-full hover:bg-indigo-500 transition-colors duration-300">Canva</span>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection
