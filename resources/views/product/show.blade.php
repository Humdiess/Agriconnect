@extends('frontend.layouts.main')

@section('content')
<div class="bg-white dark:bg-ireng min-h-screen py-24">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:gap-x-8">
            <!-- Image gallery -->
            <div class="lg:w-1/2">
                <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
                    <img id="mainImage" src="http://4.bp.blogspot.com/-bkN-5MP2o9w/VD3b00nxVuI/AAAAAAAADFc/cFBTta4FBxY/s1600/tebu.jpg"
                        alt="{{ $product->name }}" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Product info -->
            <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0 lg:w-1/2">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h1>

                <div class="mt-3 flex items-center">
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <div class="ml-4 pl-4 border-l border-gray-300">
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-5 w-5 flex-shrink-0 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <a href="#" class="ml-3 text-sm font-medium text-green-600 hover:text-green-500">117 reviews</a>
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="sr-only">Description</h3>
                    <div class="text-base text-gray-700 dark:text-gray-300 space-y-6">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>

                <div class="mt-8 flex flex-col space-y-4">
                    <a href="{{ $whatsappLink }}" target="_blank"
                        class="w-full bg-green-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Pesan Sekarang
                    </a>
                    @can('is_farmer')
                        <div class="flex space-x-4">
                            <a href="/product-edit/{{ $product->id }}"
                                class="flex-1 bg-orange-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                Edit
                            </a>
                            <form action="/product-delete/{{ $product->id }}" method="post" class="flex-1">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="w-full bg-red-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endcan
                </div>

                <section aria-labelledby="details-heading" class="mt-12">
                    <h2 id="details-heading" class="sr-only">Additional details</h2>
                    <div class="border-t border-gray-200 py-6 space-y-6">
                        <div>
                            <h3 class="text-gray-900 dark:text-white font-medium">Sertifikasi</h3>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $product->sertifikasi }}</p>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white font-medium">Lokasi</h3>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $product->lokasi }}</p>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white font-medium">Pengiriman</h3>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $product->pengiriman }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const image = document.getElementById('mainImage');
    let isZoomed = false;
    let zoomLevel = 1;

    image.addEventListener('click', function(e) {
        if (!isZoomed) {
            zoomLevel = 2;
            image.style.transform = `scale(${zoomLevel})`;
            isZoomed = true;
        } else {
            zoomLevel = 1;
            image.style.transform = 'scale(1)';
            image.style.transformOrigin = 'center';
            isZoomed = false;
        }
    });

    image.addEventListener('mousemove', function(e) {
        if (isZoomed) {
            const { left, top, width, height } = image.getBoundingClientRect();
            const x = (e.clientX - left) / width * 100;
            const y = (e.clientY - top) / height * 100;
            image.style.transformOrigin = `${x}% ${y}%`;
        }
    });

    image.addEventListener('mouseleave', function() {
        if (isZoomed) {
            zoomLevel = 1;
            image.style.transform = 'scale(1)';
            image.style.transformOrigin = 'center';
            isZoomed = false;
        }
    });
});
</script>
@endsection
