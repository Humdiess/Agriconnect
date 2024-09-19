@extends('templates.main')

@section('content')
    @include('frontend.components.navbar')
    <x-navbar />
    <div class="bg-white dark:bg-zinc-950 min-h-svh">
        <header class="bg-gray-100 dark:bg-zinc-900 shadow">
            <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl ml-8 font-bold text-gray-900 dark:text-white">Agri Shop</h1>
            </div>
        </header>

        <main class="container mx-auto px-12 py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($products as $product)
                    <a href="/product/{{ $product->id }}">
                        <div
                            class="bg-white dark:bg-zinc-800 rounded-lg shadow-md overflow-hidden hover:-translate-y-4 transition ease-in-out">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product['name'] }}"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">{{ $product['name'] }}
                                </h2>
                                <p class="text-gray-600 dark:text-gray-300">📌 Location</p>
                                <p class="text-gray-600 dark:text-gray-300 mt-2">Rp
                                    {{ number_format($product['price'], 0, ',', '.') }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
            </a>
        </main>


    </div>
@endsection
