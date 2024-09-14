@include('auth.layouts.header')

<section class="login flex flex-col lg:flex-row h-screen bg-white dark:bg-zinc-950">
    <!-- Left Side: Login Form -->
    <div class="login-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="max-w-md w-full mx-auto">
            <!-- Logo Section -->
            <div class="mb-6 flex items-center">
                <h1 class="text-xl lg:text-3xl font-semibold border-r-2 pr-3 text-black dark:text-white">Masuk</h1>
                <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo" class="h-16">
            </div>

            <form action="/login" method="POST" class="space-y-6">
                @csrf

                <!-- Email/Username Input -->
                <div class="relative">
                    <label for="email" class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Email/Username</label>
                    <input type="text" name="username_or_email" value="{{ old('email') }}" required
                        placeholder="Masukkan email atau username"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 text-black dark:text-white @error('email') bg-red-100 dark:bg-red-200 border-red-500 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                    @error('email')
                        <p class="text-red-500 dark:text-red-400 text-sm mt-2">Email atau username tidak valid.</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="relative">
                    <label for="password" class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Kata Sandi</label>
                    <input type="password" name="password" required
                        placeholder="Masukkan kata sandi"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 text-black dark:text-white @error('password') bg-red-100 dark:bg-red-200 border-red-500 @enderror focus:border-black focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                    @error('password')
                        <p class="text-red-500 dark:text-red-400 text-sm mt-2">Kata sandi tidak valid.</p>
                    @enderror
                </div>

                <!-- Show/Hide Password Checkbox -->
                <div class="flex items-center">
                    <input type="checkbox" id="togglePasswordVisibility" onclick="togglePassword()" class="mr-2">
                    <label for="togglePasswordVisibility" class="text-sm lg:text-base text-gray-700 dark:text-gray-300">Tampilkan kata sandi</label>
                </div>

                <!-- Register Link -->
                <div class="text-center mt-6 text-black dark:text-white">
                    <span>Belum punya akun?</span>
                    <a href="/sign-up" class="ml-2 text-black dark:text-green-500 font-bold hover:underline">Daftar</a>
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#5DBB63] dark:bg-[#5DBB63] text-white py-3 px-4 rounded-lg font-semibold hover:bg-[#27a002] transition-transform transform hover:scale-105">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Side: Image Section -->
    <div class="login-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
        <img src="https://images.unsplash.com/photo-1624033441874-82f56d494d83?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover rounded-xl" alt="Gambar">
    </div>

    <!-- Theme Toggler -->
    <button id="theme-toggle" class="ml-2 p-2 rounded-full dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 dark:text-white transition-colors">
        <i id="theme-icon" class="fas fa-moon"></i>
    </button>
</section>

<script>
    function togglePassword() {
        const passwordField = document.querySelector('input[name="password"]');
        const checkbox = document.getElementById('togglePasswordVisibility');
        passwordField.type = checkbox.checked ? 'text' : 'password';
    }
</script>

@include('auth.layouts.footer')
