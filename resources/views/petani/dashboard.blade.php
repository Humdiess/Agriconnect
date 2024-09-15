@extends('mylayout.main')

@section('content')
    <main class="flex">
        <!-- Sidebar Section -->
        <section class="sidebar-wrapper w-[20rem] px-8 py-4 min-h-svh bg-[#F9F9F9]">
            <div class="sidebar-header flex">
                <img src="/img/logo/header-logo.png" class="w-20" alt="">
                <div class="ml-4">
                    <img src="/img/logo/logo-light.png" class="w-32" alt="">
                    <h2 class="font-semibold">Dashboard Tani</h2>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="sidebar-nav flex flex-col gap-2">
                <a href="/"
                    class="bg-white text-black rounded-md w-full px-3 py-1 hover:bg-accent hover:text-white">Kembali Ke
                    Beranda</a>
                <a href="#" class="bg-accent text-white rounded-md w-full px-3 py-1">Dashboard Tani</a>
                <a href="#"
                    class="bg-white text-black rounded-md w-full px-3 py-1 hover:bg-accent hover:text-white">Pantau AI</a>
                <a href="/product"
                    class="bg-white text-black rounded-md w-full px-3 py-1 hover:bg-accent hover:text-white">Toko</a>
            </div>
        </section>
        <!-- Dashboard Section -->
        <section class="dashboard-wrapper px-16 py-8">
            <div class="dashboard-header mb-2">
                <h1 class="text-4xl font-bold">Dashboard</h1>
            </div>
            <hr>
            <div class="dashboard-content my-2">
                {{-- Fitur Pemantau --}}
                <div class="fitur-pemantau-wrapper my-6 flex flex-wrap gap-4">
                    <div class="card-fitur bg-slate-200 w-40 h-40">
                    </div>
                    <div class="card-fitur bg-slate-200 w-40 h-40">
                    </div>
                    <div class="card-fitur bg-slate-200 w-40 h-40">
                    </div>
                    <div class="card-fitur bg-slate-200 w-40 h-40">
                    </div>
                </div>
                {{-- Hasil Analisi --}}
                <div class="hasil-analisis-wrapper my-6 flex flex-wrap gap-4">
                    <div class="card-fitur bg-slate-200 w-[50rem] h-40">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
