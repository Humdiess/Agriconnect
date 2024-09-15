@extends('mylayout.main')

@section('content')
    <main class="">
        <!-- product Section -->
        <section class="product-wrapper px-16 py-8">
            <div class="product-header mb-2">
                <h1 class="text-4xl font-bold">TANI SHOP</h1>
                <hr class="my-4">
                <a href="/dashboard-tani" class="px-2 py-1 text-accent rounded-sm">Kembali ke Dashboard</a>
                <a href="/product" class="px-2 py-1 bg-accent text-white rounded-sm">Kembali ke Daftar Produk</a>
                <!-- Flash Message -->
                @if (session('success'))
                    <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mt-4">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <br>
            <div class="product-detail bg-white rounded-xl overflow-hidden px-8 py-8 mx-auto"
                style="box-shadow: 0px 0px 9px -3px #5dbb63; max-width: 600px;">
                <div class="image-wrapper mb-6">
                    <img class="w-full h-80 object-cover object-center" src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}">
                </div>
                <div class="detail-product">
                    <h4 class="nama-product text-3xl font-semibold">{{ $product->name }}</h4>
                    <p class="harga-product font-bold text-accent text-2xl mt-2">Rp.{{ $product->price }},-</p>
                    <p class="stock-product font-medium mt-2">Stok: {{ $product->stock }} unit</p>
                    <p class="category-product font-medium mt-2">Kategori: {{ $product->category ?? 'Tidak Ada Kategori' }}
                    </p>
                    <br>
                    <p class="deskripsi-product font-light text-lg">
                        {{ $product->description ?? 'Tidak Ada Deskripsi' }}
                    </p>
                    <br>
                    <div class="flex gap-4 mt-4">
                        <form action="/product-delete/{{ $product->id }}" method="POST" id="formDelete">
                            @method('delete')
                            @csrf
                            <button type="button" onclick="deleteConfirm()"
                                class="bg-red-400 text-white py-2 px-4 text-sm rounded-md">Delete</button>
                        </form>
                        <a href="/product-edit/{{ $product->id }}"
                            class="bg-orange-400 text-white py-2 px-4 text-sm rounded-md">Edit</a>
                        <button type="button" onclick="" class="bg-blue-400 text-white py-2 px-4 text-sm rounded-md">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function deleteConfirm() {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                document.getElementById('formDelete').submit();
            }
        }
    </script>
@endsection
