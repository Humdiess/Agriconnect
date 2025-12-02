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
        <section class="bg-white dark:bg-ireng">
            <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

                @if($news->isEmpty())
                <div class="flex flex-col items-center justify-center py-20">
                    <svg class="w-20 h-20 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    <h2 class="text-2xl font-bold text-gray-600 dark:text-gray-400">Belum ada berita saat ini.</h2>
                    <p class="text-gray-500 dark:text-gray-500 mt-2">Silakan kembali lagi nanti untuk update terbaru.</p>
                </div>
                @else

                @if($featured)
                <div class="flex flex-col items-center sm:px-5 md:flex-row">
                    <div class="w-full md:w-1/2">
                        <a href="{{ route('agri.berita.show', $featured->slug) }}" class="block">
                            <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                                src="{{ $featured->image ? asset('storage/' . $featured->image) : 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070&auto=format&fit=crop' }}">
                        </a>
                    </div>
                    <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                        <div
                            class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                            <div
                                class="bg-green-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>{{ $featured->category }}</span>
                            </div>
                            <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="{{ route('agri.berita.show', $featured->slug) }}">{{ $featured->title }}</a></h1>
                            <p class="pt-2 text-sm font-medium">oleh <a href="#" class="mr-1 underline">{{ $featured->user->name }}</a> · <span class="mx-1">{{ $featured->created_at->format('d M Y') }}</span></p>
                        </div>
                    </div>
                </div>
                @endif

                <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                    @foreach($news as $item)
                    @if($featured && $item->id == $featured->id) @continue @endif
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="{{ route('agri.berita.show', $item->slug) }}" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="{{ $item->image ? asset('storage/' . $item->image) : 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070&auto=format&fit=crop' }}">
                        </a>
                        <div
                            class="bg-green-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>{{ $item->category }}</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="{{ route('agri.berita.show', $item->slug) }}">{{ $item->title }}</a></h2>
                        <p class="text-sm text-gray-500">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                        <p class="pt-2 text-xs font-medium"><a href="#" class="mr-1 underline">{{ $item->user->name }}</a> ·
                            <span class="mx-1">{{ $item->created_at->format('d M Y') }}</span>
                        </p>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </section>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center">
            {{ $news->links() }}
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
