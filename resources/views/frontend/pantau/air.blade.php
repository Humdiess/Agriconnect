@include('templates.main')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Kualitas Air</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">pH Air</h2>
                <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">7.2</p>
            </div>
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Kekeruhan</h2>
                <p class="text-3xl font-bold text-green-600 dark:text-green-400">5 NTU</p>
            </div>
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Oksigen Terlarut</h2>
                <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">8.5 mg/L</p>
            </div>
        </div>
    </div>
</div>
@endsection

