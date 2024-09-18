@include('frontend.layouts.header')
<!-- Navbar Section -->
<section class="navbar justify-between py-6 px-16 items-center z-50 hidden md:flex">
    <div class="logo">
        <a class="text-2xl font-bold w-6" href="#">
            <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="Logo">
        </a>
    </div>

    @auth
        <!-- User Dropdown -->
        <div class="relative">
            <button id="user-dropdown"
                class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg flex items-center justify-between">
                {{ Auth::user()->name }}
                <span class="ml-2">&#9662;</span>
            </button>

            <div id="dropdown-menu"
                class="absolute border rounded-lg mt-2 p-1 w-full bg-white dark:bg-zinc-900 dark:border-zinc-300 overflow-hidden transition-all duration-300"
                style="min-width: 150px; height: 0; opacity: 0; z-index: 999999999;">

                @can('is_farmer')
                    <a href="/dashboard-tani"
                        class="w-full text-left px-3 py-2 text-sm text-green-500 hover:bg-green-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-table-columns mr-2"></i>
                        Dashboard Tani
                    </a>
                @endcan

                <form id="logout-form" method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-3 py-2 text-sm text-red-500 hover:bg-red-500 rounded-md hover:text-white flex items-center">
                        <i class="fa-solid fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
        <!-- Sign Up Button -->
        <div class="button flex items-center">
            <a class="px-8 py-[0.8rem] text-accent text-sm rounded-lg" href="/login">Sign In</a>
            <a class="bg-accent px-8 py-[0.8rem] text-white text-sm rounded-lg" href="/sign-up">Sign Up</a>
        </div>
    @endauth
</section>
<div class="bg-gray-100 min-h-screen">
    <header class="bg-green-700 text-white">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold">Toko Produk Pertanian</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @php
                $products = [
                    ['name' => 'Beras Organik', 'price' => 15000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Pupuk NPK', 'price' => 75000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Bibit Jagung', 'price' => 25000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Pestisida Organik', 'price' => 50000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Alat Penyiram', 'price' => 100000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Cangkul', 'price' => 85000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Sarung Tangan Kebun', 'price' => 35000, 'image' => 'sayur8.jpg'],
                    ['name' => 'Benih Sayuran Mix', 'price' => 20000, 'image' => 'sayur8.jpg'],
                ];
            @endphp

            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('img/product/' . $product['image']) }}" alt="{{ $product['name'] }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $product['name'] }}</h2>
                        <p class="text-gray-600 mt-2">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                        <button
                            class="mt-4 w-full bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-300">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-green-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Toko Produk Pertanian. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</div>
@include('frontend.layouts.footer')
