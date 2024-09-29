@include('frontend.layouts.header')

<div class="min-h-screen dark:bg-ireng dark:text-white bg-white text-ireng">

    <!-- Hero Section -->
    <section class="hero-container container mx-auto relative py-16">
        <!-- Aurora Effects -->
        <div
            class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
        </div>
        <div
            class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora">
        </div>

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
        </div>
    </section>

    <!-- News Content -->
    <main class="container mx-auto px-8 lg:px-16 py-12">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
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
                    <button type="submit"
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

@include('frontend.layouts.footer')
