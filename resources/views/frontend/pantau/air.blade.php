@extends('templates.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pemantau Kualitas Air</h1>

        <!-- Kualitas Air Saat Ini -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach(['pH Air', 'TDS', 'DO', 'Suhu Air'] as $quality)
                <div class="text-center bg-white dark:bg-gray-800 border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                    <h3 class="font-semibold text-lg text-gray-700 dark:text-white mb-2">{{ $quality }}</h3>
                    <p class="text-3xl font-bold text-accent">
                        @switch($quality)
                            @case('pH Air')
                                {{ rand(6, 9) }}
                                @break
                            @case('TDS')
                                {{ rand(200, 1000) }} ppm
                                @break
                            @case('DO')
                                {{ rand(5, 12) }} mg/L
                                @break
                            @case('Suhu Air')
                                {{ rand(10, 35) }} °C
                                @break
                        @endswitch
                    </p>
                    <div class="mt-4 flex items-center">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Min</span>
                        <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                            <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(20, 80) }}%"></div>
                        </div>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Max</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Prakiraan Kualitas Air Minggu Ini -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Prakiraan Kualitas Air Minggu Ini</h2>
            <div class="grid grid-cols-7 gap-4">
                @foreach(['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $day }}</div>
                        <div class="mt-1 text-lg font-semibold text-accent">
                            {{ rand(200, 1000) }} ppm
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
