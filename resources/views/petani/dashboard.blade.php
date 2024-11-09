@extends('templates.main')

@section('content')
    <!-- Konten Utama -->
    <div class="flex flex-col w-full">
        <!-- Isi Halaman -->
        <main class="w-full bg-white dark:bg-ireng">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Gambaran Umum AI -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Tindakan yang direkomendasikan untuk
                        pertanian tebu</h2>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-accent/20 text-accent dark:bg-accent/30 dark:text-accent">Didukung
                        oleh AI ✨</span>
                </div>
                <div class="shadow-sm rounded-lg overflow-hidden mb-6 border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <ul class="space-y-3" id="recommended-actions">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-accent" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Lakukan pemupukan dengan pupuk NPK
                                    untuk meningkatkan pertumbuhan tebu</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-accent" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Periksa dan atasi serangan hama
                                    penggerek batang tebu</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-accent" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Lakukan pengairan yang cukup untuk
                                    menjaga kelembaban tanah optimal bagi tebu</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Fitur Pemantau -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Fitur Pemantau Lahan Tebu</h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Suhu Lahan
                                        </dt>
                                        {{-- suhu --}}
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">{{ $suhu }}°C</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('pantau.suhu') }}"
                                    class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Kelembaban
                                            Tanah</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">65%</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('pantau.kelembapan') }}"
                                    class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Intensitas
                                            Cahaya</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">75000 Lux</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Tingkat pH
                                            Tanah</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">6.5</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="#" class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pemantauan Alat-alat IoT Secara Keseluruhan -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Pemantauan Alat-alat IoT Lahan
                    Tebu</h2>
                <div class="shadow-sm rounded-lg overflow-hidden border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Status Alat IoT</h3>
                        <div class="mt-5">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-medium text-accent dark:text-gray-400">Total Alat Terpasang</div>
                                <div class="text-lg font-semibold text-gray-900 dark:text-white">30</div>
                            </div>
                            <div class="mt-4">
                                <div class="relative pt-1">
                                    <div
                                        class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200 dark:bg-blue-700">
                                        <div style="width: 90%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-accent">
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="text-sm font-medium text-accent dark:text-gray-400">Alat Berfungsi
                                        </div>
                                        <div class="text-sm font-medium text-accent dark:text-gray-400">Alat Tidak
                                            Berfungsi</div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">27</div>
                                        <div class="text-lg font-semibold text-gray-900 dark:text-white">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Pemantauan Rendemen dan Data
                    Pertanian Tebu</h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Rendemen
                                            Saat Ini</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">8.5%</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">Target: 10% | Progress: 85%</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Tanggal
                                            Panen Efektif (Rekomendasi AI)</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">15 Agustus 2024
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">Estimasi umur tanaman: 12 bulan</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">
                                            Produktivitas Lahan</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">90 ton/ha</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">Rata-rata Sidoarjo: 85 ton/ha</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Kebutuhan
                                            Air</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">1,500 mm/tahun</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">Curah hujan Sidoarjo: 1,600 mm/tahun</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Luas Lahan
                                            Tebu Sidoarjo</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">5,200 ha</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">3.5% dari total luas Kabupaten Sidoarjo</span>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden shadow-sm rounded-lg border dark:border-zinc-600">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-accent rounded-md p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Varietas
                                            Tebu Dominan</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">PS 881</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <span class="font-medium text-accent">Cocok untuk lahan sawah dan tahan kekeringan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grafik Tren Rendemen -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Tren Rendemen Tebu</h2>
                <div class="shadow-sm rounded-lg overflow-hidden border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Grafik Rendemen Tebu 5
                            Tahun Terakhir</h3>
                        <div class="mt-5">
                            <!-- Placeholder untuk grafik -->
                            <div
                                class="bg-gray-100 dark:bg-gray-800 h-64 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                Grafik Rendemen Tebu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <x-mitra />
    </div>
@endsection
