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

<section class="about-container container mx-auto px-8 md:px-16 py-8">
    <div class="about-wrapper w-full" id="about">
        <div class="about w-full">
            <div class="about-header w-full text-center">
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
                    <div class="grid grid-cols-5 grid-rows-6 gap-4 p-2 rounded-lg h-full w-full">

                      <div class="col-span-5 row-span-2 rounded-lg border dark:border-zinc-800 bg-white/70 dark:bg-zinc-900/30 h-[20rem] flex items-center justify-between">
                        <div class="explore-services flex flex-col gap-2 px-[5.5rem]">
                            <h1 class="text-3xl font-bold dark:text-white">Eksplor Layanan Kami</h1>
                            <p class="text-neutral-400 dark:text-neutral-300 max-w-80">kami menyediakan berbagai macam layanan yang dapat meningkatkan dan membantu mempermudah apalah petani tebu dan parbik gula di sidoarjo</p>
                        </div>
                        <div class="service-illustration relative flex-1 h-full">
                            <img class="absolute bottom-12 right-8 dark:block hidden" src="{{ asset('img/svg/service-1.svg') }}" alt="tebu">
                            <img class="absolute bottom-12 right-8 block dark:hidden" src="{{ asset('img/svg/service-4-dark.svg') }}" alt="tebu">

                            <img class="absolute top-12 right-16 dark:block hidden" src="{{ asset('img/svg/service-2.svg') }}" alt="tebu">
                            <img class="absolute top-12 right-16 block dark:hidden" src="{{ asset('img/svg/service-3-dark.svg') }}" alt="tebu">

                            <img class="absolute bottom-16 left-8 dark:block hidden" src="{{ asset('img/svg/service-3.svg') }}" alt="tebu">
                            <img class="absolute bottom-16 left-8 dark:hidden block" src="{{ asset('img/svg/service-2-dark.svg') }}" alt="tebu">

                            <img class="absolute top-10 left-8 hidden dark:block" src="{{ asset('img/svg/service-4.svg') }}" alt="tebu">
                            <img class="absolute top-10 left-8 dark:hidden block" src="{{ asset('img/svg/service-1-dark.svg') }}" alt="tebu">
                        </div>
                      </div>

                      <div class="col-span-3 row-span-2 rounded-lg overflow-hidden border relative dark:border-zinc-800 bg-white/30 dark:bg-card/30 h-[20rem] flex items-center">
                        <div class="explore-services flex flex-col gap-2 px-[2.5rem]">
                            <h1 class="text-3xl font-bold dark:text-white">Eksplor Layanan Kami</h1>
                            <p class="text-neutral-400 dark:text-neutral-300 max-w-80">kami menyediakan berbagai macam layanan yang dapat meningkatkan dan membantu mempermudah apalah petani tebu dan parbik gula di sidoarjo</p>
                        </div>
                        <img class="absolute -right-16 -bottom-2" src="{{ asset('img/svg/dashboard-service.svg') }}" alt="">
                      </div>

                      <div class="col-span-2 row-span-2 flex-col rounded-lg border dark:border-zinc-800 bg-white/70 dark:bg-zinc-900/30 h-[20rem] flex justify-center">
                        <div class="ai-services ms-8">
                            <h1 class="text-2xl font-bold dark:text-white">Tingkatkan automasi</h1>
                            <p class="dark:text-neutral-300 max-w-80 mt-2">Dapatkan rekomendasi aktivitas untuk menjaga lahan anda dengan bantuan Agriconnect Dashboard</p>
                        </div>
                        <div class="ai-services-image ms-16">
                            <img src="{{ asset('img/svg/service-ai-small.svg') }}" alt="">
                        </div>
                      </div>

                      <div class="col-span-5 row-span-2 rounded-lg border dark:border-zinc-800 bg-white/70 dark:bg-zinc-900/30 h-[20rem] flex items-center justify-center">
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
                <div class="flex items-center justify-center w-full py-20">
                    <div class="flex flex-col items-center w-full">
                        <div style="opacity: 1; transform: none; will-change: auto;">
                            <div class="grid w-full place-items-center grid-cols-1 p-6 md:p-8 md:grid-cols-[.55fr_1fr] rounded-2xl bg-[#121212]/50 border border-border">
                                <div class="flex flex-col items-start justify-center lg:pl-6">
                                    <h4 class="text-xl font-semibold lg:text-2xl">Explore our services</h4>
                                    <p class="mt-4 text-neutral-500 lg:text-lg">We provide the best services for our customers with the best quality and the best price.</p>
                                </div>
                                <div class="flex items-center justify-center w-full mt-8 sm:mt-0 lg:py-4 lg:px-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(index) {
        const answer = document.getElementById(`answer-${index}`);
        const arrow = document.getElementById(`arrow-${index}`);
        answer.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }
</script>
{{-- end-faq --}}

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
