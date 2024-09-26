@include('templates.header')

<div class="flex w-full bg-gray-100 h-screen dark:bg-zinc-900">
    <aside
        class="w-64 fixed left-0 top-0 bottom-0 hidden lg:block bg-white dark:bg-zinc-900 overflow-y-auto flex-col justify-between border-r dark:border-zinc-800">
        <!-- Sidebar content (logo, nav links, etc.) -->
        <div>
            <div class="p-4 border-b dark:border-zinc-800">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('img/logo/header-logo.png') }}" alt="Logo" class="w-8 h-8">
                    <div>
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo text" class="h-6 block dark:hidden">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo text" class="h-6 hidden dark:block">
                    </div>
                </div>
            </div>
            <nav class="my-6 px-4">
                <a href="{{ url('/') }}"
                    class="flex items-center px-4 py-2 rounded-lg {{ $active == 'home' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Kembali Ke Beranda
                </a>
                <a href="{{ url('/dashboard-tani') }}"
                    class="flex items-center px-4 py-2 mt-2 {{ $active == 'dashboard' ? 'text-white bg-accent dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Dashboard Tani
                </a>

                <!-- Pantau Dropdown Start -->
                <div class="relative">
                    <button id="pantau-dropdown-toggle"
                        class="flex items-center w-full px-4 py-2 mt-2 {{ $active == 'pantau-ai' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} rounded-lg transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Pantau
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown menu for Pantau -->
                    <div id="pantau-dropdown"
                        class="hidden absolute left-0 right-0 z-10 bg-white dark:bg-zinc-800 shadow-lg rounded-lg">
                        <a href="{{ url('/pantau/tanah') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                            Pantau Tanah
                        </a>
                        <a href="{{ url('/pantau/cuaca') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                            Pantau Cuaca
                        </a>
                        <a href="{{ url('/pantau/kesehatan-tebu') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                            Pantau Kesehatan Tebu
                        </a>
                    </div>
                </div>
                <!-- Pantau Dropdown End -->

                <a href="{{ url('/product') }}"
                    class="flex items-center px-4 py-2 mt-2 {{ $active == 'product' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Kelola Produk Anda
                </a>
            </nav>
        </div>

        <!-- Profile section at the bottom -->
        <div class="p-4 border-t dark:border-zinc-800 mt-auto">
            <div class="relative">
                <button id="profile-dropdown-toggle"
                    class="flex items-center w-full p-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors duration-200 focus:outline-none">
                    <img class="h-8 w-8 rounded-full mr-2" src="/img/farmer.svg" alt="User Avatar">
                    <span class="font-medium">Masyhudi Affandi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="profile-dropdown"
                    class="hidden absolute  left-0 right-0 z-10 bg-white dark:bg-zinc-800 shadow-lg rounded-lg">
                    <a href="{{ url('/profile') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        View Profile
                    </a>
                    <a href="{{ url('/logout') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </aside>
    @yield('content')
</div>

@include('templates.footer')

<script>
    document.getElementById('pantau-dropdown-toggle').addEventListener('click', function() {
        const dropdown = document.getElementById('pantau-dropdown');
        dropdown.classList.toggle('hidden');
    });

    document.getElementById('profile-dropdown-toggle').addEventListener('click', function() {
        const dropdown = document.getElementById('profile-dropdown');
        dropdown.classList.toggle('hidden');
    });
</script>
