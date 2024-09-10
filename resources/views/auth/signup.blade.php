@include('frontend.layouts.header')

<section class="signup">
    <div class="flex flex-col h-svh items-center justify-center">
        <div class="title-signup">
            <div class="logo">
                <a class="text-2xl font-bold w-6" href="#">
                    <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="">
                </a>
            </div>
            <h1 class="text-5xl text-green-500 font-semibold my-4">Halaman Sign Up</h1>
        </div>
        <div class="form-signup mx-auto w-full max-w-xl ">
            <form action="/sign-up" method="POST">
                @csrf

                <!-- Nama Lengkap -->
                <div class="flex flex-col w-full my-4">
                    <label for="name" class="text-xl font-semibold">Nama Lengkap :</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('name') border-red-500 @enderror"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Username -->
                <div class="flex flex-col w-full my-4">
                    <label for="username" class="text-xl font-semibold">Username :</label>
                    <input type="text" name="username" value="{{ old('username') }}"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('username') border-red-500 @enderror"
                        required>
                    @error('username')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col w-full my-4">
                    <label for="email" class="text-xl font-semibold">Email :</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('email') border-red-500 @enderror"
                        required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="flex flex-col w-full my-4">
                    <label for="gender" class="text-xl font-semibold">Jenis Kelamin :</label>
                    <select name="gender"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('gender') border-red-500 @enderror"
                        required>
                        <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : 'selected' }}>Laki-laki
                        </option>
                        <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="flex flex-col w-full my-4">
                    <label for="password" class="text-xl font-semibold">Password :</label>
                    <input type="password" name="password"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('password') border-red-500 @enderror"
                        required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="flex flex-col w-full my-4">
                    <label for="password_confirmation" class="text-xl font-semibold">Confirm Password :</label>
                    <input type="password" name="password_confirmation"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('password_confirmation') border-red-500 @enderror"
                        required>
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Sudah Punya Akun -->
                <div class="my-5 mx-auto text-center">
                    <span class="font-medium text-lg">Sudah Punya Akun ?
                        <a href="/login" class="text-hijau1 hover:opacity-80">Klik untuk Login</a>
                    </span>
                </div>

                <!-- Tombol Register -->
                <div class="mx-auto text-center">
                    <button type="submit"
                        class="text-white py-1 px-4 text-xl rounded-md bg-[#5DBB63]">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')
