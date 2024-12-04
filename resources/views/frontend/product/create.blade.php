@extends('templates.main')

@section('content')
<div class="flex flex-col w-full">
    <main class="flex-grow p-4 sm:p-6 lg:p-8">
        <div>
            <div class="mb-8">
                <div class="mt-4 flex items-center justify-between">
                    <a href="/product" class="inline-flex items-center px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Kembali
                    </a>
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Add New Product</h2>
                </div>
            </div>

            <div class="border dark:border-zinc-600 shadow-md rounded-lg p-6">
                <form action="" method="post" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="form-input">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                            <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-input">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Harga Barang</label>
                            <input type="number" name="price" id="price" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('price') border-red-500 @enderror" value="{{ old('price') }}">
                            @error('price')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-input">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                            <input type="number" name="stock" id="stock" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('stock') border-red-500 @enderror" value="{{ old('stock') }}">
                            @error('stock')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-input">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                            <input type="text" name="category" id="category" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('category') border-red-500 @enderror" value="{{ old('category') }}">
                            @error('category')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-input">
                            <label for="sertifikasi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Sertifikasi</label>
                            <input type="text" name="sertifikasi" id="sertifikasi" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('sertifikasi') border-red-500 @enderror" value="{{ old('sertifikasi') }}" placeholder="e.g. SNI">
                            @error('sertifikasi')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-input">
                            <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Lokasi</label>
                            <input type="text" name="lokasi" id="lokasi" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('lokasi') border-red-500 @enderror" value="{{ old('lokasi') }}" placeholder="e.g. Sidoarjo, Jawa Timur">
                            @error('lokasi')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-input">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-input">
                        <label for="pengiriman" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Pengiriman</label>
                        <select name="pengiriman" id="pengiriman" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('pengiriman') border-red-500 @enderror">
                            <option value="">Pilih opsi pengiriman</option>
                            <option value="jerigen" {{ old('pengiriman') == 'jerigen' ? 'selected' : '' }}>Dikirim dalam kemasan jerigen</option>
                            <option value="bulk" {{ old('pengiriman') == 'bulk' ? 'selected' : '' }}>Tersedia opsi pengiriman bulk</option>
                            <option value="both" {{ old('pengiriman') == 'both' ? 'selected' : '' }}>Kemasan jerigen dan opsi bulk</option>
                        </select>
                        @error('pengiriman')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-input">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Gambar (max: 5MB)</label>
                        <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent dark:bg-zinc-700 dark:border-zinc-600 dark:text-white @error('image') border-red-500 @enderror">
                        @error('image')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex">
                        <button type="submit" class="px-4 py-2 bg-accent text-white rounded-md hover:bg-accent-dark transition-colors">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
