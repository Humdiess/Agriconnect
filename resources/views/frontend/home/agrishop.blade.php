@extends('frontend.layouts.main')

@section('content')
    <x-navbar />
    <div class="min-h-screen transition-colors duration-200 relative overflow-hidden">
        <div class="aurora-container absolute inset-0 opacity-30 dark:opacity-50 pointer-events-none"></div>
        <div class="particle-container absolute inset-0 pointer-events-none"></div>
        <div class="relative z-10">
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 sm:gap-4">
                    @foreach ($products as $product)
                        <div class="group">
                            <article class="border dark:border-neutral-800 rounded-lg overflow-hidden transition-all duration-300 ease-in-out">
                                <a href="{{ route('product.show', $product->id) }}" class="block focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                                    <div class="relative pb-[56.25%]">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300" loading="lazy">
                                    </div>
                                    <div class="p-6">
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2 transition-colors duration-300">{{ $product->name }}</h2>
                                        <div class="flex items-center justify-between mb-4">
                                            <p class="text-sm text-gray-600 dark:text-gray-300 flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                </svg>
                                                {{ $product->location }}
                                            </p>
                                            <p class="text-sm text-gray-600 dark:text-gray-300 flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                                </svg>
                                                {{ $product->seller }}
                                            </p>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <p class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                                Rp {{ number_format($product->price, 0, ',', '.') }}
                                            </p>
                                            <div class="flex items-center bg-blue-100 dark:bg-blue-900 rounded-full px-3 py-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <span class="ml-1 text-sm font-semibold text-blue-800 dark:text-blue-200">{{ number_format($product->rating, 1) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .aurora-container {
        background: linear-gradient(45deg, #ff3d00, #00c853, #2196f3, #651fff);
        background-size: 400% 400%;
        animation: aurora 15s ease infinite;
    }
    @keyframes aurora {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .particle {
        position: absolute;
        background: white;
        border-radius: 50%;
        opacity: 0.5;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lazy loading images
        const images = document.querySelectorAll('img[loading="lazy"]');
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const image = entry.target;
                        image.src = image.dataset.src;
                        image.removeAttribute('data-src');
                        imageObserver.unobserve(image);
                    }
                });
            });
            images.forEach(img => imageObserver.observe(img));
        } else {
            images.forEach(img => {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        }

        // Particle effect
        const particleContainer = document.querySelector('.particle-container');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.width = `${Math.random() * 5 + 1}px`;
            particle.style.height = particle.style.width;
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;
            particle.style.animationDuration = `${Math.random() * 10 + 5}s`;
            particle.style.animationDelay = `${Math.random() * 5}s`;
            particleContainer.appendChild(particle);
        }
    });
</script>
@endpush
