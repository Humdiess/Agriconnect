@include('frontend.layouts.header')

<!-- Navbar Section -->
<x-navbar />

<!-- Hero Section -->
<section class="hero-container container mx-auto relative" id="home">
    <!-- Aurora Effects -->
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora"></div>
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora"></div>

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
        <div class="hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="hero-title mt-[8rem] md:mt-[3rem] text-center">
                <h1 class="text-3xl text-center leading-9 font-bold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    <span class="block">AgriConnect:</span>
                    <span class="block text-accent max-w-[46rem] text-center">Mendukung Pertanian Tebu di Sidoarjo</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Meningkatkan Produktivitas dan Kualitas melalui Teknologi
                </p>
            </div>
            <a href="#about" class="hero-button w-fit mt-10 px-6 py-2 bg-accent text-white mb-0 rounded-lg font-light">
                Pelajari lebih lanjut <i class="fa-solid ms-2 fa-chevron-down"></i>
            </a>
        </div>

        <!-- Hero Image -->
        <div class="hero-image-wrapper w-full flex justify-center mt-12 aspect-video">
            <div class="hero-image w-[60rem] h-[33.75rem] aspect-video rounded-xl border border-zinc-200 p-2">
                <img class="w-full h-full object-cover rounded-lg hidden dark:block aspect-video"
                    src="{{ asset('img/tani/tani-dark.png') }}" alt="Hero Image">
                <img class="w-full h-full object-cover rounded-lg block dark:hidden aspect-video"
                    src="{{ asset('img/tani/tani-light.png') }}" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- Sponsor Section -->
<section class="sponsor-container mx-auto px-8 py-16">
    <div class="sponsor-wrapper">
        <div class="sponsor-list container mx-auto flex items-center justify-center gap-8 overflow-x-auto whitespace-nowrap scrollbar-hide">
            @foreach (['kementrian.png', 'padi-tech.png', 'open-ai.png', 'tokopedia.png'] as $sponsor)
                <div class="sponsor-item w-36 shrink-0">
                    <div class="p-3 bg-white dark:bg-zinc-white rounded-lg dark:border dark:border-zinc-600">
                        <img class="w-full" src="{{ asset("img/sponsor/$sponsor") }}" alt="Sponsor Logo" loading="lazy">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- end sponsor section --}}

<section class="about-container container mx-auto px-8 md:px-16 py-8">
    <div class="about-wrapper w-full" id="about">
        <div class="about w-full">
            <div class="about-header w-full pt-8 text-center">
                <h2 class="text-base text-accent font-semibold tracking-wide uppercase">AGRICONNECT</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Solusi untuk Peningkatan Produktivitas Tebu di Sidoarjo
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                    AgriConnect hadir untuk mendukung petani tebu di Sidoarjo dalam meningkatkan produktivitas dan kualitas melalui teknologi modern dan pelatihan yang tepat.
                </p>
            </div>
            <div class="absolute w-[25rem] h-[25rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-20 blur-3xl rounded-full top-[112rem] left-[32rem] z-0"></div>
            <div class="about-content mt-8">
                <div class="flex items-center justify-center h-full w-full">
                    <div class="grid grid-cols-2 grid-rows-10 gap-4 p-2 rounded-lg shadow-md h-full w-full">

                      <div class="col-span-2 row-span-2 rounded-lg border border-zinc-800 bg-zinc-900/30 h-[20rem] shadow-md flex items-center justify-center">
                        <p class="font-mplus2variable">Salmon</p>
                      </div>

                      <div class="col-span-1 row-span-2 rounded-lg border border-zinc-800 bg-zinc-900/30 h-[20rem] shadow-md flex items-center justify-center">
                        <p class="font-mplus2variable">Broccoli</p>
                      </div>

                      <div class="col-span-1 row-span-2 rounded-lg border border-zinc-800 bg-zinc-900/30 h-[20rem] shadow-md flex items-center justify-center">
                        <p class="font-mplus2variable">Tamago</p>
                      </div>

                      <div class="col-span-2 row-span-2 rounded-lg border border-zinc-800 bg-zinc-900/30 h-[20rem] shadow-md flex items-center justify-center">
                        <p class="font-mplus2variable">Pork</p>
                      </div>

                    </div>
                  </div>

            </div>
        </div>
    </div>
