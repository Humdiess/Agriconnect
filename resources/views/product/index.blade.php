@extends('templates.main')

@section('content')
    <div class="flex-1 space-y-4 p-8 pt-6 transition-colors mb-20">
        <div class="flex items-center justify-between space-y-2">
            <h2 class="text-3xl font-bold dark:text-white tracking-tight">Products</h2>
            <div class="flex items-center space-x-2">
                <a href="{{ route('product.create') }}"
                    class="inline-flex items-center justify-center rounded-md text-sm dark:text-white font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2 h-4 w-4">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add Product
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mt-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
            <div class="flex-1 space-y-4">
                <div class="rounded-lg border dark:border-zinc-600 dark:bg-zinc-800 dark:text-white text-card-foreground shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="text-2xl font-semibold leading-none tracking-tight dark:text-white">Product Management
                        </h3>
                    </div>
                    <div class="p-6 pt-0">
                        <form action="{{ route('product.index') }}" method="GET" class="flex space-x-2">
                            <div class="flex-1">
                                <label for="search"
                                    class="text-sm font-medium leading-none mb-8 peer-disabled:cursor-not-allowed peer-disabled:opacity-70 dark:text-white">Search</label>
                                <div class="relative text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="absolute left-2 top-2.5 h-4 w-4 text-muted-foreground">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                    <input id="search" name="search"
                                        class="flex h-10 w-full rounded-md border border-input text-black bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8"
                                        placeholder="Search products..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="w-[180px]">
                                <label for="sort"
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 dark:text-white">Sort
                                    by</label>
                                <select id="sort" name="sort"
                                    class="flex h-10 w-full text-black items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name</option>
                                    <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>Price</option>
                                    <option value="stock" {{ request('sort') == 'stock' ? 'selected' : '' }}>Stock</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Apply
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($products as $product)
                        <div class="rounded-lg border dark:border-zinc-600 dark:bg-zinc-800 dark:text-white text-card-foreground shadow-sm">
                            <div class="p-0">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="aspect-video object-cover w-full rounded-t-lg">
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg dark:text-white">{{ $product->name }}</h3>
                                <p class="text-sm text-muted-foreground dark:text-white">📌 Location</p>
                                <p class="text-sm dark:text-white">Stock: {{ $product->stock }}</p>
                                <p class="font-medium mt-2 dark:text-white">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="p-4 pt-0">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="inline-flex dark:border-zinc-600 dark:text-white items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
