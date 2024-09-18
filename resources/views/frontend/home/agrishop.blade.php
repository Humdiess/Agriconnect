@extends('templates.main')

@section('content')
    @include('frontend.components.navbar')
    <x-navbar />
    <div class="bg-gray-100 dark:bg-zinc-900 min-h-svh px-12">
        <nav class="bg-gray-100 dark:bg-zinc-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-zinc-900 dark:text-white font-bold text-2xl mt-4 ml-4 pt-6">AgriConnect |
                    AgriShop</h2>
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
                            </div>
                        </div>
                @endforeach
            </div>
            </a>
        </main>


    </div>
@endsection
