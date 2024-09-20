@extends('frontend.layouts.main')

@section('content')
    @include('frontend.components.navbar')
    <x-navbar />
    <div class="bg-white dark:bg-zinc-950 min-h-screen">
        <nav class="bg-gray-100 dark:bg-zinc-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <a href="#" class="text-zinc-900 dark:text-white font-bold text-xl">AgriConnect | AgriShop</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <!-- Image gallery -->
                <div class="flex flex-col-reverse">
                    <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
                        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-1-tab-1"
                                class="relative h-24 bg-white dark:bg-zinc-900 rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50"
                                aria-controls="tabs-1-panel-1" role="tab" type="button">
                                <span class="sr-only">Angled view</span>
                                <span class="absolute inset-0 rounded-md overflow-hidden">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="w-full h-full object-center object-cover">
                                </span>
                            </button>

                            <!-- More images... -->
                        </div>
                    </div>

                    <div class="w-full aspect-w-1 aspect-h-1">
                        <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                            <img src="{{ asset('storage/' . $product->image) }}"
                                alt="Angled front view with bag zipped and handles upright."
                                class="w-full h-full object-center object-cover sm:rounded-lg">
                        </div>
                    </div>
                </div>

                <!-- Product info -->
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100">{{ $product->name }}
                    </h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900 dark:text-gray-100">Rp {{ $product->price }}</p>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-3">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-5 w-5 flex-shrink-0 {{ $i < 4 ? 'text-green-500' : 'text-gray-300' }}"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-green-600 hover:text-green-500">117
                                reviews</a>
                        </div>
                    </div>
                    <form class="mt-4">
                        <div class="mt-10 flex sm:flex-col1">
                            <button type="button"
                                class="max-w-xs flex-1 bg-green-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-green-500 sm:w-full">Add
                                to cart</button>
                            <button type="button"
                                class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 dark:hover:bg-zinc-900 hover:text-gray-500">
                                <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <span class="sr-only">Add to favorites</span>
                            </button>
                        </div>
                    </form>
                    @can('is_farmer')
                        <div class="my-3 flex flex-wrap gap-2">
                            <a href="/product-edit/{{ $product->id }}"
                                class=" bg-orange-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white  hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-orange-500">Edit</a>
                            <form action="/product-delete/{{ $product->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submti"
                                    class=" bg-red-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-red-500">Delete</button>
                            </form>
                        </div>
                    @endcan
                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>

                        <div class="border-t divide-y divide-gray-200">
                            <div>
                                <h3 class="text-gray-900 text-2xl font-medium my-2 dark:text-gray-100">Description :</h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1">
                                    <p class="text-base dark:text-gray-100">{{ $product->description }}</p>
                                </div>
                            </div>

                            <!-- More sections... -->
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>

    <script>
        function deleteConfirm() {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                document.getElementById('formDelete').submit();
            }
        }
    </script>
@endsection
