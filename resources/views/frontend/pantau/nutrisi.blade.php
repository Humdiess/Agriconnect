@include('templates.header')

<div class="min-h-screen bg-gray-100 dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Nutrisi Tanah</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Nitrogen (N)</h2>
                <p class="text-3xl font-bold text-green-600 dark:text-green-400">45 mg/kg</p>
            </div>
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Fosfor (P)</h2>
                <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">30 mg/kg</p>
            </div>
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Kalium (K)</h2>
                <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">200 mg/kg</p>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
