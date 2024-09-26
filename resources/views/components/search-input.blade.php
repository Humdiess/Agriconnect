@props(['placeholder' => 'Cari informasi pertanian...'])

<form action="#" method="GET" class="mt-6 max-w-md mx-auto">
    <div class="relative">
        <input
            type="text"
            name="query"
            placeholder="{{ $placeholder }}"
            class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent bg-white dark:bg-gray-800 dark:text-white dark:border-gray-700 dark:focus:ring-accent"
        >
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
            </svg>
        </div>
        <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-4 text-white bg-accent hover:bg-accent focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 rounded-r-full">
            Cari
        </button>
    </div>
</form>
