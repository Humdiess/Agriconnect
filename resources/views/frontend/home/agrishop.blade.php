@include('frontend.layouts.header')
<!-- Shop Hero Section -->
<section class="shop-hero-container container mx-auto relative py-16">
    <!-- Aurora Effects -->
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full top-[-10rem] left-[10rem] clip-aurora"></div>
    <div class="aurora-green absolute w-[20rem] h-[20rem] bg-gradient-to-r from-accent to-[#27a002] opacity-10 blur-3xl rounded-full bottom-[20rem] right-[15rem] clip-aurora"></div>

    <!-- Shop Hero Content -->
    <div class="shop-hero-wrapper w-full relative z-10">
        <div class="shop-hero w-100 flex flex-col items-center justify-center mx-8">
            <div class="shop-hero-title text-center">
                <h1 class="text-3xl text-center leading-9 mt-12 font-bold text-gray-900 dark:text-white sm:text-4xl md:text-5xl">
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
            <!-- Filter, Search, and Sort -->
            <div class="filter-sort flex flex-col md:flex-row md:justify-between items-start md:items-center mb-8 gap-4">
                <div class="filter flex items-center gap-4 w-full md:w-auto">
                    <div class="filter w-full md:w-auto">
                      <select id="filterCategory" class="bg-white dark:bg-ireng border border-gray-300 dark:border-zinc-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5">
                        <option value="all" selected>Filter Kategori</option>
                        <option value="alat">Alat Pertanian</option>
                        <option value="pupuk">Pupuk</option>
                        <option value="bibit">Bibit</option>
                      </select>
                    </div>

                    <div class="sort w-full md:w-auto">
                      <select id="sortProducts" class="bg-white dark:bg-ireng border border-gray-300 dark:border-zinc-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5">
                        <option value="default" selected>Urutkan</option>
                        <option value="price-asc">Harga: Rendah ke Tinggi</option>
                        <option value="price-desc">Harga: Tinggi ke Rendah</option>
                        <option value="name-asc">Nama: A-Z</option>
                        <option value="name-desc">Nama: Z-A</option>
                      </select>
                    </div>
                  </div>
                <div class="search w-full md:w-96 relative">
                  <label for="searchInput" class="sr-only">Cari produk</label>
                  <div class="relative">

                    <input
                      type="search"
                      id="searchInput"
                      class="block w-full p-2.5 pr-10 text-sm text-gray-900 border bg-white dark:bg-ireng border-gray-300 rounded-lg focus:ring-accent focus:border-accent  dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white"
                      placeholder="Cari produk..."
                      required
                    >
                    <div class="absolute inset-y-0 mr-2.5 right-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Product Grid -->
            <div id="productGrid" class="product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="product-card border dark:border-zinc-600 rounded-lg overflow-hidden transition-all duration-300" data-category="{{ ['alat', 'pupuk', 'bibit'][($i - 1) % 3] }}" data-name="Produk Pertanian {{ $i }}" data-price="{{ rand(50000, 500000) }}">
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
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const filterCategory = document.getElementById('filterCategory');
        const sortProducts = document.getElementById('sortProducts');
        const productGrid = document.getElementById('productGrid');

        function filterProducts() {
            const searchValue = searchInput.value.toLowerCase();
            const selectedCategory = filterCategory.value;
            const productCards = productGrid.getElementsByClassName('product-card');

            Array.from(productCards).forEach(card => {
                const productName = card.getAttribute('data-name').toLowerCase();
                const productCategory = card.getAttribute('data-category');
                const matchesSearch = productName.includes(searchValue);
                const matchesCategory = selectedCategory === 'all' || productCategory === selectedCategory;

                if (matchesSearch && matchesCategory) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function sortProductGrid() {
            const sortValue = sortProducts.value;
            const productCards = Array.from(productGrid.getElementsByClassName('product-card'));

            productCards.sort((a, b) => {
                const priceA = parseInt(a.getAttribute('data-price'));
                const priceB = parseInt(b.getAttribute('data-price'));
                const nameA = a.getAttribute('data-name').toLowerCase();
                const nameB = b.getAttribute('data-name').toLowerCase();

                switch (sortValue) {
                    case 'price-asc':
                        return priceA - priceB;
                    case 'price-desc':
                        return priceB - priceA;
                    case 'name-asc':
                        return nameA.localeCompare(nameB);
                    case 'name-desc':
                        return nameB.localeCompare(nameA);
                    default:
                        return 0;
                }
            });

            // Clear the product grid and re-append the sorted elements
            productGrid.innerHTML = '';
            productCards.forEach(card => productGrid.appendChild(card));
        }

        // Event listeners
        searchInput.addEventListener('input', filterProducts);
        filterCategory.addEventListener('change', filterProducts);
        sortProducts.addEventListener('change', sortProductGrid);

        // Initial filter to show all products
        filterProducts();
    });
</script>
@endpush

@include('frontend.layouts.footer')
