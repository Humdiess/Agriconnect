@extends('templates.main')

@section('content')
    <!-- Konten Utama -->
    <div class="flex flex-col w-full">
        <!-- Isi Halaman -->
        <main class="w-full bg-white dark:bg-ireng">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Gambaran Umum AI -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Tindakan yang direkomendasikan untuk pertanian tebu</h2>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-accent/20 text-accent dark:bg-accent/30 dark:text-accent">Didukung oleh AI ✨</span>
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
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Lakukan pemupukan dengan pupuk NPK untuk meningkatkan pertumbuhan tebu</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-accent" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Periksa dan atasi serangan hama penggerek batang tebu</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-accent" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Lakukan pengairan yang cukup untuk menjaga kelembaban tanah optimal bagi tebu</p>
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
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Suhu Lahan</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">28°C</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('pantau.suhu') }}" class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
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
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Kelembaban Tanah</dt>
                                        <dd class="text-lg font-semibold text-gray-900 dark:text-white">65%</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('pantau.kelembapan') }}" class="font-medium text-green-600 hover:text-accent">Lihat detail</a>
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
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Intensitas Cahaya</dt>
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
                                        <dt class="text-sm font-medium text-accent dark:text-gray-400 truncate">Tingkat pH Tanah</dt>
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
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Pemantauan Alat-alat IoT Lahan Tebu</h2>
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
                                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200 dark:bg-blue-700">
                                        <div style="width: 90%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-accent">
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="text-sm font-medium text-accent dark:text-gray-400">Alat Berfungsi</div>
                                        <div class="text-sm font-medium text-accent dark:text-gray-400">Alat Tidak Berfungsi</div>
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
            </div>
        </main>
    </div>
@endsection
