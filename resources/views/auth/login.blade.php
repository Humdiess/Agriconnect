@include('auth.layouts.header')

<section class="login">
    <div class="flex flex-col h-svh items-center justify-center">
        <div class="title-login">
            <div class="logo">
                <a class="text-2xl font-bold w-6" href="#">
                    <img class="w-28" src="{{ asset('img/logo/logo-light.png') }}" alt="">
                </a>
            </div>
            <h1 class="text-5xl text-green-500 font-semibold my-4">Halaman Login</h1>

            <!-- Flash Message for Success -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-16 py-3 rounded relative max-w-xl mx-auto my-4"
                    role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 11-1.414-1.414L8.586 10 5.652 7.065a1 1 0 111.414-1.414L10 8.586l2.934-2.935a1 1 0 111.414 1.414L11.414 10l2.934 2.935a1 1 0 010 1.414z" />
                        </svg>
                    </span>
                </div>
            @endif

            <!-- Flash Message for Errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-16 py-3 rounded relative max-w-xl mx-auto my-4"
                    role="alert">
                    <strong class="font-bold">Ada Kesalahan!</strong>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 11-1.414-1.414L8.586 10 5.652 7.065a1 1 0 111.414-1.414L10 8.586l2.934-2.935a1 1 0 111.414 1.414L11.414 10l2.934 2.935a1 1 0 010 1.414z" />
                        </svg>
                    </span>
                </div>
            @endif
        </div>

        <div class="form-login mx-auto w-full max-w-xl ">
            <form action="/login" method="POST">
                @csrf
                <div class="flex flex-col w-full my-4">
                    <label for="username_or_email" class="text-xl font-semibold">Username atau Email :</label>
                    <input type="text" name="username_or_email" value="{{ old('username_or_email') }}"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('username_or_email') border-red-500 @enderror"
                        required>
                    @error('username_or_email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full my-4">
                    <label for="password" class="text-xl font-semibold">Password :</label>
                    <input type="password" name="password"
                        class="rounded-md px-2 py-4 border-4 border-[#5DBB63] @error('password') border-red-500 @enderror"
                        required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-5 mx-auto text-center">
                    <span class="font-medium text-lg">Belum Punya Akun ?
                        <a href="/sign-up" class="text-hijau1 hover:opacity-80">Klik untuk Daftar</a>
                    </span>
                </div>

                <div class="mx-auto text-center">
                    <button type="submit" class="text-white py-1 px-4 text-xl rounded-md bg-[#5DBB63]">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('auth.layouts.footer')
