@extends('templates.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Suhu Udara dan Suhu Tanah</h1>

        <!-- Suhu Udara dan Suhu Tanah -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Suhu Udara -->
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Suhu Udara Saat Ini</h2>
                <p class="text-3xl font-bold text-accent">{{ rand(20, 35) }} °C</p>
                <div class="mt-4 flex items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">0 °C</span>
                    <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                        <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(20, 35) }}%"></div>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">50 °C</span>
                </div>
            </div>

            <!-- Suhu Tanah -->
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Suhu Tanah Saat Ini</h2>
                <p class="text-3xl font-bold text-accent">{{ rand(15, 30) }} °C</p>
                <div class="mt-4 flex items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">0 °C</span>
                    <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                        <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(15, 30) }}%"></div>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">50 °C</span>
                </div>
            </div>
        </div>

        <!-- Prakiraan Suhu Minggu Ini -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Prakiraan Suhu Udara Minggu Ini</h2>
            <div class="grid grid-cols-7 gap-4">
                @foreach(['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $day }}</div>
                        <div class="mt-1 text-lg font-semibold text-accent">
                            {{ rand(20, 35) }} °C
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
