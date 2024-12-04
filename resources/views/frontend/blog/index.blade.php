<x-main-layout>

<div class="min-h-screen dark:bg-ireng dark:text-white bg-white text-ireng overflow-hidden">

    <!-- Hero Section -->
    <section class="hero-container container mx-auto relative py-4">
        <!-- Aurora Effects -->
        <div
            class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
        </div>
        <div
            class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora">
        </div>
        {{--
        <!-- Hero Content -->
        <div class="hero-wrapper w-full relative z-10">
            <div class="hero w-100 flex flex-col items-center justify-center mx-8">
                <div class="hero-title text-center">
                    <h1 class="text-3xl text-center font-bold text-ireng dark:text-white sm:text-4xl md:text-5xl mt-12"
                        style="line-height: 1.2">
                        <span class="block">AgriNews</span>
                        <span class="block text-accent max-w-[62rem] text-center">Berita Terkini Seputar
                            Pertanian</span>
                    </h1>
                    <p
                        class="mt-3 max-w-md mx-auto text-base text-gray-700 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Dapatkan informasi terbaru tentang perkembangan pertanian di Indonesia
                    </p>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- News Content -->
    <main class="container mx-auto px-8 lg:px-16 py-12">
        {{-- <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @php
                $news = [
                    [
                        'image' => 'https://picsum.photos/id/1/200/300',
                        'title' => 'Pertanian di Indonesia: Ini Faktanya',
                        'excerpt' => 'Pertanian di Indonesia: Ini Faktanya',
                        'date' => '2022-03-01',
                    ],
                    [
                        'image' => 'https://picsum.photos/id/1/200/300',
                        'title' => 'Pertanian di Indonesia: Ini Faktanya',
                        'excerpt' => 'Pertanian di Indonesia: Ini Faktanya',
                        'date' => '2022-03-01',
                    ],
                    [
                        'image' => 'https://picsum.photos/id/1/200/300',
                        'title' => 'Pertanian di Indonesia: Ini Faktanya',
                        'excerpt' => 'Pertanian di Indonesia: Ini Faktanya',
                        'date' => '2022-03-01',
                    ],
                    [
                        'image' => 'https://picsum.photos/id/1/200/300',
                        'title' => 'Pertanian di Indonesia: Ini Faktanya',
                        'excerpt' => 'Pertanian di Indonesia: Ini Faktanya',
                        'date' => '2022-03-01',
                    ],
                    [
                        'image' => 'https://picsum.photos/id/1/200/300',
                        'title' => 'Pertanian di Indonesia: Ini Faktanya',
                        'excerpt' => 'Pertanian di Indonesia: Ini Faktanya',
                        'date' => '2022-03-01',
                    ],
                ];
            @endphp
            @foreach ($news as $item)
                <article
                    class=" backdrop-blur-md rounded-lg overflow-hidden transition-all duration-300 border dark:border-zinc-600">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover" />
                    <div class="p-5">
                        <h2 class="text-lg font-semibold text-ireng dark:text-white mb-2 line-clamp-2">
                            {{ $item['title'] }}</h2>
                        <p class="text-sm text-gray-700 dark:text-gray-300 mb-4 line-clamp-3">
                            {{ Str::limit($item['excerpt'], 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-600 dark:text-gray-400">{{ $item['date'] }}</span>
                            <a href="#"
                                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium rounded-full text-white bg-accent hover:bg-accent-dark transition-colors duration-300">
                                Baca
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </section> --}}

        <section class="bg-white dark:bg-ireng">
            <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

                <div class="flex flex-col items-center sm:px-5 md:flex-row">
                    <div class="w-full md:w-1/2">
                        <a href="#_" class="block">
                            <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                                src="https://img.antaranews.com/cache/1200x800/2022/01/15/WhatsApp-Image-2022-01-15-at-07.54.04-1_1.jpeg">
                        </a>
                    </div>
                    <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                        <div
                            class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                            <div
                                class="bg-green-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>Unggulan</span>
                            </div>
                            <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Panen
                                    Manis: Pertanian Tebu Terbaik di Indonesia</a></h1>
                            <p class="pt-2 text-sm font-medium">oleh <a href="#_" class="mr-1 underline">Budi
                                    Santoso</a> · <span class="mx-1">23 April 2023</span> · <span
                                    class="mx-1 text-gray-600">5 menit baca</span></p>
                        </div>
                    </div>
                </div>

                <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://png.pngtree.com/thumb_back/fw800/background/20220927/pngtree-irrigation-of-an-australian-sugar-cane-crop-sugarcane-revival-sweet-photo-image_33964664.jpg">
                        </a>
                        <div
                            class="bg-green-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Teknologi Pertanian</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Inovasi Irigasi di Lahan
                                Tebu</a></h2>
                        <p class="text-sm text-gray-500">Pelajari inovasi irigasi terbaru yang membantu meningkatkan
                            hasil tebu dan menghemat air di Indonesia.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Siti Nuraini</a> ·
                            <span class="mx-1">17 April 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/01/23024900/X-Manfaat-Minum-Air-Tebu-untuk-Kesehatan-yang-Jarang-Diketahui.jpg">
                        </a>
                        <div
                            class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Kesehatan</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Manfaat Kesehatan dari Air Tebu</h2>
                        <p class="text-sm text-gray-500">Ketahui manfaat luar biasa dari air tebu untuk kesehatan,
                            termasuk meningkatkan imunitas dan pencernaan.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Andi Saputra</a> ·
                            <span class="mx-1">10 April 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1608517328/attached_image/jangan-dilewatkan-ini-6-manfaat-air-tebu-untuk-kesehatan.jpg">
                        </a>
                        <div
                            class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Makanan</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Tebu: Dari Kebun Hingga Meja Makan</h2>
                        <p class="text-sm text-gray-500">Ikuti perjalanan tebu dari panen hingga menjadi produk yang
                            kita nikmati setiap hari, seperti gula dan molase.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Rahmat Hidayat</a>
                            · <span class="mx-1">6 April 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span></p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjwuoI3mi0h_2tluR6KQcQ1pFPBbA6qL0ji7fymLMcuf7eHcPenmbPi5kFG2JSZBJ0CInnosSGV_23Fb-a_Ij9BJnyjaUoyWUdmR6gUttYdDSuaDB6oCxYlLaNU9PjwXHG-FgcmnbZzBAROBAy1tapHC1mCisQcOESaHUIiT2iBGEwo1g8EVJ9MdicB6Eo/w1200-h630-p-k-no-nu/Perkebunan%20Tebu%20UNtuk%20Sumber%20Energi%20Bersih.jpg">
                        </a>
                        <div
                            class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Motivasi</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Masa Depan Pertanian Tebu Berkelanjutan
                        </h2>
                        <p class="text-sm text-gray-500">Pelajari pentingnya praktik pertanian tebu berkelanjutan untuk
                            melindungi lingkungan dan hasil di masa depan.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Lia Marlina</a> ·
                            <span class="mx-1">25 Mei 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://banyuwangikab.go.id/public/media/berita/original/c1e0336a40cb6439ec4470183494a988.jpg">
                        </a>
                        <div
                            class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Bisnis</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Manajemen Waktu untuk Petani</h2>
                        <p class="text-sm text-gray-500">Strategi manajemen waktu yang efektif untuk membantu petani
                            tebu memaksimalkan produktivitas dan keuntungan.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott Reedman</a> ·
                            <span class="mx-1">18 Mei 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://ik.trn.asia/uploads/2021/07/Manfaat-tebu.jpg">
                        </a>
                        <div
                            class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Gizi</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Nilai Gizi dari Tebu</h2>
                        <p class="text-sm text-gray-500">Tebu bukan hanya untuk gula! Ketahui profil gizi tanaman ini
                            dan bagaimana ia dapat menjadi bagian dari diet sehat.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake Caldwell</a>
                            · <span class="mx-1">15 Mei 2023</span> · <span class="mx-1 text-gray-600">3 menit
                                baca</span></p>
                    </div>

                </div>
            </div>
        </section>




        <!-- Pagination -->
        <div class="mt-16 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#"
                    class="px-4 py-2 rounded-l-md border border-gray-400 dark:border-gray-700 dark:bg-gray-800 text-gray-800 dark:text-gray-300 hover:bg-gray-400 dark:hover:bg-gray-700 transition-colors duration-300">Previous</a>
                <a href="#"
                    class="px-4 py-2 border-t border-b border-gray-400 dark:border-gray-700 dark:bg-gray-800 text-gray-800 dark:text-gray-300 hover:bg-gray-400 dark:hover:bg-gray-700 transition-colors duration-300">1</a>
                <a href="#"
                    class="px-4 py-2 border-t border-b border-gray-400 dark:border-gray-700 dark:bg-gray-800 text-gray-800 dark:text-gray-300 hover:bg-gray-400 dark:hover:bg-gray-700 transition-colors duration-300">2</a>
                <a href="#"
                    class="px-4 py-2 border-t border-b border-gray-400 dark:border-gray-700 dark:bg-gray-800 text-gray-800 dark:text-gray-300 hover:bg-gray-400 dark:hover:bg-gray-700 transition-colors duration-300">3</a>
                <a href="#"
                    class="px-4 py-2 rounded-r-md border border-gray-400 dark:border-gray-700 dark:bg-gray-800 text-gray-800 dark:text-gray-300 hover:bg-gray-400 dark:hover:bg-gray-700 transition-colors duration-300">Next</a>
            </nav>
        </div>
    </main>

    <!-- Newsletter Section -->
    <section class="newsletter-container container mx-auto px-8 md:px-16 py-16">
        <div class="newsletter-wrapper w-full bg-ireng/10 dark:bg-white/10 backdrop-blur-md rounded-lg shadow-lg p-8">
            <div class="newsletter text-center">
                <h2 class="text-2xl font-bold text-ireng dark:text-white mb-4">Berlangganan Newsletter</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-6">Dapatkan berita terbaru langsung di inbox Anda</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Masukkan email Anda"
                        class="px-4 py-2 dark:bg-gray-800 border dark:border-gray-700 rounded-lg focus:ring-accent focus:border-accent dark:text-white">
                    <button type="button"
                        class="px-6 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Berlangganan</button>
                </form>
            </div>
        </div>
    </section>
</div>

@push('styles')
    <style>
        .clip-aurora {
            clip-path: circle(50% at 50% 50%);
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for fade-in effect
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('article').forEach(article => {
                observer.observe(article);
            });
        });
    </script>
@endpush

</x-main-layout>
