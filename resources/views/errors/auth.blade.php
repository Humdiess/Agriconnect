@extends('frontend.layouts.main')

@section('content')
    <div class="min-h-screen bg-white/80 dark:bg-ireng/30 backdrop-blur-md flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-zinc-900 p-12 rounded-xl shadow-md border border-gray-200 dark:border-gray-700">
            <div class="mb-4">
                <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900 dark:text-white">
                    Login Diperlukan
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                    Untuk mengakses halaman yang Anda tuju, Anda perlu masuk terlebih dahulu.
                </p>
            </div>
            <div class="flex flex-col space-y-4">
                <a href="{{ route('auth.login') }}"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-accent hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    Login Sekarang
                </a>
                <a href="{{ route('home') }}"
                    class="w-full flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
