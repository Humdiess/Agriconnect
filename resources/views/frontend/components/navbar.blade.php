<nav class="w-full fixed bg-white/80 dark:bg-ireng/30 backdrop-blur-md transition-colors border-b border-gray-200 dark:border-gray-700" style="z-index: 10000">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img class="h-8 w-auto" src="{{ asset('img/logo/app-logo.png') }}" alt="AgriConnect Logo">
                    <span class="ml-2 text-xl font-bold text-gray-900 dark:text-white">AgriConnect</span>
                </a>
            </div>

            <!-- Right side buttons -->
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center">
                        <a href="/" class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ $active == 'home' ? 'text-accent' : '' }}">Beranda</a>

                        <a href="{{ route('tani') }}" class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ $active == 'home' ? 'text-accent' : '' }}">TANI AI</a>

                        <a href="{{ route('agrishop') }}" class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ $active == 'home' ? 'text-accent' : '' }}">Toko</a>

                        <a href="{{ route('blog') }}" class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ $active == 'home' ? 'text-accent' : '' }}">Berita</a>

                        <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ $active == 'contact' ? 'text-accent' : '' }}">Kontak</a>

                        <div class="featured-btn flex items-center gap-3">
                            <!-- Theme Toggle Button -->
                            <button id="theme-toggle" aria-label="Toggle theme" class="p-2 rounded-full text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <svg id="theme-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </button>
                            {{-- ketika user sudah login --}}
                            @if (Auth::check())
                            {{-- profile picture + dropdown --}}
                                <div class="profile relative">
                                    <div id="profile-toggler" class="profile-pciture w-8 h-8 cursor-pointer">
                                        <img class="inline-block h-full object-cover w-full rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>

                                    <div id="profile-menu" class="dropdown-menu mt-6 bg-white/30 dark:bg-ireng/80 border dark:border-zinc-600 backdrop-blur-2xl absolute hidden right-3 py-2 rounded-lg">
                                        {{-- ketika user is_farmer= true maka ada tombol ke halaman dashboard --}}
                                        @if (Auth::user()->is_farmer)
                                            <a href="{{ route('petani.index') }}" class="text-gray-300 hover:text-white text-left w-full px-4 py-2 text-sm font-medium hover:bg-ireng/50">Dashboard</a>
                                        @endif
                                        {{-- log out button --}}
                                        <form method="POST" action="{{ route('auth.logout') }}">
                                            @csrf
                                            <button type="submit" class="text-gray-300 hover:text-white text-left w-full px-4 py-2 text-sm font-medium hover:bg-red-700">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                            <!-- Auth Button -->
                            <a href="{{ route('auth.login') }}" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black dark:text-white bg-accent hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                                Login
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ $active == 'home' ? 'text-accent' : '' }}">Beranda</a>
            <a href="/agrishop" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ $active == 'agrishop' ? 'text-accent' : '' }}">Toko</a>
            <a href="{{ route('tani') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ $active == 'tani-ai' ? 'text-accent' : '' }}">Tani AI</a>
            <a href="{{ route('blog') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ $active == 'blog' ? 'text-accent' : '' }}">Berita</a>
            <a href="/contact" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ $active == 'contact' ? 'text-accent' : '' }}">Kontak</a>
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
            themeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />';
        } else {
            themeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />';
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
