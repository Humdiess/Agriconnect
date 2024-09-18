@include('auth.layouts.header')

<section class="signup flex flex-col lg:flex-row h-screen bg-white dark:bg-zinc-950">
    <!-- Left Side: Registration Form -->
    <div class="signup-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12 relative">
        <a href="/"
            class="mt-5 mx-10 sm:mt-0 sm:mx-0 sm:absolute top-5 right-5 bg-accent text-white font-medium px-2 py-1 rounded-md"><i
                class="fa-solid fa-arrow-left"></i> Kembali</a>
        <div class="max-w-md w-full mx-auto">
            <!-- Logo Section -->
            <div class="mb-6 flex items-center">
                <h1 class="text-xl lg:text-3xl font-semibold border-r-2 pr-3 text-black dark:text-white">Daftar</h1>
                <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo" class="h-16">
                <!-- Update the path to your logo -->
            </div>

            <form action="/sign-up" method="POST" class="space-y-6">
                @csrf

                <!-- Grid for Input Fields -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div class="relative">
                        <label for="name"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Nama
                            Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 dark:text-white @error('name') bg-red-100 dark:bg-red-300 @enderror focus:border-black dark:focus:border-white focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                        @error('name')
                            <p class="text-red-500 dark:text-red-400 text-sm mt-2">Nama lengkap tidak valid.</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div class="relative">
                        <label for="username"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Nama
                            Pengguna</label>
                        <input type="text" name="username" value="{{ old('username') }}" required
                            placeholder="Masukkan nama pengguna"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 dark:text-white @error('username') bg-red-100 dark:bg-red-300 @enderror focus:border-black dark:focus:border-white focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                        @error('username')
                            <p class="text-red-500 dark:text-red-400 text-sm mt-2">Nama pengguna tidak valid.</p>
                        @enderror
                    </div>
                </div>

                <!-- Email: full width input -->
                <div class="relative">
                    <label for="email"
                        class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        placeholder="Masukkan email"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 dark:text-white @error('email') bg-red-100 dark:bg-red-300 @enderror focus:border-black dark:focus:border-white focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                    @error('email')
                        <p class="text-red-500 dark:text-red-400 text-sm mt-2">Email tidak valid.</p>
                    @enderror
                </div>

                <!-- Grid for Password Fields -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Password -->
                    <div class="relative">
                        <label for="password"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Kata
                            Sandi</label>
                        <input type="password" id="password" name="password" required placeholder="Masukkan kata sandi"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 dark:text-white @error('password') bg-red-100 dark:bg-red-300 @enderror focus:border-black dark:focus:border-white focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                        @error('password')
                            <p class="text-red-500 dark:text-red-400 text-sm mt-2">Kata sandi tidak valid.</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="relative">
                        <label for="password_confirmation"
                            class="block text-sm lg:text-base font-medium text-gray-700 dark:text-gray-300 mb-2">Konfirmasi
                            Kata Sandi</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Konfirmasi kata sandi"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-zinc-800 dark:text-white @error('password_confirmation') bg-red-100 dark:bg-red-300 @enderror focus:border-black dark:focus:border-white focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200 ease-in-out">
                        @error('password_confirmation')
                            <p class="text-red-500 dark:text-red-400 text-sm mt-2">Kata sandi tidak cocok.</p>
                        @enderror
                    </div>
                </div>

                <!-- Show/Hide Password Checkbox -->
                <div class="flex items-center">
                    <input type="checkbox" id="togglePasswordVisibility" onclick="togglePasswordFields()"
                        class="mr-2">
                    <label for="togglePasswordVisibility"
                        class="text-sm lg:text-base text-gray-700 dark:text-gray-300">Tampilkan kata sandi</label>
                </div>

                <!-- Already have an account -->
                <div class="text-center mt-6">
                    <span class="text-black dark:text-gray-300">Sudah punya akun?</span>
                    <a href="/login" class="ml-2 text-black dark:text-white font-bold hover:underline">
                        Masuk
                    </a>
                </div>

                <!-- Register Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#5DBB63] text-white py-3 px-4 rounded-lg font-semibold hover:bg-[#27a002] transition-transform transform hover:scale-105">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Side: Image Section -->
    <div class="signup-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
        <img src="https://images.unsplash.com/photo-1624033441874-82f56d494d83?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-full h-full object-cover rounded-xl" alt="Gambar">
    </div>

    <button id="theme-toggle"
        class="ml-2 p-2 rounded-full dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 dark:text-white transition-colors">
        <i id="theme-icon" class="fas fa-moon"></i>
    </button>
</section>

<script>
    function togglePasswordFields() {
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('password_confirmation');
        const checkbox = document.getElementById('togglePasswordVisibility');

        // Toggle between password and text input type
        if (checkbox.checked) {
            passwordField.type = 'text';
            confirmPasswordField.type = 'text';
        } else {
            passwordField.type = 'password';
            confirmPasswordField.type = 'password';
        }
    }
</script>

@include('auth.layouts.footer')
