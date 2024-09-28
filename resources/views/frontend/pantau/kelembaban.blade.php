@extends('templates.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Kelembaban Tanah</h1>

        <!-- Kelembaban Tanah Saat Ini -->
        <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Kelembaban Tanah Hari Ini</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="text-center bg-gray-100 dark:bg-gray-800 rounded-lg p-4">
                        <h3 class="font-semibold text-lg text-gray-700 dark:text-white mb-2">Area {{ $i }}</h3>
                        <p class="text-3xl font-bold text-accent">{{ rand(30, 80) }}%</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">0%</span>
                            <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(30, 80) }}%"></div>
                            </div>
                            <span class="text-sm text-gray-600 dark:text-gray-400">100%</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Prakiraan Kelembaban Minggu Ini -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Prakiraan Kelembaban Tanah Minggu Ini</h2>
            <div class="grid grid-cols-7 gap-4">
                @foreach(['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $day }}</div>
                        <div class="mt-1 text-lg font-semibold text-accent">
                            {{ rand(30, 80) }}%
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Sensor Status Kelembaban -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Sensor Status Kelembaban Tanah</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-4 text-center">
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">Sensor {{ $i }}</h3>
                        <div class="text-2xl font-bold text-accent">
                            {{ rand(30, 80) }}%
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                            @if(rand(0, 1))
                                <span class="text-green-500">● Aktif</span>
                            @else
                                <span class="text-red-500">● Tidak Aktif</span>
                            @endif
                        </p>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Pembacaan Kelembaban Tanah Terakhir -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Pembacaan Kelembaban Tanah Terakhir</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="py-2 px-4 border-b text-left text-gray-700 dark:text-gray-300">Waktu</th>
                            <th class="py-2 px-4 border-b text-left text-gray-700 dark:text-gray-300">Sensor</th>
                            <th class="py-2 px-4 border-b text-left text-gray-700 dark:text-gray-300">Kelembaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="py-2 px-4 text-gray-800 dark:text-gray-300">{{ now()->subHours($i)->format('H:i') }}</td>
                                <td class="py-2 px-4 text-gray-800 dark:text-gray-300">Sensor {{ rand(1, 4) }}</td>
                                <td class="py-2 px-4 text-accent">{{ rand(30, 80) }}%</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
