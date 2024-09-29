@include('auth.layouts.header')
<div class="min-h-screen bg-ireng/30 dark:bg-ireng flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-6 bg-white dark:bg-ireng p-8 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center justify-center w-10 h-10 bg-accent text-white rounded-full hover:bg-accent/80 transition-colors duration-200" aria-label="Kembali ke beranda">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Daftar Sebagai Petani</h1>
        </div>

        <form action="#" method="POST" class="mt-4 space-y-6">
            @csrf

            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Handphone</label>
                <input id="phone_number" name="phone_number" type="tel" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm leading-5 bg-white dark:bg-zinc-700 placeholder-gray-400 focus:outline-none focus:ring-accent focus:border-accent sm:text-sm dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="08123456789" value="{{ old('phone_number') }}" aria-describedby="phone-description">
                @error('phone_number')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                <textarea id="address" name="address" rows="2" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-accent focus:border-accent sm:text-sm dark:bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Alamat lengkap Anda">{{ old('address') }}</textarea>
                @error('address')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input id="valid" name="valid" type="checkbox" required class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded dark:border-gray-600 dark:bg-zinc-700">
                <label for="valid" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Data di atas valid</label>
                @error('valid')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-accent hover:bg-accent/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent transition-colors duration-200">Daftar Sekarang</button>
            </div>
        </form>
    </div>
</div>
@include('auth.layouts.footer')
