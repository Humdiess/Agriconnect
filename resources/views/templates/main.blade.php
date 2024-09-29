@include('templates.header')

<header>
    <div
        class="p-4 border-b dark:border-zinc-800 fixed left-0 right-0 dark:bg-ireng/40 backdrop-blur-3xl bg-white/40 flex justify-between lg:hidden">
        {{-- navbar toggler --}}
        <div class="lg:hidden">
            <button type="button" id="mobile-menu-toggler"
                class="dark:bg-gray-800 bg-gray-100 inline-flex items-center justify-center p-2 rounded-md dark:text-gray-400 text-whit hover:text-white hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/logo/header-logo.png') }}" alt="Logo" class="w-8 h-8">
            <div>
                <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo text" class="h-6 block dark:hidden">
                <img src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo text" class="h-6 hidden dark:block">
            </div>
        </div>
    </div>
</header>
<div class="flex w-full bg-white h-screen dark:bg-ireng">
    <div id="backdrop" class="hidden fixed inset-0 bg-black opacity-50 z-30"></div>

    <aside id="menu-mobile"
        class="w-64 fixed z-[35] -left-64 lg:left-0 top-0 bottom-0 bg-white dark:bg-ireng overflow-y-auto flex flex-col justify-between border-r dark:border-zinc-800 transition-all duration-300 scrollbar-hide">
        <!-- Close Button -->
        <button type="button" id="close-menu"
            class="lg:hidden absolute top-4 right-4 p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 rounded-full hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
            <span class="sr-only">Close menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex-grow mt-8 lg:mt-0">
            <div class="p-4 border-b dark:border-zinc-800 hidden lg:block">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('img/logo/header-logo.png') }}" alt="Logo" class="w-8 h-8">
                    <div>
                        <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo text" class="h-6 block dark:hidden">
                        <img src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo text" class="h-6 hidden dark:block">
                    </div>
                </div>
            </div>
        </div>
        <nav class="my-6 px-2">
            <a href="{{ url('/') }}" class="flex items-center px-4 py-3 rounded-lg mb-2 {{ $active == 'home' ? 'text-white bg-accent dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="flex-grow">Kembali Ke Beranda</span>
            </a>
            <a href="{{ url('/dashboard-tani') }}" class="flex items-center px-4 py-3 rounded-lg mb-2 {{ $active == 'dashboard' ? 'text-white bg-accent  dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="flex-grow">Dashboard Tani</span>
            </a>

            <div class="mb-2">
                <button id="pantau-dropdown-toggle" class="flex items-center w-full px-4 py-3 rounded-lg {{ $active == 'pantau' ? 'text-white bg-accent dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200" aria-expanded="false" aria-controls="pantau-dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6l-2 2m0 0l-2-2m4 4l2 2m-2-2l-2 2m-4 4h8m0-4H8" />
                    </svg>
                    <span class="flex-grow">Kembali Ke Beranda</span>
                </a>
                <a href="{{ url('/dashboard-tani') }}"
                    class="flex items-center px-4 py-3 rounded-lg mb-2 {{ $active == 'dashboard' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span class="flex-grow">Dashboard Tani</span>
                </a>

                <div class="mb-2">
                    <button id="pantau-dropdown-toggle"
                        class="flex items-center w-full px-4 py-3 rounded-lg {{ $active == 'pantau' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200"
                        aria-expanded="false" aria-controls="pantau-dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6l-2 2m0 0l-2-2m4 4l2 2m-2-2l-2 2m-4 4h8m0-4H8" />
                        </svg>
                        <span class="flex-grow">Pantau Kualitas</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 ml-auto transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="pantau-dropdown" class="hidden pl-8 mt-2 space-y-1">
                        @foreach ([['route' => 'pantau.air', 'label' => 'Kualitas Air', 'active' => $active == 'pantau-air'], ['route' => 'pantau.suhu', 'label' => 'Suhu Udara & Tanah', 'active' => $active == 'pantau-suhu'], ['route' => 'pantau.kelembaban', 'label' => 'Kelembaban Tanah', 'active' => $active == 'pantau-kelembaban'], ['route' => 'pantau.nutrisi', 'label' => 'Nutrisi Tanah', 'active' => $active == 'pantau-nutrisi'], ['route' => 'pantau.curah-hujan', 'label' => 'Curah Hujan', 'active' => $active == 'pantau-curah-hujan']] as $item)
                            <a href="{{ route($item['route']) }}"
                                class="block px-4 py-2 rounded-lg {{ $item['active'] ? 'text-white bg-accent dark:bg-zinc-700 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700' }} transition-colors duration-200">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ url('/product') }}"
                    class="flex items-center px-4 py-3 rounded-lg {{ $active == 'product' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="flex-grow">Kelola Produk Anda</span>
                </a>
            </nav>
        </div>

        <!-- Profile section at the bottom -->
        <div class="p-4 border-t dark:border-zinc-800">
            <div class="relative">
                <button id="profile-dropdown-toggle"
                    class="flex items-center w-full p-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors duration-200 focus:outline-none"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="h-8 w-8 rounded-full mr-2 flex-shrink-0" src="/img/farmer.svg" alt="User Avatar">
                    <span class="font-medium flex-grow text-left">{{ auth()->user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-auto transition-transform duration-200"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>

                <div id="pantau-dropdown" class="hidden pl-8 mt-2 space-y-1">
                    @foreach ([
                        ['route' => 'pantau.air', 'label' => 'Kualitas Air', 'active' => $active == 'pantau-air'],
                        ['route' => 'pantau.suhu', 'label' => 'Suhu Udara & Tanah', 'active' => $active == 'pantau-suhu'],
                        ['route' => 'pantau.kelembaban', 'label' => 'Kelembaban Tanah', 'active' => $active == 'pantau-kelembaban'],
                        ['route' => 'pantau.nutrisi', 'label' => 'Nutrisi Tanah', 'active' => $active == 'pantau-nutrisi'],
                        ['route' => 'pantau.curah-hujan', 'label' => 'Curah Hujan', 'active' => $active == 'pantau-curah-hujan'],
                    ] as $item)
                        <a href="{{ route($item['route']) }}" class="block px-4 py-2 rounded-lg {{ $item['active'] ? 'text-white bg-accent  dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700' }} transition-colors duration-200">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="{{ url('/product') }}" class="flex items-center px-4 py-3 rounded-lg {{ $active == 'product' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="flex-grow">Kelola Produk Anda</span>
            </a>
        </nav>
    </div>

    <!-- Profile section at the bottom -->
    <div class="p-4 border-t dark:border-zinc-800">
        <div class="relative">
            <button id="profile-dropdown-toggle" aria-label="Open user profile" class="flex items-center w-full p-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors duration-200 focus:outline-none" aria-haspopup="true" aria-expanded="false">
                <img class="h-8 w-8 rounded-full mr-2 flex-shrink-0" src="/img/farmer.svg" alt="User Avatar">
                <span class="font-medium flex-grow text-left">Masyhudi Affandi</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-auto transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="profile-dropdown" class="hidden absolute bottom-full left-0 right-0 mb-2 bg-white dark:bg-zinc-800 border dark:border-zinc-600 rounded-lg overflow-hidden">
                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                    View Profile
                </a>
                <a href="{{ url('/logout') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                    Logout
                </a>

                <!-- Theme Toggle -->
                <div class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                    <div class="flex justify-between items-center">
                        <span>Dark Mode</span>
                        <label class="switch relative inline-block w-10 h-6">
                            <input aria-label="Toggle dark mode" type="checkbox" id="theme-toggle" class="theme-toggle sr-only">
                            <span class="slider absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 dark:bg-gray-600 rounded-full transition-colors duration-200 before:absolute before:h-4 before:w-4 before:left-1 before:bottom-1 before:bg-white before:rounded-full before:transition-transform before:duration-200 before:ease-in-out"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div class="content-wrapper lg:ml-64 w-full mt-16 lg:mt-0    bg-white dark:bg-ireng">
        @yield('content')
    </div>
</div>

<style>
    /* no scrollbar */
    .scrollbar-hide {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* The switch - the outer container */
    .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
    }

    /* The slider - the round button */
    .switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .switch .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 2px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    /* Checked - dark mode */
    input:checked+.slider {
        background-color: #4a5568;
        /* Darker color */
    }

    input:checked+.slider:before {
        transform: translateX(20px);
    }

    /* Rounded switch */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        themeToggle.checked = true;
    }
    themeToggle.addEventListener('change', () => {
        document.documentElement.classList.toggle('dark', themeToggle.checked);
        localStorage.setItem('theme', themeToggle.checked ? 'dark' : 'light');
    });

    // Profile Dropdown Toggle
    const profileDropdownToggle = document.getElementById('profile-dropdown-toggle');
    const profileDropdown = document.getElementById('profile-dropdown');

    // Toggle dropdown visibility
    profileDropdownToggle.addEventListener('click', (e) => {
        profileDropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!profileDropdown.contains(event.target) && !profileDropdownToggle.contains(event.target)) {
            profileDropdown.classList.add('hidden');
        }
        themeToggle.addEventListener('change', () => {
            document.documentElement.classList.toggle('dark', themeToggle.checked);
            localStorage.setItem('theme', themeToggle.checked ? 'dark' : 'light');
        });

        // Profile Dropdown Toggle
        const profileDropdownToggle = document.getElementById('profile-dropdown-toggle');
        const profileDropdown = document.getElementById('profile-dropdown');

        // Toggle dropdown visibility
        profileDropdownToggle.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent the click from closing the dropdown immediately
            profileDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!profileDropdown.contains(event.target) && !profileDropdownToggle.contains(event
                    .target)) {
                profileDropdown.classList.add('hidden');
            }
        });

        // Dropdown Toggle Helper Function
        const toggleDropdown = (buttonId, dropdownId, stateKey) => {
            const button = document.getElementById(buttonId);
            const dropdown = document.getElementById(dropdownId);
            const isOpen = localStorage.getItem(stateKey) === 'true';

            // Set the initial state based on localStorage
            if (isOpen) {
                dropdown.classList.remove('hidden');
            }

            button.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent the click from closing the dropdown immediately
                const shouldBeOpen = dropdown.classList.toggle('hidden');
                localStorage.setItem(stateKey, !shouldBeOpen);
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (event) => {
                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    localStorage.setItem(stateKey, false);
                }
            });
        };

        // Pantau Dropdown - Keep its state persistent across pages
        toggleDropdown('pantau-dropdown-toggle', 'pantau-dropdown', 'pantauDropdownOpen');

        // Mobile Menu
        const mobileMenu = {
            button: document.getElementById('mobile-menu-toggler'),
            menu: document.getElementById('menu-mobile'),
            closeButton: document.getElementById('close-menu'),
            backdrop: document.getElementById('backdrop'),

            open() {
                this.menu.classList.replace('-left-64', 'left-0');
                this.backdrop.classList.remove('hidden');
            },
            close() {
                this.menu.classList.replace('left-0', '-left-64');
                this.backdrop.classList.add('hidden');
            },
            init() {
                this.button.addEventListener('click', () => this.open());
                this.closeButton.addEventListener('click', () => this.close());
                this.backdrop.addEventListener('click', () => this.close());
            }
        };

        mobileMenu.init();
    });
</script>


@include('templates.footer')
