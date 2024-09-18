@include('frontend.layouts.header')

<!-- Navbar Section -->
<section class="navbar justify-between py-6 px-16 items-center z-50 hidden md:flex">
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
                class="absolute border rounded-lg mt-2 p-1 w-full bg-white dark:bg-zinc-900 dark:border-zinc-900 overflow-hidden transition-all duration-300"
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
        <div class="hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="hero-title mt-[12rem] md:mt-[4rem] text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    <span class="block">AgriConnect:</span>
                    <span class="block text-accent-600">Membangun Petani Maju</span>
                  </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                  Dengan AI, IoT, dan Pemasaran Digital
                </p>
            </div>
            <a href="#about" class="hero-button w-fit mt-10 px-6 py-2 bg-accent text-white mb-0 rounded-lg font-light">
                Pelajari lebih lanjut <i class="fa-solid ms-2 fa-chevron-right"></i>
            </a>
        </div>

        <!-- Hero Image -->
        <div class="hero-image-wrapper w-full flex justify-center mt-16">
            <div class="hero-image w-full max-w-[58rem] h-[36rem] rounded-3xl border border-zinc-200">
                <img class="w-full h-full object-cover rounded-2xl"
                    src="https://images.unsplash.com/photo-1662099892443-0c241cbb700d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Hero Image">
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
                  Solusi Terbaik Untuk Masa Depan dan Teknologi Pertanian Indonesia
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                  AgriConnect hadir sebagai solusi dengan menghubungkan petani, teknologi, dan pasar melalui platform digital untuk mendorong adopsi teknologi modern dan membuka akses pasar yang lebih luas.
                </p>
            </div>
            {{-- aurora --}}
            <div class="absolute w-[25rem] h-[25rem] bg-gradient-to-r from-[#5DBB63] to-[#27a002] opacity-20 blur-3xl rounded-full top-[112rem] left-[32rem] z-0"></div>
            {{-- end --}}
            <div class="about-content md:h-[46rem] mt-8">
                <!-- Content to be added here -->
                <div class="flex h-full w-full items-center justify-center">
                    <div class="grid h-full w-full md:grid-cols-3 md:grid-rows-2 gap-4">
                      <div
                        class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-1 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl"
                      >
                      <div class="card-image p-20 hidden lg:block -mt-8">
                          <img src="{{ asset('img/services/IoT.png') }}" alt="Card Image">
                      </div>
                        <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                            <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                            <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT, sensor, dan akses aplikasi.</p>
                            <!-- Menggunakan CTA Button di blade file -->
                            <x-cta-button route="home" text="Pelajari lebih lanjut" />
                        </div>
                      </div>

                      <div
                        class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-1 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl"
                      >
                        <div class="card-image p-16 justify-center items-center -mt-10 hidden lg:block">
                            <img src="{{ asset('img/services/dashboard.png') }}" alt="Card Image">
                        </div>
                        <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                            <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                            <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT, sensor, dan akses aplikasi.</p>
                            <x-cta-button route="home" text="Pelajari lebih lanjut" />
                        </div>
                      </div>

                      <div
                        class="card h-fit md:h-full mt-[10rem] md:mt-0 relative flex font-sans md:col-span-1 md:row-span-2 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl"
                      >
                        <div class="card-image p-16 hidden lg:flex justify-center items-center">
                            <img src="{{ asset('img/services/analytics-ai.png') }}" alt="Card Image">
                        </div>
                        <div class="card-info absolute bottom-0 left-0 p-4 text-zinc-900 dark:text-white">
                            <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                            <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT, sensor, dan akses aplikasi.</p>
                            <x-cta-button route="home" text="Pelajari lebih lanjut" />
                        </div>
                      </div>

                      <div
                        class="card h-fit md:h-full mt-[10rem] md:mt-0 relative font-sans md:col-span-2 md:row-span-1 bg-white/30 dark:bg-zinc-900/30 backdrop-blur-3xl border dark:border-white/30 rounded-xl"
                      >
                        <div class="card-image p-20 hidden lg:flex justify-center items-center w-96 -mt-12 right-0 absolute mr-32">
                            <img src="{{ asset('img/services/ai-chatbot.png') }}" class="w-full h-full" alt="Card Image">
                        </div>
                        <div class="card-info text-zinc-900 dark:text-white absolute bottom-0 left-0 p-4">
                            <h2 class="text-lg font-semibold">Pemantauan Kondisi lahan</h2>
                            <p>AgriConnect memungkinkan para petani untuk memantau lahan real-time dengan IoT, sensor, dan akses aplikasi.</p>
                            <x-cta-button route="home" text="Pelajari lebih lanjut" />
                        </div>
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
                    Temukan jawaban untuk pertanyaan umum tentang AgriConnect dan layanan kami
                </p>
            </div>

            <div class="faq-content mt-12">
                <div class="space-y-4">
                    @php
                        $faqs = [
                            [
                                'question' => 'Apa itu AgriConnect?',
                                'answer' => 'AgriConnect adalah platform yang menghubungkan petani dengan teknologi modern dan pasar digital untuk meningkatkan produktivitas dan keberlanjutan pertanian.'
                            ],
                            [
                                'question' => 'Bagaimana cara mendaftar di AgriConnect?',
                                'answer' => 'Anda dapat mendaftar dengan mengklik tombol "Sign Up" di halaman utama kami dan mengikuti langkah-langkah pendaftaran yang mudah.'
                            ],
                            [
                                'question' => 'Apakah layanan AgriConnect berbayar?',
                                'answer' => 'Kami menawarkan paket layanan gratis dan berbayar. Paket dasar kami gratis, sementara fitur-fitur lanjutan tersedia dalam paket berbayar.'
                            ],
                            [
                                'question' => 'Bagaimana AgriConnect membantu petani?',
                                'answer' => 'AgriConnect membantu petani dengan menyediakan akses ke teknologi IoT untuk pemantauan lahan, analisis AI untuk pengambilan keputusan, dan platform pemasaran digital untuk menjangkau pasar yang lebih luas.'
                            ],
                            [
                                'question' => 'Apakah AgriConnect menyediakan dukungan teknis?',
                                'answer' => 'Ya, kami menyediakan dukungan teknis melalui chat langsung, email, dan panggilan telepon untuk semua pengguna AgriConnect.'
                            ]
                        ];
                    @endphp

                    @foreach($faqs as $index => $faq)
                        <div class="faq-item bg-white dark:bg-zinc-900 rounded-lg border border-gray-200 dark:border-zinc-700 overflow-hidden">
                            <button class="faq-question w-full text-left px-6 py-4 focus:outline-none" onclick="toggleFaq({{ $index }})">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-900 dark:text-white">{{ $faq['question'] }}</span>
                                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="arrow-{{ $index }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </button>
                            <div class="faq-answer px-6 py-4 bg-gray-50 dark:bg-zinc-700 hidden" id="answer-{{ $index }}">
                                <p class="text-gray-600 dark:text-gray-300">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
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
{{-- end-faq --}}

<!-- Footer Section -->
<footer class=" text-zinc-900 dark:text-white py-10 mt-[8rem]">
    <div class="container mx-auto px-6 md:px-12 lg:px-16">
        <!-- Footer Top -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Footer Logo and Description -->
            <div class="footer-logo mb-6 md:mb-0 flex flex-col items-center md:items-start">
                <a href="#" class="flex items-center">
                    <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
                    <span class="text-2xl font-bold ml-3">AgriConnect</span>
                </a>
                <p class="mt-3 text-center md:text-left">Connecting farmers with modern technology and digital markets to enhance agricultural productivity and sustainability.</p>
            </div>

            <!-- Footer Links -->
            <div class="footer-links">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent transition">Home</a></li>
                    <li><a href="#" class="hover:text-accent transition">About Us</a></li>
                    <li><a href="#" class="hover:text-accent transition">Services</a></li>
                    <li><a href="#" class="hover:text-accent transition">Contact</a></li>
                </ul>
            </div>

            <!-- Footer Social Media -->
            <div class="footer-social">
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="hover:text-accent transition">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



@include('frontend.layouts.footer')
