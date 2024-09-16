@extends('mylayout.main')

@section('content')
    <main class="">
        <!-- product Section -->
        <section class="product-wrapper px-16 py-8">
            <div class="product-header mb-2">
                <h1 class="text-4xl font-bold">TANI SHOP</h1>
                <hr class="my-4">
                <a href="/dashboard-tani" class="px-2 py-1 text-accent rounded-sm">Kembali ke Dashboard</a>
                <a href="/product-create" class="px-2 py-1 bg-accent text-white rounded-sm">Add New Product</a>
                <!-- Flash Message -->
                @if (session('success'))
                    <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mt-4">
                        {{ session('success') }}
                    </div>
                @endif
                <h3 class="text-xl font-semibold text-center mx-auto my-4">Your Product :</h3>
            </div>
            <br>
            <div class="product-items grid grid-cols-5 gap-4 my-2">
                @foreach ($products as $product)
                    {{-- product 1 --}}
                    <div class="product-card bg-white rounded-xl overflow-hidden"
                        style="box-shadow: 0px 0px 9px -3px #5dbb63;">
                        <img class="w-full h-48 object-cover object-center aspect-square"
                            src="{{ asset('storage/' . $product->image) }}" alt="">
                        <div class="detail-product p-3">
                            <h4 class="nama-product texl-xl font-semibold">{{ $product->name }}</h4>
                            <p class="harga-product font-bold text-accent">Rp.{{ $product->price }},-</p>
                            <p class="deskripsi-product truncate font-light text-sm">📌Lokasi</p>
                            <br>
                            <div class="flex flex-wrap gap-3">
                                <a href="/product/{{ $product->id }}"
                                    class="bg-accent text-white py-1 px-2 text-sm rounded-sm">Detail</a>
                                <button type="button" onclick=""
                                    class="bg-blue-400 text-white py-1 px-2 text-sm rounded-sm">Add to
                                    Cart</button>
                                <a href="/product-edit/{{ $product->id }}"
                                    class="bg-orange-400 text-white py-1 px-2 text-sm rounded-sm">Edit </a>
                                <form action="/product-delete/{{ $product->id }}" method="POST"
                                    id="formDelete-{{ $loop->iteration }}">
                                    @method('delete')
                                    @csrf
                                    <button type="button" onclick="deleteConfirm({{ $loop->iteration }})"
                                        class="bg-red-400 text-white py-1 px-2 text-sm rounded-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
