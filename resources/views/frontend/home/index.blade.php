@include('frontend.layouts.header')

<!-- Hero Section -->
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
                    Teknologi cerdas untuk panen lebih besar dan hidup lebih baik.
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

<section class="about-container bg-white dark:bg-ireng py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                <span class="block">Solusi Inovatif untuk</span>
                <span class="block text-accent">Pertanian Tebu Modern</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300">
                Kami menggabungkan kekuatan IoT dan AI untuk membantu petani tebu di Sidoarjo meningkatkan hasil panen, mengoptimalkan perawatan lahan, dan memperluas akses pasar.
            </p>
        </div>

        <!-- Content Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:px-8 md:px-12 lg:px-16">
            <!-- Pertanian Tebu -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-seedling text-4xl text-green-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pertanian Tebu di Sidoarjo</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Mendukung petani tebu lokal dengan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Akses informasi terkini tentang praktik terbaik</li>
                        <li>Pengenalan teknologi modern untuk efisiensi</li>
                        <li>Layanan konsultasi dari ahli pertanian</li>
                        <li>Program pelatihan dan workshop reguler</li>
                    </ul>
                </div>
            </div>

            <!-- Teknologi IoT -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-microchip text-4xl text-blue-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Teknologi IoT untuk Lahan</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Sensor IoT canggih memungkinkan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Pemantauan kelembapan tanah real-time</li>
                        <li>Pengukuran suhu udara dan tanah</li>
                        <li>Deteksi hama dan penyakit lebih awal</li>
                        <li>Optimalisasi penggunaan air dan pupuk</li>
                    </ul>
                </div>
            </div>

            <!-- AI untuk Rekomendasi -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-brain text-4xl text-purple-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">AI untuk Rekomendasi Perawatan</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Kecerdasan buatan kami menawarkan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Analisis data sensor yang komprehensif</li>
                        <li>Rekomendasi perawatan lahan yang personal</li>
                        <li>Prediksi hasil panen yang akurat</li>
                        <li>Saran penanganan hama yang efektif</li>
                    </ul>
                </div>
            </div>

            <!-- Shop -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-store text-4xl text-yellow-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Belanja Pertanian Online</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Toko online kami menyediakan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Benih tebu berkualitas tinggi</li>
                        <li>Pupuk organik dan anorganik terbaik</li>
                        <li>Alat pertanian modern dan efisien</li>
                        <li>Produk perawatan tanaman yang aman</li>
                    </ul>
                </div>
            </div>

            <!-- Chatbot -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-comments text-4xl text-pink-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Chatbot Konsultasi 24/7</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Asisten virtual kami siap membantu dengan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Jawaban cepat untuk pertanyaan umum</li>
                        <li>Tips perawatan lahan yang praktis</li>
                        <li>Solusi untuk masalah pertanian sehari-hari</li>
                        <li>Panduan langkah demi langkah untuk pemula</li>
                    </ul>
                </div>
            </div>

            <!-- Pasar Digital -->
            <div class="bg-white dark:bg-ireng/90 rounded-lg overflow-hidden border dark:border-zinc-600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-handshake text-4xl text-indigo-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pasar Digital Tebu</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Platform kami menghubungkan:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                        <li>Petani langsung dengan pembeli besar</li>
                        <li>Harga yang lebih adil tanpa perantara</li>
                        <li>Sistem lelang untuk hasil panen premium</li>
                        <li>Jaminan pembayaran yang aman</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 bg-green-600 rounded-lg shadow-xl overflow-hidden">
            <div class="px-6 py-12 max-w-xl mx-auto sm:px-10 sm:py-16 lg:max-w-full lg:px-12 lg:py-20">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Siap untuk revolusi pertanian?</span>
                    <span class="block mt-2">Bergabunglah dengan AgriConnect hari ini!</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-green-100">
                    Daftar sekarang dan dapatkan akses ke semua fitur inovatif kami. Tingkatkan hasil panen Anda dan jadilah bagian dari komunitas pertanian modern!
                </p>
                <a href="#" class="mt-8 bg-white text-green-600 hover:text-green-500 py-3 px-6ull inline-block border px-6 rounded-lg">
                    Mulai Sekarang
                </a>
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
