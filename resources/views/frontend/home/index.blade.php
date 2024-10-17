@include('frontend.layouts.header')

<style>
    .aurora-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
    }

    .aurora {
        position: absolute;
        width: 30rem;
        height: 30rem;
        background: radial-gradient(circle, var(--tw-gradient-from), var(--tw-gradient-to));
        opacity: 0.2;
        filter: blur(100px);
        border-radius: 9999px;
    }

    .hero-image {
    --offset: 2px; /* Adjusted for larger border */
    background: rgb(71, 71, 71);
    border-radius: 16px; /* You can adjust the radius as per your design */
    position: relative;
    overflow: hidden;
}

/* Conic gradient for rotating border */
.hero-image::before {
    content: '';
    background: conic-gradient(transparent 270deg, #06C790, transparent);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    aspect-ratio: 1;
    width: 200%; /* Increased size for larger element */
    animation: rotate 3s linear infinite; /* Adjust animation speed */
    z-index: 1; /* To keep it behind the image */
}

/* Overlay */
.hero-image::after {
    content: '';
    background: inherit;
    border-radius: inherit;
    position: absolute;
    inset: var(--offset);
    z-index: 5;
}

/* Keyframe for rotating effect */
@keyframes rotate {
    from {
        transform: translate(-50%, -50%) scale(1.4) rotate(0turn);
    }

    to {
        transform: translate(-50%, -50%) scale(1.4) rotate(1turn);
    }
}

</style>

<section class="hero-container relative" id="home">
    <div class="aurora-bg ">
        <div class="aurora aurora-green from-accent/65 to-accent/35 top-[-10rem] left-[20%]"></div>
        <div class="aurora aurora-green from-accent/65 to-accent/35 bottom-[20rem] right-[10%]"></div>
    </div>

    <div class="hero-wrapper w-full relative z-10 py-32 md:py-24">
        <div class="hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="hero-title text-center max-w-4xl mx-auto">
                <h1 class="text-4xl mt-8 sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-white leading-tight mb-6">
                    <span class="block">AgriConnect</span>
                    <span class="block text-accent">Revolusi Pertanian Tebu</span>
                </h1>
                <p class="mt-6 text-xl sm:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Tingkatkan hasil panen dan bangun masa depan yang lebih baik dengan teknologi IoT dan AI kami.
                </p>
                <div class="mt-10">
                    <a href="/daftar-tani"
                        class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg text-white bg-accent">
                        Bergabung Sekarang
                        <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-image-wrapper w-full flex justify-center md:-mt-18 mb-20 ">
        <div class="hero-image fancy aspect-video rounded-md overflow-hidden max-w-5xl mx-auto relative p-[1.2px] bg-zinc-900">
            <img class="w-full h-full object-cover rounded-2xl hidden dark:block relative z-10"
                src="{{ asset('img/tani/dashboard-agri-dark.webp') }}" draggable="false" alt="Dashboard Pertanian Tebu">
            <img class="w-full h-full object-cover rounded-2xl block dark:hidden relative z-10"
                src="{{ asset('img/tani/dashboard-agri-light.webp') }}" draggable="false" alt="Dashboard Pertanian Tebu">
        </div>
    </div>
</section>

<section id="mitra">
    <x-mitra />
</section>

<section x-data="{ activeTab: 'daftar' }" class="about-container overflow-visible relative py-20 px-4 sm:px-6 lg:px-16 bg-white dark:bg-ireng" id="about">
    <div class="aurora-bg hidden lg:block">
        <div class="aurora from-accent/65 to-accent/35 top-[30%] left-[20%]"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                <span class="block">Solusi Inovatif untuk</span>
                <span class="block text-accent">Pertanian Tebu Modern</span>
            </h2>
            <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-600 dark:text-gray-300 leading-relaxed" id="services">
                Kami membantu Anda memaksimalkan potensi lahan dengan dukungan teknologi terdepan dan komunitas yang
                kuat.
            </p>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
        [
            'title' => 'Pertanian Tebu di Sidoarjo',
            'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            'description' => 'Bersama petani Sidoarjo, kami membangun masa depan pertanian tebu yang lebih baik dengan akses ke informasi terkini dan teknologi modern.',
        ],
        [
            'title' => 'Teknologi IoT untuk Lahan',
            'icon' => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01',
            'description' => 'Sensor IoT canggih membantu Anda memantau kelembapan tanah, suhu, dan kualitas udara secara real-time untuk pengambilan keputusan yang lebih cepat dan tepat.',
        ],
        [
            'title' => 'AI untuk Rekomendasi Perawatan',
            'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
            'description' => 'AI kami menganalisis data untuk memberikan rekomendasi perawatan yang personal dan tepat waktu, membantu Anda mengoptimalkan hasil panen.',
        ],
        [
            'title' => 'Belanja Pertanian Online',
            'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
            'description' => 'Akses mudah ke produk pertanian berkualitas tinggi, pupuk ramah lingkungan, dan peralatan modern untuk meningkatkan efisiensi kerja Anda.',
        ],
        [
            'title' => 'Komunitas Petani',
            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            'description' => 'Bergabunglah dalam komunitas kami untuk berbagi pengalaman, memperluas jaringan, dan mendapatkan dukungan dari sesama petani.',
        ],
        [
            'title' => 'Dukungan dan Konsultasi',
            'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
            'description' => 'Tim ahli kami siap membantu Anda dengan konsultasi gratis, pembinaan teknologi, dan strategi pemasaran hasil panen.',
        ],
    ] as $index => $card)
                <div
                    class="bg-white/75 dark:bg-gray-900/65 backdrop-blur-xl border dark:border-zinc-600 rounded-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="bg-accent rounded-full p-3 mr-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $card['icon'] }}"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $card['title'] }}</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="how-it-works-container relative py-20 px-4 sm:px-6 lg:px-16 bg-white dark:bg-ireng" id="how-it-works">
    <div class="aurora-bg hidden lg:block">
        <div class="aurora from-accent/25 to-accent/15 top-[20%] left-[30%]"></div>
        <div class="aurora from-accent/25 to-accent/15 bottom-[30%] right-[20%]"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                <span class="block">Bagaimana</span>
                <span class="block text-accent">AgriConnect Bekerja</span>
            </h2>
            <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                Pelajari langkah-langkah sederhana menuju pertanian tebu yang lebih efisien dan produktif dengan
                AgriConnect.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
        [
            'title' => 'Daftar dan Pasang Sensor',
            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Mulai perjalanan Anda dengan mendaftar di AgriConnect. Kami akan membantu Anda memasang sensor IoT canggih di lahan Anda.',
        ],
        [
            'title' => 'Terima Data Real-time',
            'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
            'description' => 'Akses dashboard intuitif kami untuk memantau kondisi lahan Anda secara real-time. Dapatkan wawasan instan tentang kelembaban tanah, suhu, dan kesehatan tanaman Anda.',
        ],
        [
            'title' => 'Analisis AI',
            'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
            'description' => 'Teknologi AI kami menganalisis data yang dikumpulkan untuk memberikan rekomendasi yang dipersonalisasi, membantu Anda membuat keputusan yang tepat.',
        ],
        [
            'title' => 'Tindakan Tepat Waktu',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Terima panduan langkah demi langkah untuk mengambil tindakan yang tepat dan efisien. Tingkatkan produktivitas Anda dan kurangi pemborosan sumber daya.',
        ],
        [
            'title' => 'Komunitas dan Dukungan',
            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            'description' => 'Bergabunglah dengan komunitas petani yang berkembang. Bagikan pengetahuan, tukar pengalaman, dan dapatkan dukungan dari sesama petani serta tim ahli AgriConnect.',
        ],
        [
            'title' => 'Hasil Panen Optimal',
            'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
            'description' => 'Nikmati peningkatan hasil panen dan kualitas tebu Anda. Dengan AgriConnect, Anda dapat mencapai potensi penuh dari lahan Anda.',
        ],
    ] as $index => $step)
                <div
                    class="bg-white/75 dark:bg-ireng/65 backdrop-blur-xl border dark:border-zinc-600 rounded-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="bg-accent rounded-full p-3 mr-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $step['icon'] }}"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $index + 1 }}.
                                {{ $step['title'] }}</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ $step['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-16 text-center">
            <a href="{{ route('tani.pendaftaran') }}"
                class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg text-white bg-accent">
                Mulai Perjalanan Anda
                <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="faq-container relative bg-white dark:bg-ireng px-4 sm:px-6 lg:px-16 overflow-visible">
    <div class="aurora-bg w-[20px] h-[20px] hidden lg:block">
        <div class="aurora w-[10%] from-accent/35 to-accent/15 top-[20%] left-[20%]"></div>
    </div>

    <div class="max-w-4xl mx-auto relative z-10 py-32">
        <div class="text-center mb-16">
            <h2 class="text-base text-accent font-semibold tracking-wide uppercase">FAQ</h2>
            <p class="mt-2 text-3xl sm:text-4xl leading-8 font-bold tracking-tight text-gray-900 dark:text-white">
                Pertanyaan yang Sering Diajukan
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 mx-auto">
                Temukan jawaban untuk pertanyaan umum tentang AgriConnect dan layanan kami
            </p>
        </div>

        <x-faq />
    </div>
</section>

<section class="cta-container relative py-20 px-4 sm:px-6 lg:px-16">
    <div class="max-w-4xl mx-auto flex items-center justify-between">
        <div class="flex-1 dark:text-white">
            <h2 class="text-md md:text-4xl font-bold mb-4">Siap untuk Meningkatkan Pertanian Anda?</h2>
            <p class="mb-6">Maksimalkan hasil panen, Ciptakan keberlanjutan.</p>
        </div>
        <div class="flex-1 text-right">
            <a href="{{ route('tani.pendaftaran') }}" class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg bg-accent text-white">
                Daftar Sekarang
                <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')
