@include('auth.layouts.header')
<div
    class="min-h-screen bg-white/80 dark:bg-ireng/30 backdrop-blur-md flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
    <div
        class="max-w-md w-full space-y-8 bg-white dark:bg-zinc-900 p-12 rounded-xl shadow-md border border-gray-200 dark:border-gray-700">
        <a class="flex items-center justify-center w-8 h-8 mr-4 bg-accent text-white dark:text-black rounded-full"
            href="/">
            <i class="fas fa-chevron-left"></i>
        </a>
        <h1 class="text-2xl font-semibold mb-6 text-center dark:text-white">Daftarkan Diri Anda Menjadi Seorang Petani
        </h1>
        <form action="" method="POST">
            @csrf

            <!-- Input Nomer Handphone -->
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-white">Nomer
                    Handphone</label>
                <input type="text" name="phone_number" id="phone_number"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                <!-- Pesan Error -->
                @error('phone_number')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Alamat -->
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-white">Alamat</label>
                <textarea name="address" id="address"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required></textarea>
                <!-- Pesan Error -->
                @error('address')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Asal Kota -->
            <div class="mb-4">
                <label for="city" class="block text-sm font-medium text-gray-700 dark:text-white">Asal Kota</label>
                <input type="text" name="city" id="city"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                <!-- Pesan Error -->
                @error('city')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Checkbox Validasi Data -->
            <div class="mb-6">
                <label for="valid" class="flex items-center">
                    <input type="checkbox" name="valid" id="valid"
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" required>
                    <span class="ml-2 text-sm text-gray-700 dark:text-white">Apakah semua data di atas valid?</span>
                </label>
                <!-- Pesan Error -->
                @error('valid')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white p-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@include('auth.layouts.footer')
