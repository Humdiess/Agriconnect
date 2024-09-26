@include('templates.header')

<div class="flex w-full bg-gray-100 h-screen dark:bg-ireng">
    <aside
        class="w-64 fixed left-0 top-0 bottom-0 hidden lg:block bg-white dark:bg-ireng overflow-y-auto flex-col justify-between border-r dark:border-zinc-800 scrollbar-hide">
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

                <a href="#" id="pantau-dropdown-toggle"
                class="flex items-center px-4 py-2 mt-2 {{ $active == 'pantau' ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }} rounded-lg transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6l-2 2m0 0l-2-2m4 4l2 2m-2-2l-2 2m-4 4h8m0-4H8" />
                </svg>
                Pantau
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div id="pantau-dropdown" class="hidden pl-8">
                @foreach ([
                    ['url' => '/pantau-air', 'label' => 'Pantau Kualitas Air', 'active' => $active == 'pantau-air'],
                    ['url' => '/pantau-suhu', 'label' => 'Pantau Suhu Udara & Tanah', 'active' => $active == 'pantau-suhu'],
                    ['url' => '/pantau-kelembaban', 'label' => 'Pantau Kelembaban Tanah', 'active' => $active == 'pantau-kelembaban'],
                    ['url' => '/pantau-nutrisi', 'label' => 'Pantau Nutrisi Tanah', 'active' => $active == 'pantau-nutrisi'],
                    ['url' => '/pantau-curah-hujan', 'label' => 'Pantau Curah Hujan', 'active' => $active == 'pantau-curah-hujan'],
                ] as $item)
                    <a href="{{ url($item['url']) }}"
                        class="flex items-center px-4 py-2 mt-2 {{ $item['active'] ? 'text-white bg-accent dark:bg-zinc-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700' }} rounded-lg transition-colors duration-200">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>



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
                    class="hidden absolute overflow-hidd left-0 right-0 mt-2 z-10 bg-white dark:bg-zinc-800 shadow-lg rounded-lg">
                    <a href="{{ url('/profile') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        View Profile
                    </a>
                    <a href="{{ url('/logout') }}"
                        class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        Logout
                    </a>

                    <!-- Theme Toggle -->
                    <div class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        <div class="flex justify-between items-center">
                            <span>Dark Mode</span>
                            <label class="switch">
                                <input type="checkbox" id="theme-toggle" class="theme-toggle">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </aside>
    @yield('content')
</div>

<style>
    /* no scrollbar */
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
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
input:checked + .slider {
    background-color: #4a5568; /* Darker color */
}

input:checked + .slider:before {
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
        const themeToggle = document.getElementById('theme-toggle');

        // Load previously saved theme state
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            themeToggle.checked = true;
        }

        // Toggle theme on switch change
        themeToggle.addEventListener('change', function () {
            if (themeToggle.checked) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        });

        // Dropdown toggle
        const profileDropdownToggle = document.getElementById('profile-dropdown-toggle');
        const profileDropdown = document.getElementById('profile-dropdown');

        profileDropdownToggle.addEventListener('click', function () {
            profileDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function (event) {
            if (!profileDropdownToggle.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    });
    // Event listener untuk toggle submenu Pantau
    document.getElementById('pantau-dropdown-toggle').addEventListener('click', function() {
        const dropdown = document.getElementById('pantau-dropdown');
        dropdown.classList.toggle('hidden'); // Toggle class 'hidden' untuk menampilkan/menyembunyikan submenu
    });

    // Event listener untuk toggle submenu Profile
    document.getElementById('profile-dropdown-toggle').addEventListener('click', function() {
        const dropdown = document.getElementById('profile-dropdown');
        dropdown.classList.toggle('hidden'); // Toggle class 'hidden' untuk menampilkan/menyembunyikan dropdown profile
    });
</script>

@include('templates.footer')
