@include('frontend.layouts.header')

<x-navbar />

    <!-- Shop Hero Section -->
    <section class="shop-hero-container container mx-auto relative py-16">
        <!-- Aurora Effects -->
        <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora"></div>
        <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora"></div>

        <!-- Shop Hero Content -->
        <div class="shop-hero-wrapper w-full relative z-10">
            <div class="shop-hero w-100 flex flex-col items-center justify-center mx-8">
                <div class="shop-hero-title text-center">
                    <h1 class="text-3xl text-center leading-9 font-bold text-gray-900 dark:text-white sm:text-4xl md:text-5xl">
                        <span class="block">AgriConnect Shop</span>
                        <span class="block text-accent max-w-[62rem] text-center">Produk Berkualitas untuk Pertanian Tebu</span>
                    </h1>
                    <p class="mt-3 max-w-[62rem] text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl">
                        Temukan alat dan bahan terbaik untuk meningkatkan produktivitas pertanian Anda
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="shop-content-container container mx-auto px-8 md:px-16 py-8">
        <div class="shop-content-wrapper w-full">
            <div class="shop-content w-full">
                <!-- Filter and Sort -->
                <div class="filter-sort flex justify-between items-center mb-8">
                    <div class="filter">
                        <select class="bg-white dark:bg-ireng border border-gray-300 dark:border-zinc-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5">
                            <option selected>Filter Kategori</option>
                            <option value="alat">Alat Pertanian</option>
                            <option value="pupuk">Pupuk</option>
                            <option value="bibit">Bibit</option>
                        </select>
                    </div>
                    <div class="sort">
                        <select class="bg-white dark:bg-ireng border border-gray-300 dark:border-zinc-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5">
                            <option selected>Urutkan</option>
                            <option value="price-asc">Harga: Rendah ke Tinggi</option>
                            <option value="price-desc">Harga: Tinggi ke Rendah</option>
                            <option value="name-asc">Nama: A-Z</option>
                            <option value="name-desc">Nama: Z-A</option>
                        </select>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="product-card bg-white dark:bg-ireng border dark:border-zinc-600 rounded-lg overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl">
                            <div class="product-image relative pb-[100%]">
                                <img src="{{ asset('img/placeholder-product.jpg') }}" alt="Product {{ $i }}" class="absolute inset-0 w-full h-full object-cover">
                            </div>
                            <div class="product-info p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Produk Pertanian {{ $i }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-2">Deskripsi singkat produk pertanian {{ $i }}.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-accent">Rp {{ number_format(rand(50000, 500000), 0, ',', '.') }}</span>
                                    <button class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Beli</button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <div class="pagination flex justify-center mt-12">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-4 py-2 rounded-l-md border border-gray-300 dark:border-zinc-600 bg-white dark:bg-ireng text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-700">Previous</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 dark:border-zinc-600 bg-white dark:bg-ireng text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-700">1</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 dark:border-zinc-600 bg-white dark:bg-ireng text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-700">2</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 dark:border-zinc-600 bg-white dark:bg-ireng text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-700">3</a>
                        <a href="#" class="px-4 py-2 rounded-r-md border border-gray-300 dark:border-zinc-600 bg-white dark:bg-ireng text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-700">Next</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-container container mx-auto px-8 md:px-16 py-16">
        <div class="newsletter-wrapper w-full bg-white dark:bg-ireng rounded-lg shadow-lg p-8">
            <div class="newsletter text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Berlangganan Newsletter</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Dapatkan informasi terbaru tentang produk dan tips pertanian</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Masukkan email Anda" class="px-4 py-2 border border-gray-300 dark:border-zinc-600 rounded-lg focus:ring-accent focus:border-accent">
                    <button type="submit" class="px-6 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Berlangganan</button>
                </form>
            </div>
        </div>
    </section>

@push('styles')
<style>
    .clip-aurora {
        clip-path: circle(50% at 50% 50%);
    }
</style>
@endpush

@push('styles')
<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    .float {
        animation: float 6s ease-in-out infinite;
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
                        image.classList.remove('opacity-0');
                        image.classList.add('opacity-100');
                        imageObserver.unobserve(image);
                    }
                });
            });
            images.forEach(img => {
                img.classList.add('opacity-0', 'transition-opacity', 'duration-300', 'ease-in-out');
                imageObserver.observe(img);
            });
        } else {
            images.forEach(img => {
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                img.classList.add('opacity-100');
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endpush

@include('frontend.layouts.footer')
