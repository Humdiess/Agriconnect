@extends('templates.main')

@section('content')
    <!-- Main Content -->
    <div class="flex flex-col ms-64 w-full">
        <main class="w-full bg-gray-100 dark:bg-black">
            <section class="product-wrapper px-8 py-8">
                <div class="product-header mb-2">
                    <p class="dark:text-gray-100">Admin Panel | {{ auth()->user()->name }}</p>
                    <hr class="my-4">
                    <a href="/product-create" class="px-2 py-1 bg-accent text-white  rounded-sm">Add New Product</a>
                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mt-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="text-xl font-semibold text-center mx-auto my-2 dark:text-gray-100">Your Product :</h3>
                </div>
                <div class="product-items grid grid-cols-5 gap-4 my-3">
                    @foreach ($products as $product)
                        <a href="/product/{{ $product->id }}">
                            <div
                                class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden hover:-translate-y-4 transition ease-in-out">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">
                                        {{ $product->name }}
                                    </h2>
                                    <p class="text-gray-600 dark:text-gray-300">📌 Location</p>
                                    <p class="text-gray-600 dark:text-gray-300">Stok : {{ $product->stock }}</p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-2">Rp
                                        {{ number_format($product['price'], 0, ',', '.') }}</p>
                                </div>
                            </div>
                    @endforeach
                </div>
            </section>
        </main>
    </div>
@endsection
