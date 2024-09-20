<section class="navbar justify-between py-6 px-16 items-center z-50 hidden md:flex">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28 block dark:hidden" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
            <img class="w-28 hidden dark:block" src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo">
        </a>
    </div>

    @auth
        <!-- User Dropdown -->
        <div class="relative">
            <button id="user-dropdown"
                class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg flex items-center justify-between">
                {{ Auth::user()->name }}
                <span class="ml-2">&#9662;</span>
            </button>

            <div id="dropdown-menu"
            class="absolute border rounded-lg mt-2 p-1 min-w-[200px] w-auto bg-white dark:bg-zinc-900 dark:border-zinc-900 overflow-hidden transition-all duration-300"
            style="height: 0; opacity: 0; z-index: 999999999;">

            @can('is_farmer')
                <a href="/dashboard-tani"
                    class="w-full text-left px-3 py-2 text-sm text-green-500 hover:bg-green-500 rounded-md hover:text-white flex items-center whitespace-nowrap">
                    <i class="fa-solid fa-table-columns mr-2"></i>
                    Dashboard Tani
                </a>
            @endcan

            <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="button" onclick="confirmLogout()"
                    class="w-full text-left px-3 py-2 text-sm text-red-500 hover:bg-red-500 rounded-md hover:text-white flex items-center whitespace-nowrap">
                    <i class="fa-solid fa-sign-out-alt mr-2"></i>
                    Logout
                </button>
            </form>
        </div>

        </div>
    @else
        <!-- Sign In and Sign Up Buttons -->
        <div class="flex items-center space-x-4">
            <a class="px-6 py-2 border border-accent text-accent text-sm rounded-md transition-colors duration-300 hover:bg-accent hover:text-white"
                href="/login">
                Sign In
            </a>
            <a class="bg-accent px-6 py-2 text-white text-sm rounded-md transition-colors duration-300 hover:bg-accent-dark"
                href="/sign-up">
                Sign Up
            </a>
        </div>
    @endauth
</section>


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
