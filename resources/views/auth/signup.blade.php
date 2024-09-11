@include('auth.layouts.header')

<section class="signup flex flex-col lg:flex-row h-screen bg-white">
    <!-- Left Side: Registration Form -->
    <div class="signup-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="max-w-md w-full mx-auto">
            <!-- Logo Section -->
            <div class="mb-6 flex items-center">
                <h1 class="text-xl lg:text-3xl font-semibold border-r-2 pr-3">Sign Up</h1>
                <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo" class="h-16"> <!-- Update the path to your logo -->
            </div>

            <form action="/sign-up" method="POST" class="space-y-6">
                @csrf

                <!-- Grid for Input Fields -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div class="relative">
                        <label for="name" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            placeholder="Enter your full name"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('name') bg-red-100 @enderror focus:border-black focus:outline-none">
                        @error('name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div class="relative">
                        <label for="username" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Username</label>
                        <input type="text" name="username" value="{{ old('username') }}" required
                            placeholder="Enter your username"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('username') bg-red-100 @enderror focus:border-black focus:outline-none">
                        @error('username')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="relative">
                        <label for="email" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="Enter your email"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('email') bg-red-100 @enderror focus:border-black focus:outline-none">
                        @error('email')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div class="relative">
                        <label for="gender" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Gender</label>
                        <select name="gender" required
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('gender') bg-red-100 @enderror focus:border-black focus:outline-none">
                            <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="relative">
                        <label for="password" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" required
                            placeholder="Enter your password"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('password') bg-red-100 @enderror focus:border-black focus:outline-none">
                        @error('password')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="relative">
                        <label for="password_confirmation" class="block text-sm lg:text-base font-medium text-gray-700 mb-2">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                            placeholder="Confirm your password"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('password_confirmation') bg-red-100 @enderror focus:border-black focus:outline-none">
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Already have an account -->
                <div class="text-center mt-6">
                    <span>Already have an account?</span>
                    <a href="/login" class="ml-2 text-black font-bold hover:underline">
                        Log In
                    </a>
                </div>

                <!-- Register Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#5DBB63] text-white py-3 px-4 rounded-2xl font-semibold hover:bg-[#27a002] transition-transform transform hover:scale-105">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Side: Image Section -->
    <div class="signup-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
        <img src="https://images.unsplash.com/photo-1624033441874-82f56d494d83?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D    " class="w-full h-full object-cover rounded-xl" alt="">
    </div>
</section>

@include('auth.layouts.footer')
