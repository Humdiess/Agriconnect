@extends('templates.main')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Konten Utama -->
    <div class="flex flex-col w-full">
        <!-- Isi Halaman -->
        <main class="w-full bg-white dark:bg-ireng">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Gambaran Umum AI -->
                <div class="flex sm:flex-col items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Tindakan yang direkomendasikan untuk Lahan kamu</h2>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-accent/20 text-accent dark:bg-accent/30 dark:text-accent">Didukung
                        oleh AI ✨</span>
                </div>
                @if(!$hasSettings)
                    <div class="text-sm text-yellow-600 dark:text-yellow-400 mb-4">
                        <strong>Peringatan:</strong> Rekomendasi ini hanya berdasarkan data default, bukan data aktual dari perangkat Anda.
                    </div>
                @endif
                <div class="shadow-sm rounded-lg overflow-hidden mb-6 border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <ul class="space-y-3" id="recommended-actions">
                            {{-- <li class="flex items-start">
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
                            </li> --}}
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
                                        <dd id="suhu" class="text-lg font-semibold text-gray-900 dark:text-white">{{ $temperature }}°C</dd>
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
                                        <dd id="moisture" class="text-lg font-semibold text-gray-900 dark:text-white">{{ $moisture }} %</dd>
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
                            <div class="relative h-64">
                                <canvas id="yieldChart"></canvas>
                            </div>
                    </div>
                </div>

                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Pengaturan Alat IoT</h2>
                <div class="shadow-sm rounded-lg overflow-hidden border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Tambah/Perbarui Alamat IP ESP32</h3>
                        <form action="{{ route('dashboard.update-ip') }}" method="POST" class="mt-5">
                            @csrf
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <label for="ip_address" class="text-sm font-medium text-accent dark:text-gray-400">
                                    Alamat IP ESP32
                                </label>
                                <input type="text" id="ip_address" name="ip_address"
                                       class="flex-1 mt-1 block w-full px-3 py-2 border rounded-md shadow-sm text-gray-900 dark:text-white dark:bg-zinc-700 border-gray-300 dark:border-zinc-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                       placeholder="Masukkan IP ESP32">
                                <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-accent hover:bg-accent/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                                    Simpan IP
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Pengaturan Request Data</h2>
                <div class="shadow-sm rounded-lg overflow-hidden border dark:border-zinc-600">
                    <div class="px-4 py-5 sm:p-6">
                        <label for="auto-request-toggle" class="flex items-center cursor-pointer">
                            <span class="text-sm font-medium text-accent dark:text-gray-400 mr-3">Auto Request Data</span>
                            <div class="relative">
                                <input type="checkbox" id="auto-request-toggle" class="sr-only" checked>
                                <div class="block bg-gray-300 dark:bg-gray-600 w-10 h-6 rounded-full"></div>
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                            </div>
                        </label>
                        <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Pilih apakah ingin melakukan {{ $ip }} request otomatis atau hanya saat halaman di-refresh.</p>
                    </div>
                </div>
            </div>
        </main>

        <x-mitra />

    </div>
    <style>
        /* Untuk toggle switch */
        #auto-request-toggle:checked + .block {
            background-color: #4A90E2;
        }
        #auto-request-toggle:checked + .block .dot {
            transform: translateX(100%);
        }
    </style>



<script>
let autoRequest = localStorage.getItem('autoRequest') === 'true'; // Ambil status dari local storage
let autoRequestInterval;

// Fungsi untuk memulai auto request
function startAutoRequest() {
    autoRequestInterval = setInterval(checkDataChanges, 30000); // Memeriksa perubahan data setiap 30 detik
}

// Fungsi untuk menghentikan auto request
function stopAutoRequest() {
    clearInterval(autoRequestInterval);
}

// Fungsi untuk menginisialisasi toggle berdasarkan local storage
function initializeToggle() {
    const toggle = document.getElementById('auto-request-toggle');
    toggle.checked = autoRequest; // Setel posisi toggle sesuai dengan nilai dari local storage

    if (autoRequest) {
        startAutoRequest();
    }

    // Event listener untuk toggle switch
    toggle.addEventListener('change', function () {
        autoRequest = this.checked;
        localStorage.setItem('autoRequest', autoRequest); // Simpan status ke local storage
        if (autoRequest) {
            startAutoRequest();
        } else {
            stopAutoRequest();
        }
    });
}

// Panggil fungsi generateResponse hanya saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    generateResponse(); // Jalankan request saat halaman dimuat
    initializeToggle(); // Inisialisasi toggle dari local storage
});


// Event listener untuk toggle switch
document.getElementById('auto-request-toggle').addEventListener('change', function () {
    autoRequest = this.checked; // Update status auto request berdasarkan toggle
    if (autoRequest) {
        startAutoRequest();
    } else {
        stopAutoRequest();
    }
});

// Panggil fungsi generateResponse hanya saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    generateResponse();
    if (autoRequest) {
        startAutoRequest();
    }
});

// Fungsi untuk menampilkan loading placeholder
// Fungsi untuk menampilkan loading placeholder
function showLoadingPlaceholder() {
    document.getElementById('recommended-actions').innerHTML = `
        <li class="flex items-start animate-pulse">
            <div class="flex-shrink-0 h-5 w-5 rounded-full bg-gray-300 dark:bg-gray-600"></div>
            <div class="ml-3 flex-1">
                <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded w-3/4"></div>
            </div>
        </li>
        <li class="flex items-start animate-pulse">
            <div class="flex-shrink-0 h-5 w-5 rounded-full bg-gray-300 dark:bg-gray-600"></div>
            <div class="ml-3 flex-1">
                <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded w-2/3"></div>
            </div>
        </li>
        <li class="flex items-start animate-pulse">
            <div class="flex-shrink-0 h-5 w-5 rounded-full bg-gray-300 dark:bg-gray-600"></div>
            <div class="ml-3 flex-1">
                <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded w-4/5"></div>
            </div>
        </li>
    `;
}

