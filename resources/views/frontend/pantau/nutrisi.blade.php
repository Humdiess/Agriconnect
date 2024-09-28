@extends('templates.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Nutrisi Tanah</h1>

        <!-- Nutrisi Tanah Saat Ini -->
        <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Nutrisi Tanah Hari Ini</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(['Nitrogen', 'Fosfor', 'Kalium', 'pH Tanah'] as $nutrient)
                    <div class="text-center bg-gray-100 dark:bg-gray-800 rounded-lg p-4">
                        <h3 class="font-semibold text-lg text-gray-700 dark:text-white mb-2">{{ $nutrient }}</h3>
                        <p class="text-3xl font-bold text-accent">{{ rand(10, 100) }}%</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">0%</span>
                            <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(10, 100) }}%"></div>
                            </div>
                            <span class="text-sm text-gray-600 dark:text-gray-400">100%</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Prakiraan Nutrisi Minggu Ini -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Prakiraan Nutrisi Tanah Minggu Ini</h2>
            <div class="grid grid-cols-7 gap-4">
                @foreach(['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $day }}</div>
                        <div class="mt-1 text-lg font-semibold text-accent">
                            {{ rand(10, 100) }}%
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
