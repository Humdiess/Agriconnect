@include('auth.layouts.header')

<section class="login flex flex-col lg:flex-row h-screen bg-white">
    <!-- Left Side: Login Form -->
    <div class="login-left w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="max-w-md w-full mx-auto">
            <!-- Logo Section -->
            <div class="mb-6 flex items-center">
                <h1 class="text-xl lg:text-3xl font-semibold border-r-2 pr-3">Login</h1>
                <img src="{{ asset('img/logo/logo-light.png') }}" alt="Logo" class="h-16"> <!-- Update the path to your logo -->
            </div>

            <form action="/login" method="POST" class="space-y-6">
                @csrf
                <div class="relative">
                    <div class="relative">
                        <input type="text" name="username_or_email" value="{{ old('username_or_email') }}" required
                            placeholder="Masukkan username / email"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('username_or_email') bg-red-100 @enderror focus:border-black focus:outline-none pl-12">
                        <i class="fas fa-user text-gray-500 absolute left-5 top-1/2 transform -translate-y-1/2"></i>
                    </div>
                    @error('username_or_email')
                        <i class="fas fa-exclamation-circle text-red-500 absolute right-3 top-12"></i>
                    @enderror
                </div>

                <div class="relative">
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            placeholder="Masukkan kata sandi"
                            class="w-full px-4 py-3 rounded-2xl bg-gray-100 @error('password') bg-red-100 @enderror focus:border-black focus:outline-none pl-12">
                        <i class="fas fa-lock text-gray-500 absolute left-5 top-1/2 transform -translate-y-1/2"></i>
                        <button type="button" id="togglePassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-700">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <i class="fas fa-exclamation-circle text-red-500 absolute right-10 top-12"></i>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-[#5DBB63] text-white py-3 px-4 rounded-2xl font-semibold hover:bg-[#27a002] transition-transform transform hover:scale-105">
                        Login
                    </button>
                </div>
            </form>

            <div class="text-center mt-6">
                <span>Don't have an account?</span>
                <a href="{{ route('auth.addUser') }}" class="ml-2 text-black font-bold hover:underline">
                    Sign Up
                </a>
            </div>
        </div>
    </div>

    <!-- Right Side: Image Section -->
    <div class="login-right w-full lg:w-1/2 h-full bg-cover bg-center lg:pe-4 lg:py-4">
        <img id="login-image" src="https://images.unsplash.com/photo-1624033441874-82f56d494d83?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-full h-full object-cover rounded-2xl"
            alt="login image">
    </div>
</section>

<script>

</script>

@include('auth.layouts.footer')
