@include('templates.header')

<div class="min-h-screen bg-gray-100 dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Kelembaban Tanah</h1>
        <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Kelembaban Tanah</h2>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">65%</p>
            <div class="mt-4 bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                <div class="bg-blue-600 dark:bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
