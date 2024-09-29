@extends('templates.main')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-0">Products</h2>
        <a href="{{ route('product.create') }}" class="inline-flex items-center px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Add Product
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="border dark:border-zinc-600 rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Product Management</h3>
        <form action="{{ route('product.index') }}" method="GET" class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="flex-1">
                <label for="search" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search</label>
                <div class="relative">
                    <input type="text" id="search" name="search" placeholder="Search products..." value="{{ request('search') }}"
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-accent focus:border-accent dark:bg-ireng dark:text-white">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="sm:w-48">
                <label for="sort" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Sort by</label>
                <select id="sort" name="sort" class="w-full border border-gray-300 py-2 px-2 dark:border-gray-600 rounded-md shadow-sm focus:ring-accent focus:border-accent dark:bg-ireng dark:text-white">
                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name</option>
                    <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>Price</option>
                    <option value="stock" {{ request('sort') == 'stock' ? 'selected' : '' }}>Stock</option>
                </select>
            </div>
            <div class="sm:flex-shrink-0">
                <label class="block text-sm font-medium text-transparent dark:text-transparent mb-1">Apply</label>
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark transition-colors">
                    Apply
                </button>
            </div>
        </form>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">📌 Location</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Stock: {{ $product->stock }}</p>
                    <p class="font-medium text-lg text-gray-900 dark:text-white mb-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                    <a href="{{ route('product.show', $product->id) }}" class="block w-full text-center px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark transition-colors">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
