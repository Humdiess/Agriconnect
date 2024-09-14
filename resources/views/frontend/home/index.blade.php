@include('frontend.layouts.header')

<!-- Navbar Section -->
<section class="navbar flex justify-between py-6 px-16 items-center z-50">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
        </a>
    </div>

    @auth
    <!-- User Dropdown -->
    <div class="relative">
        <button id="user-dropdown" class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg flex items-center justify-between">
            {{ Auth::user()->name }}
            <span class="ml-2">&#9662;</span>
        </button>

            <div id="dropdown-menu"
                class="absolute border rounded-lg mt-2 p-1 w-full bg-white overflow-hidden transition-all duration-300"
                style="min-width: 150px; height: 0; opacity: 0; z-index: 999999999;">

                @can('is_farmer')
                    <a href="/dashboard-tani"
                        class="w-full text-left px-3 py-2 text-sm text-green-500 hover:bg-green-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-table-columns mr-2"></i>
                        Dashboard Tani
                    </a>
                @endcan

                <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-3 py-2 text-sm text-red-500 hover:bg-red-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
    <!-- Sign Up Button -->
    <div class="button flex items-center">
        <a class="px-8 py-[0.8rem] text-accent text-sm rounded-lg" href="/login">Sign In</a>
        <a class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg" href="/sign-up">Sign Up</a>
    </div>
    @endauth
</section>

<!-- Hero Section -->
<section class="hero-container container mx-auto relative" id="home">
    <!-- Aurora Effects -->
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
    </div>
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora">
    </div>

    <!-- Triangle Patterns -->
    <div class="triangle-patterns top-[13rem] right-[22rem] -rotate-45 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="Triangle Pattern">
    </div>
    <div class="triangle-patterns top-[1rem] right-[38rem] rotate-45 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="Triangle Pattern">
    </div>
    <div class="triangle-patterns top-[10rem] left-[18rem] -rotate-45 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="Triangle Pattern">
    </div>

    <!-- Hero Content -->
    <div class="hero-wrapper w-full relative z-10">
        <div class="hero w-100 flex flex-col items-center justify-center">
            <div class="hero-title max-w-[36rem] mt-[4rem]">
                <h1 class="hero-title-text text-center text-zinc-900 dark:text-white text-4xl font-bold">
                    <span id="hero-title-animated"
                        class="bg-gradient-to-r from-accent to-zinc-900 dark:to-white bg-clip-text text-transparent">Agri</span>
                    Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital
                </h1>
            </div>
            <a href="#" class="hero-button mt-10 px-6 py-2 bg-accent text-white mb-0 rounded-lg font-light">
                Pelajari lebih lanjut <i class="fa-solid ms-2 fa-chevron-right"></i>
            </a>
        </div>

        <!-- Hero Image -->
        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-[60rem] h-[33.75rem] rounded-3xl border border-zinc-200 p-2">
                <img class="w-full h-full rounded-2xl"
                    src="https://images.unsplash.com/photo-1662099892443-0c241cbb700d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- Sponsor Section -->
<section class="sponsor-container mb-8">
    <div class="sponsor-wrapper">
        <div class="sponsor">
            <div class="sponsor-header w-100 flex justify-center py-10">
                <h1 class="text-xl dark:text-white text-zinc-900 font-semibold">Kami didukung oleh</h1>
            </div>
            <div class="sponsor-list container mx-auto py-3 flex items-center justify-center gap-8">
                @foreach (['kementrian.png', 'padi-tech.png', 'open-ai.png', 'tokopedia.png'] as $sponsor)
                    <div class="sponsor-item w-36">
                        <div class="p-3 bg-white dark:bg-zinc-white rounded-lg dark:border  dark:border-zinc-600">
                            <img class="w-full" src="{{ asset("img/sponsor/$sponsor") }}" alt="Sponsor Logo"
                                loading="lazy">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<!-- About Section -->
<section class="about-container container mx-auto px-16 py-12 h-[200vh]">
    <div class="about-wrapper" id="about">
        <div class="about">
            <div class="about-header w-100 pt-10 max-w-[58rem]">
                <p class="text-accent mb-2">AGRICONNECT</p>
                <h1 class="text-[36px] leading-tight text-zinc-900 font-semibold dark:text-white">AGRICONNECT: Solusi Terbaik Untuk Masa Depan dan Teknologi Pertanian Indonesia</h1>
            </div>
            <div class="about-description mt-4 max-w-[52rem]">
                <p class="text-zinc-900 dark:text-zinc-300">Indonesia menghadapi tantangan di sektor pertanian dengan semakin menurunnya minat generasi muda, yang dapat mengancam keberlanjutan sektor ini. AgriConnect hadir sebagai solusi dengan menghubungkan petani, teknologi, dan pasar melalui platform digital untuk mendorong adopsi teknologi modern dan membuka akses pasar yang lebih luas.</p>
            </div>
               <div class="absolute w-[25rem] h-[25rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-20 blur-3xl rounded-full top-[112rem] left-[32rem] z-0"></div>
            <div class="about-content h-[46rem] mt-8">
                <!-- Content to be added here -->
                <div class="flex h-full w-full items-center justify-center">
                    <div class="grid h-full w-full grid-cols-3 grid-rows-2 gap-4">
                      <div
                        class="font-sans col-span-1 row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl flex items-center justify-center"
                      >
                        <p>Salmon</p>
                      </div>

                      <div
                        class="font-sans col-span-1 row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl flex items-center justify-center"
                      >
                        <p>Broccoli</p>
                      </div>

                      <div
                        class="font-sans col-span-1 row-span-2 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl flex items-center justify-center"
                      >
                        <p>Tamago</p>
                      </div>

                      <div
                        class="font-sans col-span-2 row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl flex items-center justify-center"
                      >
                        <p>Pork</p>
                      </div>

                    </div>
                  </div>

            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')
