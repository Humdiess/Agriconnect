@include('templates.header')

<div class="bg-ireng/25 backdrop-blur-lg p-4 fixed left-0 right-0 w-full border-b border-zinc-700 z-50 md:hidden">
    <div class="w-fit">
        <label for="sidebar-mobile-fixed" class="btn bg-ireng/35 backdrop-blur-lg border border-zinc-700 sm:hidden">
            <i class="fas fa-bars"></i>
        </label>
    </div>
</div>
<div class="flex flex-row sm:gap-3 pt-8 md:pt-0">
    <div class="sm:w-full sm:max-w-[18rem]">
        <input type="checkbox" id="sidebar-mobile-fixed" class="sidebar-state" />
        <label for="sidebar-mobile-fixed" class="sidebar-overlay"></label>
        <aside
            class="sidebar sidebar-fixed-left sidebar-mobile h-full justify-start max-sm:fixed max-sm:-translate-x-full bg-white dark:bg-ireng border-r dark:border-zinc-700">
            <section class="sidebar-title items-center p-4">
                <img src="{{ asset('img/logo/app-logo.png') }}" alt="logo" class="h-10 w-10 rounded-full">
                <div class="flex flex-col ml-4">
                    <span class="dark:text-gray-200 text-ireng">Agriconnect</span>
                    <span class="text-xs font-normal text-content2">Petani tebu</span>
                </div>
            </section>
            <section class="sidebar-content">
                <nav class="menu rounded-md">
                    <section class="menu-section px-4">
                        <ul class="menu-items">
                            <a href="{{ route('petani.index') }}">
                                <li class="menu-item text-ireng dark:text-white hover:bg-accent hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Dashboard
                                </li>
                            </a>
                            <li class="dark:text-white">
                                <input type="checkbox" id="menu-1" class="menu-toggle" />
                                <label
                                    class="menu-item justify-between hover:bg-accent hover:text-white text-ireng dark:text-white"
                                    for="menu-1">
                                    <div class="flex gap-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3v18h18M3 12h18M8 6v6m4-6v6m4-6v6" />
                                        </svg>
                                        <span>Pantau Lahan</span>
                                    </div>

                                    <span class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </label>

                                <div class="menu-item-collapse">
                                    <div class="min-h-0">
                                        <label class="menu-item menu-item-disabled ml-6">Pantau lahan</label>
                                        <a href="{{ route('pantau.air') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Irigasi</a>
                                        <a href="{{ route('pantau.suhu') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Suhu
                                            Lahan</a>
                                        <a href="{{ route('pantau.kelembapan') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Kelembapan
                                        </a>
                                        <a href="{{ route('pantau.nutrisi') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Nutrisi
                                            Tanaman</a>
                                        <a href="{{ route('pantau.curah-hujan') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Curah
                                            hujan</a>
                                        <a href="{{ route('pantau.tanggal') }}"
                                            class="menu-item ml-6 dark:text-white text-ireng hover:bg-accent hover:text-white">Tanggal
                                            tanam <span class="badge badge-flat-success">AI Powered</span></a>
                                    </div>
                                </div>
                            </li>
                            <a href="{{ route('product.index') }}">
                                <li class="menu-item dark:text-white text-ireng hover:bg-accent hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22"
                                        height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 10l5 -6l5 6"></path>
                                        <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                        <path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    </svg>
                                    Products
                                </li>
                            </a>
                        </ul>
                    </section>
                </nav>
            </section>
            <section
                class="sidebar-footer justify-end pt-2 dark:bg-ireng bg-white dark:text-white border-t dark:border-t-zinc-700">
                <div class="dropdown z-50 flex h-fit w-full cursor-pointer">
                    <label class="whites mx-2 flex h-fit w-full cursor-pointer p-0" tabindex="0">
                        <div class="flex flex-row gap-4 p-4">
                            <div class="avatar-square avatar avatar-md rounded-full">
                                <img src="https://i.pravatar.cc/150?img=30" alt="avatar" />
                            </div>

                            <div class="flex flex-col text-ireng dark:text-white">
                                <span>{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </label>
                    <div class="dropdown-menu-right-top dropdown-menu ml-2 bg-accent border border-zinc-800">
                        <div class="">
                            <button id="theme-toggle" aria-label="Toggle theme"
                                class="p-2 rounded-full inline text-accent bg-white dark:text-accent hover:bg-gray-300 dark:text-white dark:bg-gray-700  dark:hover:bg-gray-900 ">
                                <svg id="theme-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </button>
                        </div>
                        <a href="{{ route('home') }}"
                            class="dropdown-item text-sm my-3 text-white hover:bg-white hover:text-accent">Kembali ke
                            beranda</a>
                        <!-- Theme Toggle Button -->
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="dropdown-item text-sm hover:bg-white text-red-600">Logout</button>
                        </form>
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <div class="flex w-full min-h-svh flex-col p-4">


        <div class="my-4">
            @yield('content')
        </div>
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



@include('templates.footer')
