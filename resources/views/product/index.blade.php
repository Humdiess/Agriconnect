@extends('templates.main')

@section('content')
    <div class="flex h-screen bg-gray-100 dark:bg-zinc-800">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-zinc-900 shadow-md">
            <div class="p-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('img/logo/header-logo.png') }}" alt="Logo" class="w-10 h-10">
                    <div>
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo text" class="h-6 block dark:hidden">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo text" class="h-6 hidden dark:block">
                        <h2 class="text-sm font-semibold text-gray-600 dark:text-gray-100">Dashboard Tani</h2>
                    </div>
                </div>
            </div>
            <nav class="mt-6">
                <a href="{{ url('/') }}"
                    class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 dark:hover:text-zinc-900 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Kembali Ke Beranda
                </a>
                <a href="/dashboard-tani"
                    class="flex items-center px-4 py-2  text-gray-700 dark:text-gray-200 dark:hover:text-zinc-900 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Dashboard Tani
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2  text-gray-700 dark:text-gray-200 dark:hover:text-zinc-900 hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Pantau AI
                </a>
                <a href="#" class="flex items-center px-4 py-2 bg-green-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Kelola Produk Anda
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <header class="bg-white dark:bg-zinc-900 shadow-sm">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Dashboard</h1>
                    <div class="flex items-center space-x-4 relative">
                        <button id="theme-toggle"
                            class="md:ml-2 md:px-2 rounded-full dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 dark:text-white transition-colors">
                            <i id="theme-icon" class="fas fa-moon"></i>
                        </button>
                        <button id="user-dropdown"
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 dark:text-gray-100 hover:dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <img class="h-8 w-8 rounded-full" src="/img/farmer.svg" alt="">
                            <span class="ml-2 mr-1">{{ auth()->user()->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdown-menu"
                            class="absolute top-10 border rounded-lg mt-2 p-1 w-full bg-white dark:bg-zinc-900 dark:border-zinc-900 overflow-hidden transition-all duration-300"
                            style="min-width: 150px; height: 0; opacity: 0; z-index: 999999999;">
                            <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                                @csrf
                                <button type="button" onclick="confirmLogout()"
                                    class="w-full text-left px-3 py-2 text-sm text-red-500 hover:bg-red-500 rounded-md hover:text-white flex items-center">
                                    <i class="fa-solid fa-sign-out-alt mr-2"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <section class="product-wrapper px-8 py-8">
                <div class="product-header mb-2">
                    <p class="dark:text-gray-100">Admin Panel | {{ auth()->user()->name }}</p>
                    <hr class="my-4">
                    <a href="/product-create" class="px-2 py-1 bg-accent text-white  rounded-sm">Add New Product</a>
                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mt-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="text-xl font-semibold text-center mx-auto my-2 dark:text-gray-100">Your Product :</h3>
                </div>
                <div class="product-items grid grid-cols-5 gap-4 my-3">
                    @foreach ($products as $product)
                        <a href="/product/{{ $product->id }}">
                            <div
                                class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden hover:-translate-y-4 transition ease-in-out">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">
                                        {{ $product->name }}
                                    </h2>
                                    <p class="text-gray-600 dark:text-gray-300">📌 Location</p>
                                    <p class="text-gray-600 dark:text-gray-300">Stok : {{ $product->stock }}</p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-2">Rp
                                        {{ number_format($product['price'], 0, ',', '.') }}</p>
                                </div>
                            </div>
                    @endforeach
                </div>
            </section>
        </main>
    </div>
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        const currentTheme = localStorage.getItem('theme') || 'dark';
        document.documentElement.classList.toggle('dark', currentTheme === 'dark');
        themeIcon.classList = currentTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';

        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');

            if (document.documentElement.classList.contains('dark')) {
                themeIcon.classList = 'fas fa-moon';
                localStorage.setItem('theme', 'dark');
            } else {
                themeIcon.classList = 'fas fa-sun';
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
    <script>
        const dropdownButton = document.getElementById('user-dropdown');
        const dropdownMenu = document.getElementById('dropdown-menu');
        let isDropdownOpen = false;

        dropdownButton.addEventListener('click', function() {
            if (!isDropdownOpen) {
                gsap.to(dropdownMenu, {
                    duration: 0.3,
                    height: 'auto',
                    opacity: 1,
                    ease: 'power1.out',
                });
            } else {
                gsap.to(dropdownMenu, {
                    duration: 0.3,
                    height: 0,
                    opacity: 0,
                    ease: 'power1.in',
                });
            }
            isDropdownOpen = !isDropdownOpen;
        });
    </script>
@endsection