let previousSuhu = '';
let previousMoisture = '';
let isGenerating = false;

// Fungsi untuk mengkonversi markdown ke HTML
function convertMarkdownToHtml(text) {
    // Konversi teks yang diapit ** atau * menjadi bold
    return text.replace(/\*\*(.*?)\*\*|\*(.*?)\*/g, (match, g1, g2) => {
        const content = g1 || g2;
        return `<strong>${content}</strong>`;
    });
}

function checkDataChanges() {
    const suhuValue = document.getElementById('suhu').textContent.replace('°C', '').trim();
    const moistureValue = document.getElementById('moisture').textContent.replace('%', '').trim();

    if (!isGenerating && (suhuValue !== previousSuhu || moistureValue !== previousMoisture)) {
        previousSuhu = suhuValue;
        previousMoisture = moistureValue;
        generateResponse();
    }
}

function generateResponse() {
    if (isGenerating) return;

    isGenerating = true;
    showLoadingPlaceholder();

    const suhuValue = document.getElementById('suhu').textContent.replace('°C', '').trim();
    const moistureValue = document.getElementById('moisture').textContent.replace('%', '').trim();

    fetch("/dashboard-tani", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ 
            temperature: suhuValue,
            moisture: moistureValue
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.recommendations) {
            const recommendationsHtml = data.recommendations.map(rec => {
                let iconColor = 'text-accent';
                let iconPath = '';
                
                // Icon mapping based on category
                switch(rec.category) {
                    case 'Pengairan':
                        iconPath = 'M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.061 1.061l1.59-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.061l1.59 1.59zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z'; // Sun/Weather icon placeholder, replaced with drop below
                        iconPath = 'M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z'; // Water dropish
                        // Better water drop path
                        iconPath = 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 18a.75.75 0 01-.75-.75V12a.75.75 0 011.5 0v5.25c0 .414-.336.75-.75.75zM12 9a.75.75 0 01-.75-.75V6a.75.75 0 011.5 0v2.25c0 .414-.336.75-.75.75z'; // Exclamation? No.
                        // Let's use generic paths for now or specific SVGs if possible.
                        // Using simple paths for clarity
                        iconPath = 'M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.061 1.061l1.59-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.061l1.59 1.59zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z'; 
                        if(rec.category === 'Pengairan') {
                             iconPath = 'M8 16a2 2 0 002-2H6a2 2 0 002 2zm.995-14.901a1 1 0 10-1.99 0A5.002 5.002 0 003 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z';
                             iconColor = 'text-blue-500';
                        } else if (rec.category === 'Pemupukan') {
                            iconPath = 'M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z';
                            iconColor = 'text-green-500';
                        } else if (rec.category === 'Hama') {
                            iconPath = 'M12 2a8 8 0 00-8 8c0 1.333.333 2.667 1 4 .667 1.333 1 2.667 1 4v2a2 2 0 002 2h8a2 2 0 002-2v-2c0-1.333.333-2.667 1-4 .667-1.333 1-2.667 1-4a8 8 0 00-8-8z';
                            iconColor = 'text-red-500';
                        } else {
                            iconPath = 'M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z';
                            iconColor = 'text-accent';
                        }
                        break;
                    default:
                         iconPath = 'M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z';
                }

                return `
                    <li class="flex items-start p-3 bg-gray-50 dark:bg-zinc-700/50 rounded-lg">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 ${iconColor}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="${iconPath}" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3 w-full">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">${rec.action}</p>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">${rec.detail}</p>
                            <div class="mt-1">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-200">
                                    ${rec.category}
                                </span>
                            </div>
                        </div>
                    </li>
                `;
            }).join('');

            const recommendedActions = document.getElementById('recommended-actions');
            recommendedActions.style.opacity = '0';
            recommendedActions.innerHTML = recommendationsHtml;
            setTimeout(() => {
                recommendedActions.style.transition = 'opacity 0.5s ease-in-out';
                recommendedActions.style.opacity = '1';
            }, 100);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('recommended-actions').innerHTML = `
            <li class="flex items-start">
                <svg class="flex-shrink-0 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9h2V5H9v4zm0 6h2v-2H9v2z" clip-rule="evenodd" />
                </svg>
                <p class="ml-3 text-sm text-red-500">Terjadi kesalahan saat mengambil rekomendasi</p>
            </li>
        `;
    })
    .finally(() => {
        isGenerating = false;
    });
}

setInterval(checkDataChanges, 30000);
document.addEventListener('DOMContentLoaded', generateResponse);

// Chart.js Implementation
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('yieldChart').getContext('2d');
    const yieldData = @json($yieldData);
    
    const labels = Object.keys(yieldData);
    const data = Object.values(yieldData);

    // Get accent color from CSS variable or default
    const accentColor = getComputedStyle(document.documentElement).getPropertyValue('--color-accent') || '#4A90E2';
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Rendemen (%)',
                data: data,
                backgroundColor: 'rgba(74, 144, 226, 0.6)', // Transparan accent
                borderColor: 'rgba(74, 144, 226, 1)', // Solid accent
                borderWidth: 1,
                borderRadius: 4,
                hoverBackgroundColor: 'rgba(74, 144, 226, 0.8)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: false,
                    min: 5, // Set minimum y-axis value for better visualization
                    grid: {
                        color: document.documentElement.classList.contains('dark') ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#4b5563'
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#4b5563'
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Rendemen: ' + context.parsed.y + '%';
                        }
                    }
                }
            }
        }
    });
});

</script>
@endsection
