@include('frontend.layouts.header')

<section class="hero-container container mx-auto">
    <div class="hero-wrapper w-full">
        <div class="hero w-100 flex flex-col items-center justify-center">
            <div class="hero-title max-w-md mt-24">
                <h1 class="hero-title-text text-center text-3xl font-bold"><span class="bg-gradient-to-r from-[#27a002] to-[#1d1515] bg-clip-text text-transparent">Agri</span>Connect: Membangun Petani Maju dengan AI, IoT, dan Pemasaran Digital</h1>
            </div>
            <a href="#" class="hero-button mt-6 px-4 py-2 bg-[#5DBB63] text-white mb-0 rounded-full font-light">Pelajari lebih lanjut</a>
        </div>

        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-[60rem] h-[33.75rem] bg-white rounded-3xl border border-gray-200 p-2">
                <img class="w-full h-full rounded-2xl" src="https://img.freepik.com/free-vector/technology-background-with-statistics_23-2148924486.jpg?t=st=1725889564~exp=1725893164~hmac=a5267c60cfe0fe9f4f64f8ddc730d52b00825eb05bdff29dc0a2becc61a014af&w=740" alt="image">
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')
