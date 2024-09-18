@extends('templates.main')

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">Our Blog</h1>
                <a href="/" class="mt-2 text-accent font-medium hover:text-hijau2">Kembali Ke Beranda</a>
            </div>
        </header>

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $articles = [
                            [
                                'title' => 'Sustainable Farming Practices',
                                'excerpt' =>
                                    'Learn about the latest sustainable farming techniques that can help increase yield while protecting the environment.',
                                'image' => 'sustainable-farming.jpg',
                                'date' => '2023-05-15',
                            ],
                            [
                                'title' => 'The Rise of Vertical Farming',
                                'excerpt' =>
                                    'Discover how vertical farming is revolutionizing agriculture in urban areas and its potential for future food production.',
                                'image' => 'vertical-farming.jpg',
                                'date' => '2023-05-10',
                            ],
                            [
                                'title' => 'Organic vs. Conventional Farming',
                                'excerpt' =>
                                    'We compare organic and conventional farming methods, discussing the pros and cons of each approach.',
                                'image' => 'organic-farming.jpg',
                                'date' => '2023-05-05',
                            ],
                            [
                                'title' => 'Technology in Agriculture',
                                'excerpt' =>
                                    'Explore how modern technology is transforming traditional farming practices and increasing efficiency.',
                                'image' => 'agri-tech.jpg',
                                'date' => '2023-04-30',
                            ],
                            [
                                'title' => 'Climate Change and Agriculture',
                                'excerpt' =>
                                    'Understand the impact of climate change on agriculture and strategies farmers are using to adapt.',
                                'image' => 'climate-change.jpg',
                                'date' => '2023-04-25',
                            ],
                            [
                                'title' => 'The Importance of Crop Rotation',
                                'excerpt' =>
                                    'Learn why crop rotation is crucial for soil health and how it can improve your farm\'s productivity.',
                                'image' => 'crop-rotation.jpg',
                                'date' => '2023-04-20',
                            ],
                        ];
                    @endphp

                    @foreach ($articles as $article)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <img class="h-48 w-full object-cover" src="{{ asset('img/blog/' . $article['image']) }}"
                                alt="{{ $article['title'] }}">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $article['title'] }}</h2>
                                <p class="text-gray-600 text-sm mb-4">{{ date('F j, Y', strtotime($article['date'])) }}</p>
                                <p class="text-gray-600 mb-4">{{ $article['excerpt'] }}</p>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Read More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <nav class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                            <a href="#"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of
                                    <span class="font-medium">12</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                    aria-label="Pagination">
                                    <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <!-- Heroicon name: solid/chevron-left -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        1
                                    </a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        2
                                    </a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <!-- Heroicon name: solid/chevron-right -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </main>
    </div>
@endsection
