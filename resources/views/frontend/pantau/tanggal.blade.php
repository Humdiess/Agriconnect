@extends('templates.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pemantauan Tanaman Tebu</h1>

        <!-- Tanggal Tanam dan Tanggal Panen -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tanggal Tanam -->
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Tanggal Tanam</h2>
                <p class="text-3xl font-bold text-accent">{{ date('d M Y') }}</p>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Usia tanaman: {{ rand(30, 120) }} hari</p>
            </div>

            <!-- Tanggal Panen (Rekomendasi AI) -->
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Perkiraan Tanggal Panen (AI)</h2>
                <p class="text-3xl font-bold text-accent">{{ date('d M Y', strtotime('+'.rand(180, 360).' days')) }}</p>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Estimasi hasil: {{ rand(70, 100) }} ton/ha</p>
            </div>
        </div>

        <!-- Perkembangan Tanaman -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Perkembangan Tanaman</h2>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">Benih</span>
                <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                    <div class="bg-accent h-2.5 rounded-full" style="width: {{ rand(60, 90) }}%"></div>
                </div>
                <span class="text-sm text-gray-600 dark:text-gray-400">Siap Panen</span>
            </div>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Status: {{ ['Pertumbuhan Awal', 'Pertumbuhan Vegetatif', 'Pemanjangan Batang', 'Pemasakan'][rand(0, 3)] }}</p>
        </div>

        <!-- Rekomendasi AI -->
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Rekomendasi AI</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach(['Pemupukan', 'Pengairan', 'Pengendalian Hama'] as $activity)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $activity }}</div>
                        <div class="mt-1 text-lg font-semibold text-accent">
                            {{ date('d M Y', strtotime('+'.rand(1, 30).' days')) }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
