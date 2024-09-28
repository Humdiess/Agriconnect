@extends('templates.main')

@section('content')
<div class="min-h-screen ml-64 w-full bg-gray-100 dark:bg-ireng p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pantau Suhu Udara & Tanah</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Suhu Udara</h2>
                <p class="text-3xl font-bold text-red-600 dark:text-red-400">28°C</p>
            </div>
            <div class="bg-white dark:bg-transparent border border-gray-200 dark:border-zinc-600 rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Suhu Tanah</h2>
                <p class="text-3xl font-bold text-orange-600 dark:text-orange-400">25°C</p>
            </div>
        </div>
    </div>
</div>
@endsection
