<x-main-layout>

{{-- @php
    use App\Helpers\CurrencyHelper;
@endphp --}}

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
            <div
                class="filter-sort flex flex-col md:flex-row md:justify-between items-start md:items-center mb-8 gap-4">
                <div class="filter flex items-center gap-4 w-full md:w-auto">
                    <div class="sort w-full md:w-auto">
                        <select id="sortPrice"
                            class="bg-white dark:bg-ireng border border-gray-300 dark:border-zinc-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5">
                            <option value="default">Urutkan Harga</option>
                            <option value="asc">Harga: Rendah ke Tinggi</option>
                            <option value="desc">Harga: Tinggi ke Rendah</option>
                        </select>
                    </div>
                </div>
                <div class="search w-full md:w-96 relative">
                    <label for="searchInput" class="sr-only">Cari produk</label>
                    <input type="search" id="searchInput"
                        class="block w-full p-2.5 pr-10 text-sm text-gray-900 border bg-white dark:bg-ireng border-gray-300 rounded-lg focus:ring-accent focus:border-accent dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Cari produk..." required>
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
                                        {{-- {{ CurrencyHelper::getFormat($product->price) }}</span> --}}
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
        const sortPrice = document.getElementById('sortPrice');
        const productGrid = document.getElementById('productGrid');

        function filterProducts() {
            const searchTerm = searchInput.value;
            const sortOrder = sortPrice.value;

            // Mengirim request AJAX untuk filter
            $.ajax({
                url: '/filter/products',
                method: 'GET',
                data: {
                    searchTerm: searchTerm,
                    sortOrder: sortOrder
                },
                success: function(response) {
                    productGrid.innerHTML = ''; // Kosongkan grid produk

                    // Loop produk dan tambahkan ke grid
                    response.products.forEach(function(product) {
                        const productCard = `
                            <a href="/agri-shop/${product.id}">
                                <div class="product-card border dark:border-zinc-600 rounded-lg overflow-hidden transition-all duration-300"
                                    data-category="${product.category}" data-name="${product.name}"
                                    data-price="${product.price}">
                                    <div class="product-image relative pb-[100%]">
                                        <img src="/storage/${product.image}" alt="${product.name}"
                                            class="absolute inset-0 w-full h-full object-cover">
                                    </div>
                                    <div class="product-info p-4">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                            ${product.name}
                                        </h3>
                                        <p class="text-gray-600 dark:text-gray-300 mb-2 line-clamp-2">
                                            ${product.description}.
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-xl font-bold text-accent">Rp.
                                                ${new Intl.NumberFormat().format(product.price)}</span>
                                            <button
                                                class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark transition-colors duration-300">Beli</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        `;
                        productGrid.innerHTML += productCard; // Tambahkan produk ke grid
                    });
                }
            });
        }

        // Event listeners untuk search dan filter
        searchInput.addEventListener('input', filterProducts);
        sortPrice.addEventListener('change', filterProducts);

        // Inisialisasi filter pada awal load halaman
        filterProducts();
    });
</script>
</x-main-layout>

