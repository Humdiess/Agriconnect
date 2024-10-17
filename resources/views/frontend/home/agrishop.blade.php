@include('frontend.layouts.header')
@php
    use App\Helpers\CurrencyHelper;
@endphp
<!-- Shop Hero Section -->
<section class="shop-hero-container flex flex-col justify-center items-center relative pt-16 pb-8 overflow-hidden">
    <!-- Aurora Effects -->
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora">
    </div>
    <div
        class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora">
    </div>

    <!-- Shop Hero Content -->
    <div class="shop-hero-wrapper w-full relative z-10">
        <div class="shop-hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="shop-hero-title text-center">
                <h1
                    class="text-3xl text-center leading-9 mt-12 font-bold text-gray-900 dark:text-white sm:text-4xl md:text-5xl">
                    <span class="block">AgriConnect Shop</span>
                    <span class="block text-accent max-w-[62rem] text-center">Produk Berkualitas untuk Pertanian
                        Tebu</span>
                </h1>
                <p class="mt-3 max-w-[62rem] text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl">
                    Temukan alat dan bahan terbaik untuk meningkatkan produktivitas pertanian Anda
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Shop Content -->
<section class="shop-content-container px-8 flex flex-col justify-center items-center md:px-16 py-8">
    <div class="shop-content-wrapper w-full">
        <div class="shop-content w-full">
            <!-- Filter, Search, and Sort -->
            <div
                class="filter-sort flex flex-col md:flex-row md:justify-between items-start md:items-center mb-8 gap-4">
                <div class="search w-full relative">
                    <label for="searchInput" class="sr-only">Cari produk</label>
                    <div class="relative">
                        <input type="search" id="searchInput"
                            class="block w-full p-2.5 pr-10 text-sm text-gray-900 border bg-white dark:bg-ireng border-gray-300 rounded-lg focus:ring-accent focus:border-accent  dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Cari produk..." required>
                        <div class="absolute inset-y-0 mr-2.5 right-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div id="productGrid"
                class="product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href="/agri-shop/{{ $product->id }}">
                        <div class="product-card border dark:border-zinc-600 rounded-lg overflow-hidden transition-all duration-300"
                            data-name="{{ $product->name }}">
                            <div class="product-image relative pb-[100%]">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="absolute inset-0 w-full h-full object-cover">
                            </div>
                            <div class="product-info p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                    {{ $product->name }}
                                </h3>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-accent">Rp.
                                        {{ CurrencyHelper::getFormat($product->price) }}</span>
                                    <button
                                        class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Beli</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const productGrid = document.getElementById('productGrid');

        // AJAX function for searching products
        searchInput.addEventListener('keyup', function() {
            const query = searchInput.value;

            // AJAX request
            fetch(`/search-products?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    // Clear the product grid
                    productGrid.innerHTML = '';

                    // Loop through the products and append them to the grid
                    data.products.forEach(product => {
                        const productCard = `
                                <a href="/agri-shop/${product.id}">
                                    <div class="product-card border dark:border-zinc-600 rounded-lg overflow-hidden transition-all duration-300">
                                        <div class="product-image relative pb-[100%]">
                                            <img src="/storage/${product.image}" alt="${product.name}"
                                                class="absolute inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="product-info p-4">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                                ${product.name}
                                            </h3>
                                            <div class="flex justify-between items-center">
                                                <span class="text-xl font-bold text-accent">Rp. ${product.price}</span>
                                                <button class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Beli</button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `;
                        productGrid.innerHTML += productCard;
                    });
                });
        });
    });
</script>

@include('frontend.layouts.footer')
