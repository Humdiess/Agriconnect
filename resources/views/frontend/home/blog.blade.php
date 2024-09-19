@extends('templates.main')

@section('content')
    @include('frontend.components.navbar')
    <x-navbar />
    <div class="bg-white dark:bg-zinc-950 min-h-screen">
        <header class="bg-white dark:bg-zinc-900 shadow">
            <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl ml-8 font-bold text-gray-900 dark:text-white">Berita Seputar Pertanian</h1>
            </div>
        </header>

        <main class="mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $articles = [
                            [
                                'title' => 'Upaya Bersama Dorong Pemuda Turun Bertani di Pangandaran',
                                'excerpt' =>
                                    'Berbagai upaya dilakukan berbagai pihak untuk tetap mempertahankan profesi petani tetap ada. Salah satunya yang dilakukan Jaringan Masyarakat Tani Indonesia (Jamtani).',
                                'image' => 'berita1.jpeg',
                                'link' =>
                                    'https://www.detik.com/jabar/berita/d-7537032/upaya-bersama-dorong-pemuda-turun-bertani-di-pangandaran',
                                'date' => '2024-09-12',
                            ],
                            [
                                'title' => 'Catatan DPRD untuk Pemprov soal Nasib Pertanian di Jawa Barat',
                                'excerpt' =>
                                    'Pemprov Jawa Barat mencatat sejumlah tantangan yang dihadapi dalam sektor pertanian, terutama kesejahteraan petani dan buruh tani. Hal ini turut disorot oleh Sekretaris Komisi 2 DPRD Jawa Barat, R Yunandar Rukhiadi Eka Perwira.',
                                'image' => 'berita2.jpeg',
                                'link' =>
                                    'https://www.detik.com/jabar/bisnis/d-7492897/catatan-dprd-untuk-pemprov-soal-nasib-pertanian-di-jawa-barat',
                                'date' => '2024-08-16',
                            ],
                            [
                                'title' => 'Masalah Petani RI, Lahan Sawah Berkurang & Teknologi Rendah!',
                                'excerpt' =>
                                    'Ketua Gabungan Asosiasi Petani Perkebunan Indonesia (Gapperindo), Agus Pakpahan menyebutkan konsistensi kebijakan dan peningkatan teknologi pertanian sebagai kunci bagi peningkatan produksi pangan di Indonesia termasuk gula dan beras.',
                                'image' => 'berita3.png',
                                'link' =>
                                    'https://www.cnbcindonesia.com/news/20230825140559-8-466171/masalah-petani-ri-lahan-sawah-berkurang-teknologi-rendah',
                                'date' => '2023-08-27',
                            ],
                            [
                                'title' => 'Payah! Level Ketahanan Pangan RI Kalah dari Singapura',
                                'excerpt' =>
                                    'Indonesia masih payah untuk urusan ketahanan pangan. Bahkan dengan klaim sebagai negara agraris, level ketahanan pangan Indonesia kalah dari Singapura.',
                                'image' => 'berita4.jpeg',
                                'link' =>
                                    'https://www.cnbcindonesia.com/news/20240814151037-4-563046/payah-level-ketahanan-pangan-ri-kalah-dari-singapura',
                                'date' => '2024-08-04',
                            ],
                            [
                                'title' => 'Produksi Beras Turun, Ada Kesalahan Pengelolaan Sistem Pertanian?',
                                'excerpt' =>
                                    'Anggota Komisi IV DPR RI, Firman Soebagyo mengungkapkan berbagai permasalahan yang menyebabkan terus turunnya produksi beras Nasional.',
                                'image' => 'berita5.png',
                                'link' =>
                                    'https://www.cnbcindonesia.com/news/20240530100441-8-542365/produksi-beras-turun-ada-kesalahan-pengelolaan-sistem-pertanian',
                                'date' => '2024-06-02',
                            ],
                            [
                                'title' => 'Potret Pertanian RI 10 Tahun Terakhir, Minim Teknologi!',
                                'excerpt' =>
                                    'Hasil Sensus Pertanian 2023 Badan Pusat Statistik (BPS) menunjukkan kondisi pertanian di Indonesia tidak banyak berubah selama 10 tahun terakhir. Mulai dari mayoritas didominasi tenaga kerja tua, juga masih minim menggunakan teknologi.',
                                'image' => 'berita6.jpeg',
                                'date' => '2023-12-04',
                                'link' =>
                                    'https://www.cnbcindonesia.com/news/20231204120654-4-494316/potret-pertanian-ri-10-tahun-terakhir-minim-teknologi',
                            ],
                        ];
                    @endphp

                    @foreach ($articles as $article)
                        <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img class="h-48 w-full object-cover" src="{{ asset('img/blogs/' . $article['image']) }}"
                                alt="{{ $article['title'] }}">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $article['title'] }}
                                </h2>
                                <p class="text-gray-600 dark:text-gray-200 text-sm mb-4">
                                    {{ date('F j, Y', strtotime($article['date'])) }}</p>
                                <p class="text-gray-600 dark:text-gray-200 mb-4 line-clamp-3">{{ $article['excerpt'] }}</p>
                                <a href="{{ $article['link'] }}" target="_blank"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Read More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </div>
@endsection