</section>

{{-- start-faq --}}
<section class="faq-container container mx-auto px-8 md:px-16 py-16">
    <div class="faq-wrapper w-full">
        <div class="faq w-full">
            <div class="faq-header w-full pt-8 text-center">
                <h2 class="text-base text-accent font-semibold tracking-wide uppercase">FAQ</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Pertanyaan yang Sering Diajukan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                    Temukan jawaban untuk pertanyaan umum tentang AgriConnect dan layanan kami untuk petani tebu di Sidoarjo
                </p>
            </div>

            @php
            $faqs = [
                [
                    'question' => 'Apa itu AgriConnect dan bagaimana ini bisa membantu saya sebagai petani tebu?',
                    'answer' => 'AgriConnect adalah platform yang menghubungkan petani tebu dengan teknologi modern untuk meningkatkan produktivitas dan akses pasar, membantu Anda dalam manajemen lahan yang lebih efisien.'
                ],
                [
                    'question' => 'Apa saja layanan yang ditawarkan oleh AgriConnect?',
                    'answer' => 'Kami menawarkan berbagai layanan, termasuk pelatihan, teknologi pertanian, dan akses ke pasar untuk hasil panen Anda.'
                ],
                [
                    'question' => 'Bagaimana cara bergabung dengan AgriConnect?',
                    'answer' => 'Anda dapat mendaftar melalui situs web kami dan mengikuti langkah-langkah pendaftaran yang mudah.'
                ],
                [
                    'question' => 'Apakah ada biaya untuk menggunakan layanan AgriConnect?',
                    'answer' => 'Sebagian besar layanan kami gratis untuk petani. Untuk layanan premium, kami akan memberikan informasi lebih lanjut setelah pendaftaran.'
                ],
            ];
            @endphp

            <div class="preload fixed top-0 left-0 w-full h-full bg-white z-50 flex justify-center items-center">
                <!-- Preloader content (e.g., spinner) -->
                <div class="loader"></div>
            </div>

            <div class="content opacity-0 transition-opacity duration-500 mt-12">
                <div class="faq-content">
                    <div class="space-y-4">
                        @foreach ($faqs as $index => $faq)
                            <div class="border border-neutral-300 dark:border-zinc-800 rounded-lg p-4">
                                <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq({{ $index }})">
                                    <span class="font-medium text-lg text-gray-900 dark:text-white">{{ $faq['question'] }}</span>
                                    <i id="arrow-{{ $index }}" class="fa-solid fa-chevron-down transition-transform duration-300 dark:text-white"></i>
                                </div>
                                <p id="answer-{{ $index }}" class="mt-2 text-gray-500 dark:text-gray-300 hidden">{{ $faq['answer'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="{{ asset('js/gsap.js') }}"></script>

<script>
    function toggleFaq(index) {
        const answer = document.getElementById(`answer-${index}`);
        const arrow = document.getElementById(`arrow-${index}`);
        answer.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Tampilkan preloader saat halaman dimuat
        var preloader = document.querySelector(".preload");

        // Tunda penghilangan preloader dan munculnya konten
        setTimeout(function() {
            // Sembunyikan preloader
            preloader.style.opacity = "0";
            preloader.style.pointerEvents = "none";

            // Tampilkan konten
            var content = document.querySelector(".content");
            content.style.opacity = "1";
        }, 5000); // Sesuaikan waktu penundaan sesuai kebutuhan (dalam milidetik)
    });
</script>

@include('frontend.layouts.footer')
