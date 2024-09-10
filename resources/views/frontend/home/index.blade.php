@include('frontend.layouts.header')

<section class="navbar flex justify-between py-5 px-16 items-center z-50">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="">
        </a>
    </div>

    <div class="button">
        <a class="bg-[#5DBB63] px-8 py-[0.8rem] text-white text-sm rounded-full" href="#">Sign Up</a>
    </div>
</section>

<section class="hero-container container mx-auto relative" id="home">
    <!-- Aurora Effects -->
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora"></div>
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora"></div>

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
            <div class="hero-title max-w-[29rem] mt-[4rem]" data-aos="fade-up">
                <h1 class="hero-title-text text-center text-3xl font-bold">
                    <span class="bg-gradient-to-r from-[#27a002] to-[#1d1515] bg-clip-text text-transparent">Agri</span>
                    Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital
                </h1>
            </div>
            <a href="#" class="hero-button mt-6 px-6 py-2 bg-[#5DBB63] text-white mb-0 rounded-full font-light" data-aos="fade-up" data-aos-delay="400">
                Pelajari lebih lanjut <i class="fa-solid ms-2 fa-chevron-right"></i>
            </a>
        </div>

        <div class="hero-image-wrapper w-full flex justify-center mt-16" data-aos="fade-up" data-aos-delay="600">
            <div class="hero-image w-[60rem] h-[33.75rem] bg-white rounded-3xl border border-gray-200 p-2">
                <img class="w-full h-full rounded-2xl" src="https://plus.unsplash.com/premium_photo-1721487064031-a394c7267785?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="sponsor-container mb-8">
    <div class="sponsor-wrapper">
        <div class="sponsor">
            <div class="sponsor-header w-100 flex justify-center py-10" data-aos="fade-up">
                <h1 class="text-xl font-semibold">Kami didukung oleh</h1>
            </div>
            <div class="sponsor-list container mx-auto py-5 flex items-center justify-center gap-8">
                <div class="sponsor-item w-36" data-aos="fade-up" data-aos-delay="200">
                    <img class="w-full" src="{{ asset('img/sponsor/kementrian.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36" data-aos="fade-up" data-aos-delay="400">
                    <img class="w-full" src="{{ asset('img/sponsor/padi-tech.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36" data-aos="fade-up" data-aos-delay="600">
                    <img class="w-full" src="{{ asset('img/sponsor/open-ai.png') }}" alt="" loading="lazy">
                </div>
                <div class="sponsor-item w-36" data-aos="fade-up" data-aos-delay="800">
                    <img class="w-full" src="{{ asset('img/sponsor/tokopedia.png') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-container bg-[#5DBB63]">
    <div class="about-wrapper">
        <div class="about">
            <div class="about-header w-100 flex justify-center py-10" data-aos="fade-up">
                <h1 class="text-xl font-semibold">Tentang Kami</h1>
            </div>
            <div class="racesWrapper h-screen">
                <div class="races">
                    <h2>Monaco</h2>
                    <h2>Austria</h2>
                    <h2>Hungary</h2>
                    <h2>Netherlands</h2>
                    <h2>Japan</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="apalah h-[200vh]"></section>

@include('frontend.layouts.footer')

