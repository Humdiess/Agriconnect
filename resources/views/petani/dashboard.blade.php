@extends('mylayout.main')

@section('content')
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('img/logo/header-logo.png') }}" alt="Logo" class="w-10 h-10">
                    <div>
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo text" class="h-6">
                        <h2 class="text-sm font-semibold text-gray-600">Dashboard Tani</h2>
                    </div>
                </div>
            </div>
            <nav class="mt-6">
                <a href="{{ url('/') }}"
                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Kembali Ke Beranda
                </a>
                <a href="#" class="flex items-center px-4 py-2 bg-green-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Dashboard Tani
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Pantau AI
                </a>
                <a href="{{ url('/product') }}"
                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Toko
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    <div class="flex items-center space-x-4">
                        <button
                            class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <button
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                            <span class="ml-2 mr-1">John Doe</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Fitur Pemantau -->
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Fitur Pemantau</h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="bg-white overflow-hidden shadow rounded-lg">
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
                                            <dt class="text-sm font-medium text-gray-500 truncate">Fitur {{ $i }}
                                            </dt>
                                            <dd class="text-lg font-semibold text-gray-900">Value</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-green-700 hover:text-green-900">View all</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Hasil Analisis -->
                <h2 class="text-lg font-semibold text-gray-900 mt-8 mb-4">Hasil Analisis</h2>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Analytics Overview</h3>
                        <div class="mt-5">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-medium text-gray-500">Total Users</div>
                                <div class="text-lg font-semibold text-gray-900">1,234</div>
                            </div>
                            <div class="mt-4">
                                <div class="relative pt-1">
                                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
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
