@include('frontend.layouts.header')

<section class="hero-container container mx-auto relative" id="home">
    <!-- Aurora Effects -->
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora"></div>
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora"></div>

    <div class="triangle-patterns top-[17rem] right-[22rem] rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>
    <div class="triangle-patterns top-[4rem] right-[38rem] rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>
    <div class="triangle-patterns top-[13rem] left-[18rem] -rotate-12 absolute">
        <img src="{{ asset('img/triangle.svg') }}" alt="">
    </div>

    <div class="hero-wrapper w-full relative z-10">
        <div class="hero w-100 flex flex-col items-center justify-center">
            <div class="hero-title max-w-[29rem] mt-32">
                <h1 class="hero-title-text text-center text-3xl font-bold"><span class="bg-gradient-to-r from-[#27a002] to-[#1d1515] bg-clip-text text-transparent">Agri</span>Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital</h1>
            </div>
            <a href="#" class="hero-button mt-6 px-6 py-2 bg-[#5DBB63] text-white mb-0 rounded-full font-light">Pelajari lebih lanjut<i class="fa-solid ms-2 fa-chevron-right"></i></a>
        </div>

        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-[60rem] h-[33.75rem] bg-white rounded-3xl border border-gray-200 p-2">
                <img class="w-full h-full rounded-2xl" src="https://img.freepik.com/free-vector/technology-background-with-statistics_23-2148924486.jpg?t=st=1725889564~exp=1725893164~hmac=a5267c60cfe0fe9f4f64f8ddc730d52b00825eb05bdff29dc0a2becc61a014af&w=740" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="sponsor-container">
    <div class="sponsor-wrapper">
        <div class="sponsor">
            <div class="sponsor-header w-100 flex justify-center py-10">
                <h1 class="text-xl font-semibold">Kami didukung oleh</h1>
            </div>
            <div class="sponsor-list container mx-auto py-5">
                <img src="{{ asset('img/sponsor/kementrian.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-us-container bg-[#5DBB63] py-12 flex justify-center items-center" id="about">
    <div class="about-us-wrapper">
        <div class="about-us">
            <h1>halo</h1>
        </div>
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
