@include('frontend.layouts.header')

<section class="navbar flex justify-between py-5 px-16 items-center z-50">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="">
        </a>
    </div>

    @auth
        <div class="relative">
            <button id="user-dropdown"
                class="bg-[#5DBB63] px-8 py-[0.8rem] text-white text-sm rounded-full flex items-center justify-between">
                {{ Auth::user()->name }}
                <span class="ml-2">&#9662;</span>
            </button>

            <div id="dropdown-menu"
                class="absolute border rounded-3xl mt-2 p-1 w-full bg-white rounded overflow-hidden z-[99]"
                style="min-width: 200px; height: 0; opacity: 0;">
                <a href="#"
                    class="w-full text-left px-4 py-2 text-sm hover:bg-red-500 rounded-3xl hover:text-white flex items-center">
                    <i class="fa-solid fa-user mr-2"></i>
                    Profile
                </a>
                <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-500 rounded-3xl hover:text-white flex items-center">
                        <i class="fa-solid fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
        <div class="button">
            <a class="bg-[#5DBB63] px-8 py-[0.8rem] text-white text-sm rounded-lg" href="/sign-up">Sign Up</a>
        </div>
    @endauth

</section>

<section class="hero-container container mx-auto relative" id="home">
    <!-- Aurora Effects -->
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
    </div>
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora">
    </div>

    <div class="triangle-patterns top-[13rem] right-[22rem] rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>
    <div class="triangle-patterns top-[1rem] right-[38rem] rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>
    <div class="triangle-patterns top-[10rem] left-[18rem] -rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>

    <div class="hero-wrapper w-full relative z-10">
        <div class="hero w-100 flex flex-col items-center justify-center">
            <div class="hero-title max-w-[29rem] mt-[4rem]">
                <h1 class="hero-title-text text-center text-3xl font-bold">
                    <span class="bg-gradient-to-r from-[#27a002] to-[#1d1515] bg-clip-text text-transparent">Agri</span>
                    Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital
                </h1>
            </div>
            <a href="#" class="hero-button mt-6 px-6 py-2 bg-[#5DBB63] text-white mb-0 rounded-lg font-light">
                Pelajari lebih lanjut <i class="fa-solid ms-2 fa-chevron-right"></i>
            </a>
        </div>

        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-[60rem] h-[33.75rem] bg-white rounded-3xl border border-gray-200 p-2">
                <img class="w-full h-full rounded-2xl"
                    src="https://images.unsplash.com/photo-1662099892443-0c241cbb700d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="image">
            </div>
        </div>
    </div>
</section>

<section class="sponsor-container mb-8">
    <div class="sponsor-wrapper">
        <div class="sponsor">
            <div class="sponsor-header w-100 flex justify-center py-10">
                <h1 class="text-xl font-semibold">Kami didukung oleh</h1>
            </div>
            <div class="sponsor-list container mx-auto py-5 flex items-center justify-center gap-8">
                <div class="sponsor-item w-36">
                    <img class="w-full" src="{{ asset('img/sponsor/kementrian.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36">
                    <img class="w-full" src="{{ asset('img/sponsor/padi-tech.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36">
                    <img class="w-full" src="{{ asset('img/sponsor/open-ai.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36">
                    <img class="w-full" src="{{ asset('img/sponsor/tokopedia.png') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-container bg-[#5DBB63]">
    <div class="about-wrapper">
        <div class="about">
            <div class="about-header w-100 flex justify-center py-10">
                <h1 class="text-xl font-semibold">Tentang Kami</h1>
            </div>
            <div class="storyWrapper h-screen">
                <div class="story">
                    <div class="card w-screen h-screen flex items-center m-8 rounded-3xl">
                        <h1 class="text-white text-3xl">halo</h1>
                    </div>
                    <div class="card w-screen h-screen flex items-center m-8 rounded-3xl">
                        <h1 class="text-white text-3xl">halo</h1>
                    </div>
                    <div class="card w-screen h-screen flex items-center m-8 rounded-3xl">
                        <h1 class="text-white text-3xl">halo</h1>
                    </div>
                    <div class="card w-screen h-screen flex items-center m-8 rounded-3xl">
                        <h1 class="text-white text-3xl">halo</h1>
                    </div>
                    <div class="card w-screen h-screen flex items-center m-8 rounded-3xl">
                        <h1 class="text-white text-3xl">halo</h1>
                    </div>
                    <!-- Add more story cards here if needed -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-containe container mx-auto">
    <div class="section-wrapper">
        <div class="section">

        </div>
    </div>
</section>

<section class="apalah h-[200vh]"></section>

@include('frontend.layouts.footer')
