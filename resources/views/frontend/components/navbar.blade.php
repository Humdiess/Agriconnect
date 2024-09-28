<nav
    class="w-full fixed bg-white/80 dark:bg-ireng/30 backdrop-blur-md transition-colors border-b border-gray-200 dark:border-gray-700 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Left side: Logo and navigation buttons -->
            <div class="flex items-center space-x-6">
                <!-- Mobile menu button -->
                <div class="-mr-2 flex lg:hidden">
                    <button type="button"
                        class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center">
                        <img class="h-8 w-auto" src="{{ asset('img/logo/app-logo.png') }}" alt="AgriConnect Logo">
                        <span
                            class="ml-2 text-xl hidden md:block font-bold text-gray-900 dark:text-white">AgriConnect</span>
                    </a>
                </div>

                <!-- Navigation buttons (hidden on mobile) -->
                <div class="hidden lg:flex space-x-4">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium {{ $active == 'home' ? 'text-accent' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">Beranda</a>
                    <a href="{{ route('agrishop') }}"
                        class=" px-3 py-2 rounded-md text-sm font-medium {{ $active == 'agrishop' ? 'text-accent' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">Toko</a>
                    <a href="{{ route('contact') }}"
                        class=" px-3 py-2 rounded-md text-sm font-medium {{ $active == 'contact' ? 'text-accent' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">Kontak</a>
                    <a href="{{ route('blog') }}"
                        class=" px-3 py-2 rounded-md text-sm font-medium {{ $active == 'blog' ? 'text-accent' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">Berita</a>
                    <a href="{{ route('tani') }}"
                        class="decoration-clone font-bold px-3 py-2 rounded-md text-sm {{ $active == 'tani-ai' ? 'text-accent' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">Tani
                        AI</a>
                </div>
            </div>

            <!-- Right side: TANI AI, Theme Toggle, Profile/Login -->
            <div class="flex items-center space-x-4">
                <!-- TANI AI Button -->
                @auth
                    @if (Auth::user()->is_farmer)
                        <a href="{{ route('petani.index') }}"
                            class="hidden lg:block text-accent border border-accent hover:bg-accent-dark px-4 py-2 rounded-md text-sm font-medium {{ $active == 'tani-ai' ? 'ring-2 ring-green-400 dark:ring-green-300' : '' }}">
                            <i class="fa-solid fa-seedling me-3"></i> Dashboard Tani
                        </a>
                    @else
                        <a href="{{ route('tani.pendaftaran') }}"
                            class="hidden lg:block text-accent border border-accent hover:bg-accent-dark px-4 py-2 rounded-md text-sm font-medium {{ $active == 'tani-ai' ? 'ring-2 ring-green-400 dark:ring-green-300' : '' }}">
                            <i class="fa-solid fa-seedling me-3"></i> Jadi petani
                        </a>
                    @endif
                @endauth
                @guest
                    <a href="{{ route('tani.pendaftaran') }}"
                        class="hidden lg:block text-accent border border-accent hover:bg-accent-dark px-4 py-2 rounded-md text-sm font-medium {{ $active == 'tani-ai' ? 'ring-2 ring-green-400 dark:ring-green-300' : '' }}">
                        <i class="fa-solid fa-seedling me-3"></i> Jadi petani
                    </a>
                @endguest

                <!-- Profile or Login -->
                @if (Auth::check())
                    <div class="relative">
                        <button id="profile-toggler"
                            class="w-8 h-8 rounded-full overflow-hidden border-2 border-gray-500 dark:border-gray-400 focus:outline-none focus:border-accent transition-all duration-200">
                            <img class="w-full h-full object-cover"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </button>
                        <div id="profile-menu"
                            class="dropdown-menu absolute hidden mt-4 right-0 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg overflow-hidden z-20">
                            <form method="POST" action="{{ route('auth.logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-red-600 hover:text-white">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('auth.login') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-accent hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                        <i class="fa-solid fa-sign-in mr-3"></i> Masuk
                    </a>
                @endif

                <!-- Theme Toggle Button -->
                <button id="theme-toggle" aria-label="Toggle theme"
                    class="p-2 rounded-full text-accent dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg id="theme-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="lg:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/"
                class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium {{ $active == 'home' ? 'text-accent' : '' }}">Beranda</a>
            <a href="{{ route('agrishop') }}"
                class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium {{ $active == 'agrishop' ? 'text-accent' : '' }}">Toko</a>
            <a href="{{ route('tani') }}" class="text-accent font-bold block px-3 py-2 rounded-md text-base">TANI
                AI</a>
            <a href="{{ route('blog') }}"
                class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium {{ $active == 'blog' ? 'text-accent' : '' }}">Berita</a>
            <a href="{{ route('contact') }}"
                class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium {{ $active == 'contact' ? 'text-accent' : '' }}">Kontak</a>
        </div>
    </div>
</nav>


<script>
    // Theme toggle logic
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');

    const currentTheme = localStorage.getItem('theme') || 'dark';
    document.documentElement.classList.toggle('dark', currentTheme === 'dark');
    updateThemeIcon(currentTheme === 'dark');

    themeToggle.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        const isDark = document.documentElement.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        updateThemeIcon(isDark);
    });

    function updateThemeIcon(isDark) {
        if (isDark) {
            themeIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />';
        } else {
            themeIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />';
        }
    }

    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
    });

    const profileToggler = document.getElementById('profile-toggler');

    profileToggler.addEventListener('click', () => {
        document.getElementById('profile-menu').classList.toggle('hidden');
    })
</script>
