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
            <div class="hero-title max-w-[29rem] mt-[4rem]">
                <h1 class="hero-title-text text-center text-3xl font-bold">
                    <span class="bg-gradient-to-r from-[#27a002] to-[#1d1515] bg-clip-text text-transparent">Agri</span>Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital
                </h1>
            </div>
            <a href="#" class="hero-button mt-6 px-6 py-2 bg-[#5DBB63] text-white mb-0 rounded-full font-light">Pelajari lebih lanjut<i class="fa-solid ms-2 fa-chevron-right"></i></a>
        </div>

        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-[60rem] h-[33.75rem] bg-white rounded-3xl border border-gray-200 p-2">
                <img class="w-full h-full rounded-2xl" src="https://plus.unsplash.com/premium_photo-1721487064031-a394c7267785?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
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

<section class="about-us-container bg-[#5DBB63] py-12 flex justify-center items-center" id="about">
    <div class="about-us-wrapper container mx-auto text-center" data-aos="fade-up">
        <h1 class="glitch-text text-3xl font-bold text-white mb-4" data-text="Tentang Kami">Tentang Kami</h1>

        <p class="text-white text-lg max-w-3xl mx-auto">
            AgriConnect adalah platform yang memanfaatkan kecerdasan buatan (AI), Internet of Things (IoT), dan strategi pemasaran digital untuk membantu para petani Indonesia berkembang di era digital. Dengan dukungan teknologi, kami menghubungkan petani langsung ke pasar dan memberikan solusi cerdas untuk pertanian yang lebih efisien dan berkelanjutan.
        </p>
    </div>
</section>


<section class="features-container container mx-auto">
    <div class="features-wrapper">
        <div class="features flex justify-center">
            <div class="features-header py-12">
                <h1 class="text-xl font-semibold">Teknologi dan Pasar dalam Genggaman Petani!</h1>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')

<script>
    // Hero Section Animations
    anime({
        targets: '.hero-title-text',
        opacity: [0, 1],
        translateY: [-50, 0],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: anime.stagger(200)
    });

    anime({
        targets: '.hero-button',
        opacity: [0, 1],
        translateY: [20, 0],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: 200
    });

    anime({
        targets: '.hero-image',
        opacity: [0, 1],
        scale: [0.8, 1],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: 3 loading="lazy"00
    });

    // Sponsor Section Animations
    anime({
        targets: '.sponsor-item img',
        opacity: [0, 1],
        scale: [0.8, 1],
        duration: 800,
        easing: 'easeOutExpo',
        delay: anime.stagger(200, { start: 1000 })
    });

    // About Us Section Animations
    anime({
        targets: '.about-us-container h1',
        opacity: [0, 1],
        translateY: [50, 0],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: 500
    });

    // Features Section Animations
    anime({
        targets: '.features-header h1',
        opacity: [0, 1],
        translateY: [50, 0],
        duration: 1000,
        easing: 'easeOutExpo',
        delay: 500
    });
</script>
