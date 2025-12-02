<x-main-layout>
    <div class="min-h-screen dark:bg-ireng dark:text-white bg-white text-ireng overflow-hidden">
        <!-- Hero Section -->
        <section class="hero-container container mx-auto relative py-4">
            <!-- Aurora Effects -->
            <div
                class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
            </div>
        </section>

        <main class="container mx-auto px-8 lg:px-16 py-12">
            <article class="max-w-4xl mx-auto">
                <div class="mb-8 text-center">
                    <div class="bg-green-500 inline-block px-3 py-1.5 rounded-full text-xs font-medium uppercase text-white mb-4">
                        {{ $news->category }}
                    </div>
                    <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $news->title }}</h1>
                    <div class="text-gray-600 dark:text-gray-400 text-sm">
                        By <span class="font-medium text-ireng dark:text-white">{{ $news->user->name }}</span>
                        <span class="mx-2">•</span>
                        {{ $news->created_at->format('d M Y') }}
                    </div>
                </div>

                <div class="mb-10 rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ $news->image ? asset('storage/' . $news->image) : 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070&auto=format&fit=crop' }}" alt="{{ $news->title }}" class="w-full h-auto object-cover">
                </div>

                <div class="prose prose-lg dark:prose-invert max-w-none">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </article>

            @if($related->count() > 0)
            <div class="mt-16 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold mb-6">Related News</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($related as $item)
                    <div class="flex flex-col">
                        <a href="{{ route('agri.berita.show', $item->slug) }}" class="block mb-4">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=2070&auto=format&fit=crop' }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-lg">
                        </a>
                        <div class="text-xs font-medium text-green-500 uppercase mb-2">{{ $item->category }}</div>
                        <h4 class="text-lg font-bold mb-2">
                            <a href="{{ route('agri.berita.show', $item->slug) }}" class="hover:text-green-600 transition-colors">{{ $item->title }}</a>
                        </h4>
                        <div class="text-xs text-gray-500">{{ $item->created_at->format('d M Y') }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </main>
    </div>
</x-main-layout>
