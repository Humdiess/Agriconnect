@extends('templates.main')

@section('content')
    <div class="bg-gray-100 min-h-svh">
        <nav class="bg-green-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <a href="#" class="text-white font-bold text-xl">AgriConnect | AgriShop</a>
                    </div>
                    <div class="flex items-center">
                        <a href="/"
                            class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/agrishop"
                            class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Products</a>
                        <a href="#"
                            class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Cart</a>
                        @can('is_farmer')
                            <p class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">
                                Welcome Back,
                                {{ auth()->user()->name }}</p>
                        @endcan
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($products as $product)
                    <a href="/product/{{ $product->id }}">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:-translate-y-4 transition ease-in-out">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product['name'] }}"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-800">{{ $product['name'] }}</h2>
                                <p class="text-gray-600">📌 Location</p>
                                <p class="text-gray-600 mt-2">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                                {{-- <button
                                class="mt-4 w-full z-[99] bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-300">
                                Tambah ke Keranjang
                            </button> --}}
                            </div>
                        </div>
                @endforeach
            </div>
            </a>
        </main>

        {{-- <footer class="bg-green-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Toko Produk Pertanian. Semua hak cipta dilindungi.</p>
        </div>
    </footer> --}}

    </div>
@endsection
