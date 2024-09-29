@include('frontend.layouts.header')

<section class="hero-container relative" id="home">
    <!-- Aurora Effects -->
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-accent opacity-10 blur-3xl rounded-full top-[-3rem] left-[30rem] clip-aurora"></div>
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-accent opacity-10 blur-3xl rounded-full bottom-[28rem] right-[5rem] clip-aurora"></div>

    <!-- Hero Content -->
    <div class="hero-wrapper w-full relative z-10">
        <div class="hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="hero-title mt-[8rem] md:mt-[8rem] text-center">
                <h1 class="text-3xl text-center leading-9 font-bold text-gray-900 dark:text-white sm:text-4xl md:text-5xl" style="line-height: 1.2">
                    <span class="block">AgriConnect</span>
                    <span class="block text-[#1eb78b] dark:text-accent max-w-[64rem] text-center">Revolusi Pertanian Tebu Dimulai di Sini!</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Bersama, kita wujudkan masa depan pertanian yang lebih cerah dan sejahtera untuk semua.
                </p>
                <div class="mt-8 sm:mt-12">
                    <a
                        href="#mulai"
                        class="inline-flex items-center shadow-lg dark:shadow-accent px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-accent hover:bg-accent-dark transition duration-150 ease-in-out md:py-3 md:text-lg md:px-6"
                        aria-label="Mulai menggunakan AgriConnect untuk meningkatkan produktivitas pertanian tebu Anda"
                    >
                        Bergabung Sekarang
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Image -->
    <div class="hero-image-wrapper w-full flex justify-center mt-12">
        <div class="hero-image aspect-video rounded-2xl border dark:border-zinc-600 dark:shadow[#016556]/65 shadow-[#016556]/25 shadow-[0_0_24px_0_rgba(0,0,0,0.1)] overflow-hidden">
            <img class="w-full h-full object-cover rounded-lg hidden dark:block aspect-video max-w-4xl"
                src="{{ asset('img/tani/tani-dark.png') }}" alt="Gambar Pertanian Tebu">
            <img class="w-full h-full object-cover rounded-lg block dark:hidden aspect-video max-w-4xl"
                src="{{ asset('img/tani/tani-light.png') }}" alt="Gambar Pertanian Tebu">
        </div>
    </div>
</section>

<section class="about-container =0 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl">
                <span class="block">Solusi Inovatif untuk</span>
                <span class="block text-accent">Pertanian Tebu Modern</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-300">
                Di AgriConnect, kami percaya bahwa setiap petani memiliki potensi untuk mencapai keberhasilan. Dengan dukungan teknologi IoT dan AI, kami membantu Anda memaksimalkan hasil panen dan menciptakan masa depan yang lebih baik.
            </p>
        </div>

        <!-- Content Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pertanian Tebu -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pertanian Tebu di Sidoarjo</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Kami bersama Anda, petani Sidoarjo, dalam membangun masa depan pertanian tebu yang lebih baik. Dengan akses ke:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Informasi terkini untuk praktik terbaik</li>
                        <li>Teknologi modern yang meningkatkan efisiensi</li>
                        <li>Konsultasi dari para ahli pertanian</li>
                        <li>Pelatihan dan workshop untuk semua</li>
                    </ul>
                </div>
            </div>

            <!-- Teknologi IoT -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Teknologi IoT untuk Lahan</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Sensor IoT canggih membantu Anda untuk:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Memantau kelembapan tanah secara real-time</li>
                        <li>Mengukur suhu udara dan tanah</li>
                        <li>Deteksi hama dan penyakit lebih awal</li>
                        <li>Optimalisasi penggunaan air dan pupuk</li>
                    </ul>
                </div>
            </div>

            <!-- AI untuk Rekomendasi -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">AI untuk Rekomendasi Perawatan</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Dengan AI kami, Anda akan mendapatkan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Analisis data yang mendalam dan relevan</li>
                        <li>Rekomendasi perawatan yang personal dan tepat waktu</li>
                        <li>Prediksi hasil panen yang akurat dan dapat diandalkan</li>
                        <li>Saran penanganan hama yang efektif dan ramah lingkungan</li>
                    </ul>
                </div>
            </div>

            <!-- Shop -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 dark:bg-yellow-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Belanja Pertanian Online</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Kami menyediakan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Produk pertanian berkualitas tinggi</li>
                        <li>Pupuk dan pestisida ramah lingkungan</li>
                        <li>Peralatan modern untuk efisiensi kerja</li>
                        <li>Pengiriman cepat dan terpercaya</li>
                    </ul>
                </div>
            </div>

            <!-- Komunitas Petani -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 dark:bg-orange-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Komunitas Petani</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Bergabunglah dalam komunitas kami untuk:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Berbagi pengalaman dan tips</li>
                        <li>Memperluas jaringan dan relasi</li>
                        <li>Mendapatkan dukungan dari sesama petani</li>
                        <li>Berpartisipasi dalam acara dan pelatihan</li>
                    </ul>
                </div>
            </div>

            <!-- Dukungan dan Konsultasi -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 dark:bg-teal-900 rounded-full p-3 mr-4">
                            <svg class="w-8 h-8 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Dukungan dan Konsultasi</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Tim ahli kami siap membantu Anda dengan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Konsultasi gratis untuk permasalahan pertanian</li>
                        <li>Pembinaan dalam mengaplikasikan teknologi</li>
                        <li>Strategi pemasaran hasil panen</li>
                        <li>Dukungan penuh untuk keberhasilan Anda</li>
                    </ul>
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
                            class="faq-item bg-white dark:bg-ireng rounded-lg border border-gray-200 dark:border-zinc-600 overflow-hidden">
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
