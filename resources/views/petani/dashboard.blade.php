@extends('templates.main')

@section('content')
    <!-- Main Content -->
    <div class="flex flex-col ms-64 w-full">
        <!-- Page Content -->
        <main class="w-full bg-gray-100 dark:bg-black">
            <div class="mx-auto py-6 sm:px-6 lg:px-8">
                <!-- AI Overview -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">AI Overview</h2>
                <div class="bg-white dark:bg-zinc-800 shadow-sm rounded-lg overflow-hidden mb-6">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white mb-4">Recommended Actions</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Increase irrigation frequency due
                                    to dry soil conditions</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Apply nitrogen-rich fertilizer to
                                    improve soil nutrient levels</p>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-3 text-sm text-gray-700 dark:text-gray-300">Monitor for pest activity in the
                                    coming week due to favorable conditions</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Fitur Pemantau -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Fitur Pemantau</h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm rounded-lg">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                                                Kondisi Tanah</dt>
                                            <dd class="text-lg font-semibold text-gray-900 dark:text-white">Value</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-green-600 hover:text-green-500">View all</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Hasil Analisis -->
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-8 mb-4">Hasil Analisis</h2>
                <div class="bg-white dark:bg-zinc-800 shadow-sm rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Analytics Overview</h3>
                        <div class="mt-5">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</div>
                                <div class="text-lg font-semibold text-gray-900 dark:text-white">1,234</div>
                            </div>
                            <div class="mt-4">
                                <div class="relative pt-1">
                                    <div
                                        class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200 dark:bg-green-700">
                                        <div style="width: 75%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                        </div>
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
