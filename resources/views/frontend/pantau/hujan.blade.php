@include('templates.header')

<div class="min-h-screen bg-gray-100 dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Curah Hujan</h1>
        <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Curah Hujan Hari Ini</h2>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">25 mm</p>
            <div class="mt-4 flex items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">0 mm</span>
                <div class="flex-grow mx-2 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                    <div class="bg-blue-600 dark:bg-blue-500 h-2.5 rounded-full" style="width: 25%"></div>
                </div>
                <span class="text-sm text-gray-600 dark:text-gray-400">100 mm</span>
            </div>
        </div>
        <div class="mt-6 bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Prakiraan Curah Hujan Minggu Ini</h2>
            <div class="grid grid-cols-7 gap-2">
                @foreach(['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $day }}</div>
                        <div class="mt-1 text-lg font-semibold text-blue-600 dark:text-blue-400">
                            {{ rand(0, 50) }} mm
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
