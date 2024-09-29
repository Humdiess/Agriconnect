@extends('templates.main')

@section('content')
    <div class="flex flex-col w-full">
        <main class="w-full bg-gray-100">
            <!-- product Section -->
            <section class="product-wrapper px-16 py-8 dark:bg-zinc-950">
                <div class="product-header mb-2">
                    <h1 class="text-4xl font-bold dark:text-white">Agri Shop</h1>
                    <hr class="my-4">
                    <a href="/product" class="px-2 py-1 bg-accent text-white rounded-sm">Kembali</a>
                    <p class="text-center">(Edit Product)</p>
                </div>
                <br>
                <div class="create-product-form bg-gray-200 dark:bg-zinc-800 px-4 py-4 mx-36 rounded-lg">
                    <form action="/product-edit/{{ $product->id }}" method="post" enctype="multipart/form-data"
                        class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')
                        <div class="form-input flex flex-col">
                            <label for="name" class="mb-2 font-medium dark:text-white">Nama Produk:</label>
                            <input type="text" name="name" id="name"
                                class="p-2 @error('name') border-red-500 @enderror"
                                value="{{ old('name', $product->name) }}">
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input flex flex-col">
                            <label for="description" class="mb-2 font-medium dark:text-white">Deskripsi:</label>
                            <textarea name="description" id="description" class="p-2 @error('description') border-red-500 @enderror" cols="20"
                                rows="5">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input flex flex-col">
                            <label for="price" class="mb-2 font-medium dark:text-white">Harga Barang:</label>
                            <input type="number" name="price" id="price"
                                class="p-2 @error('price') border-red-500 @enderror"
                                value="{{ old('price', $product->price) }}">
                            @error('price')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input flex flex-col">
                            <label for="stock" class="mb-2 font-medium dark:text-white">Stok:</label>
                            <input type="number" name="stock" id="stock"
                                class="p-2 @error('stock') border-red-500 @enderror"
                                value="{{ old('stock', $product->stock) }}">
                            @error('stock')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input flex flex-col">
                            <label for="category" class="mb-2 font-medium dark:text-white">Category:</label>
                            <input type="text" name="category" id="category"
                                class="p-2 @error('category') border-red-500 @enderror"
                                value="{{ old('category', $product->category) }}">
                            @error('category')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input flex flex-col">
                            <label for="image" class="mb-2 font-medium dark:text-white">Gambar (max:5mb)</label>
                            <input type="file" name="image" id="image"
                                class="p-2 dark:text-white @error('image') border-red-500 @enderror">
                            @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="px-2 py-1 bg-accent text-white">Update</button>
                    </form>
                </div>
            </section>
        </main>
    </div>
@endsection
