@include('frontend.layouts.header')

<!-- Navbar Section -->
<x-navbar />

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
        <div class="hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="hero-title mt-[12rem] md:mt-[4rem] text-center">
                <h1
                    class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    <span class="block">AgriConnect:</span>
                    <span class="block text-accent">Membangun Petani Maju</span>
                </h1>
                <p
                    class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Dengan AI, IoT, dan Pemasaran Digital
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
        <div
            class="sponsor-list container mx-auto flex items-center justify-center gap-8 overflow-x-auto whitespace-nowrap scrollbar-hide">
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
                <p
                    class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Solusi Terbaik Untuk Masa Depan dan Teknologi Pertanian Indonesia
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                    AgriConnect hadir sebagai solusi dengan menghubungkan petani, teknologi, dan pasar melalui platform
                    digital untuk mendorong adopsi teknologi modern dan membuka akses pasar yang lebih luas.
                </p>
            </div>
            {{-- aurora --}}
            <div
                class="absolute w-[25rem] h-[25rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-20 blur-3xl rounded-full top-[112rem] left-[32rem] z-0">
            </div>
            {{-- end --}}
            <div class="about-content md:h-[46rem] mt-8">
                <!-- Content to be added here -->
                <div class="flex h-full w-full items-center justify-center">
                    <div class="grid h-full w-full md:grid-cols-3 md:grid-rows-2 gap-4">
                        <div
                            class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-1 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl">
                            <div class="card-image p-20 hidden lg:block -mt-8">
                                <img src="{{ asset('img/services/IoT.png') }}" alt="Card Image">
                            </div>
                            <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                                <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                                <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT,
                                    sensor, dan akses aplikasi.</p>
                                <!-- Menggunakan CTA Button di blade file -->
                                <x-cta-button route="home" text="Pelajari lebih lanjut" />
                            </div>
                        </div>

                        <div
                            class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-1 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl">
                            <div class="card-image p-16 justify-center items-center -mt-10 hidden lg:block">
                                <img src="{{ asset('img/services/dashboard.png') }}" alt="Card Image">
                            </div>
                            <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                                <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                                <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT,
                                    sensor, dan akses aplikasi.</p>
                                <x-cta-button route="home" text="Pelajari lebih lanjut" />
                            </div>
                        </div>

                        <div
                            class="card h-fit md:h-full mt-[10rem] md:mt-0 relative flex font-sans md:col-span-1 md:row-span-2 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl">
                            <div class="card-image p-16 hidden lg:flex justify-center items-center">
                                <img src="{{ asset('img/services/analytics-ai.png') }}" alt="Card Image">
                            </div>
                            <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                                <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                                <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT,
                                    sensor, dan akses aplikasi.</p>
                                <x-cta-button route="home" text="Pelajari lebih lanjut" />
                            </div>
                        </div>

                        <div
                            class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-2 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl shadow-accent/50">
                            <div
                                class="card-image p-20 hidden lg:flex justify-center items-center w-96 -mt-12 right-0 absolute mr-32">
                                <img src="{{ asset('img/services/ai-chatbot.png') }}" class="w-full h-full"
                                    alt="Card Image">
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
                <p
                    class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Pertanyaan yang Sering Diajukan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                    Temukan jawaban untuk pertanyaan umum tentang AgriConnect dan layanan kami
                </p>
            </div>

            <div class="faq-content mt-12">
                <div class="space-y-4">
                    @php
                    $faqs = [
                        [
                            'question' => 'Apa itu AgriConnect dan bagaimana ini bisa membantu saya sebagai petani?',
                            'answer' => 'AgriConnect adalah platform yang menghubungkan petani dengan teknologi seperti kecerdasan buatan (AI) dan Internet of Things (IoT), serta membuka akses ke pasar digital. Platform ini dirancang untuk membantu petani mengelola lahan dengan lebih efisien, memprediksi cuaca, serta menemukan harga pasar yang lebih baik.'
                        ],
                        [
                            'question' => 'Saya petani kecil di pedesaan, apakah saya bisa menggunakan teknologi AgriConnect?',
                            'answer' => 'Ya, AgriConnect dirancang agar mudah diakses oleh petani dari berbagai skala usaha, termasuk petani kecil. Kami menyediakan teknologi yang mudah digunakan dan bisa disesuaikan dengan kebutuhan Anda, baik untuk memantau lahan, memprediksi cuaca, atau menjual hasil panen langsung ke pasar digital.'
                        ],
                        [
                            'question' => 'Bagaimana Tani AI bisa membantu saya di ladang?',
                            'answer' => 'Tani AI menggunakan data seperti cuaca, kondisi tanah, dan pola tanaman untuk memberikan saran terbaik kepada Anda. Dengan Tani AI, Anda bisa mengetahui kapan waktu terbaik untuk menanam, berapa banyak air yang dibutuhkan tanaman, serta peringatan dini jika ada ancaman hama atau penyakit.'
                        ],
                        [
                            'question' => 'Apa manfaat menggunakan sensor IoT di lahan saya?',
                            'answer' => 'Sensor IoT memungkinkan Anda untuk memantau kondisi lahan secara real-time tanpa harus selalu berada di lapangan. Misalnya, sensor ini bisa memantau kelembapan tanah, suhu, dan kualitas udara. Data tersebut dikirim langsung ke ponsel Anda melalui aplikasi AgriConnect, sehingga Anda bisa membuat keputusan yang lebih cepat dan tepat, seperti kapan harus menyiram atau menambah pupuk. Ini akan membantu Anda menghemat waktu dan mengelola sumber daya dengan lebih efisien.'
                        ],
                        [
                            'question' => 'Bagaimana saya bisa menjual produk langsung ke pasar melalui AgriConnect?',
                            'answer' => 'AgriConnect memiliki fitur pasar digital yang memungkinkan Anda menjual hasil panen secara langsung ke pembeli tanpa perlu melalui perantara. Platform ini memberi Anda akses ke pasar yang lebih luas dan memungkinkan Anda menetapkan harga yang lebih adil untuk produk Anda. Hal ini diharapkan dapat meningkatkan pendapatan petani dan mengurangi ketergantungan pada tengkulak.'
                        ],
                        [
                            'question' => 'Bagaimana cara memulai menggunakan AgriConnect?',
                            'answer' => 'Untuk memulai, Anda hanya perlu mendaftar melalui situs web atau aplikasi AgriConnect. Setelah itu, Anda dapat mengatur profil lahan Anda, mulai memantau data cuaca dan kondisi tanah, serta terhubung dengan pasar digital. Jika Anda memerlukan bantuan, kami memiliki tim dukungan yang siap membantu Anda memahami cara menggunakan setiap fitur.'
                        ],
                        [
                            'question' => 'Apakah AgriConnect dapat membantu saya meningkatkan hasil panen?',
                            'answer' => 'Tentu! Dengan memanfaatkan teknologi seperti Tani AI dan IoT, AgriConnect membantu Anda membuat keputusan yang lebih baik terkait waktu tanam, penggunaan air, dan pemantauan kondisi tanaman. Ini diharapkan dapat meningkatkan hasil panen Anda, mengurangi risiko kerugian, dan memastikan tanaman tumbuh dalam kondisi optimal.'
                        ],
                        [
                            'question' => 'Saya tinggal di daerah terpencil. Apakah AgriConnect masih bisa digunakan di sana?',
                            'answer' => 'AgriConnect bisa digunakan di berbagai wilayah di Indonesia, termasuk daerah terpencil, selama ada akses internet. Kami juga sedang mengembangkan solusi untuk membantu petani di daerah dengan koneksi terbatas agar tetap bisa memanfaatkan teknologi IoT dan AI.'
                        ],
                        [
                            'question' => 'Bagaimana cara saya mendapatkan dukungan jika mengalami masalah teknis?',
                            'answer' => 'Jika Anda mengalami kesulitan atau masalah teknis saat menggunakan AgriConnect, tim dukungan kami selalu siap membantu. Anda dapat menghubungi kami melalui email, layanan chat di aplikasi, atau melalui nomor telepon hotline kami. Kami juga menyediakan tutorial dan panduan pengguna untuk membantu Anda mengatasi kendala umum.'
                        ],
                        [
                            'question' => 'Apakah saya perlu keahlian teknologi untuk menggunakan AgriConnect?',
                            'answer' => 'Tidak perlu! AgriConnect dirancang agar mudah digunakan oleh petani dari berbagai latar belakang. Kami menyadari bahwa tidak semua petani terbiasa dengan teknologi, sehingga platform kami intuitif dan disertai panduan yang jelas. Selain itu, kami menyediakan dukungan teknis untuk membantu Anda jika ada kesulitan.'
                        ],
                    ];
                    @endphp

                    @foreach ($faqs as $index => $faq)
                        <div
                            class="faq-item bg-white dark:bg-zinc-900 rounded-lg border border-gray-200 dark:border-zinc-700 overflow-hidden">
                            <button class="faq-question w-full text-left px-6 py-4 focus:outline-none"
                                onclick="toggleFaq({{ $index }})">
                                <div class="flex justify-between items-center">
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ $faq['question'] }}</span>
                                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                        id="arrow-{{ $index }}" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </button>
                            <div class="faq-answer px-6 py-4 bg-gray-50 dark:bg-zinc-700 hidden"
                                id="answer-{{ $index }}">
                                <p class="text-gray-600 dark:text-gray-300">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
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
</script>
{{-- end-faq --}}
{{-- end-faq --}}

<!-- Footer Section -->
<footer class=" text-zinc-900 dark:text-white py-10 mt-[8rem]">
    <div class="container mx-auto px-6 md:px-12 lg:px-16">
        <!-- Footer Top -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Footer Logo and Description -->
            <div class="footer-logo mb-6 md:mb-0 flex flex-col items-center md:items-start">
                <a href="#" class="flex items-center">
                    <img class="w-28 block dark:hidden" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
                    <img class="w-28 hidden dark:block" src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo">
                    <span class="text-2xl font-bold ml-3">AgriConnect</span>
                </a>
                <p class="mt-3 text-center md:text-left">Connecting farmers with modern technology and digital markets
                    to enhance agricultural productivity and sustainability.</p>
            </div>

            <!-- Footer Links -->
            <div class="footer-links">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent transition">Home</a></li>
                    <li><a href="#about" class="hover:text-accent transition">About Us</a></li>
                    <li><a href="#about" class="hover:text-accent transition">Services</a></li>
                    <li><a href="/contact" class="hover:text-accent transition">Contact</a></li>
                </ul>
            </div>

            <!-- Footer Social Media -->
            <div class="footer-social">
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://web.facebook.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
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
