@include('frontend.layouts.header')

    <x-navbar />

    <main class="container mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">AgriNews</h1>
            <p class="text-xl text-gray-600">Your Source for Agricultural Insights</p>
        </header>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $news = [
                    [
                        'id' => 1,
                        'title' => 'Teknologi Terbaru dalam Pertanian Modern',
                        'excerpt' => 'Pertanian modern semakin maju dengan penerapan teknologi terbaru seperti drone dan sistem irigasi otomatis...',
                        'image' => 'https://picsum.photos/id/1011/400/300',
                        'date' => '2024-09-20',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Cara Meningkatkan Produktivitas Lahan Pertanian',
                        'excerpt' => 'Dengan teknik pemupukan yang tepat, Anda dapat meningkatkan produktivitas lahan hingga dua kali lipat...',
                        'image' => 'https://picsum.photos/id/1012/400/300',
                        'date' => '2024-09-19',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Manfaat Penggunaan Pupuk Organik',
                        'excerpt' => 'Penggunaan pupuk organik dapat membantu menjaga kesuburan tanah secara alami tanpa merusak ekosistem...',
                        'image' => 'https://picsum.photos/id/1013/400/300',
                        'date' => '2024-09-18',
                    ],
                    [
                        'id' => 4,
                        'title' => 'Panduan Menanam Padi di Musim Kemarau',
                        'excerpt' => 'Menanam padi di musim kemarau memerlukan teknik khusus untuk mempertahankan kadar air pada tanah...',
                        'image' => 'https://picsum.photos/id/1014/400/300',
                        'date' => '2024-09-17',
                    ],
                    [
                        'id' => 5,
                        'title' => 'Keuntungan Sistem Pertanian Hidroponik',
                        'excerpt' => 'Hidroponik menjadi salah satu metode pertanian yang hemat lahan dan air, cocok untuk perkotaan...',
                        'image' => 'https://picsum.photos/id/1015/400/300',
                        'date' => '2024-09-16',
                    ],
                    [
                        'id' => 6,
                        'title' => 'Inovasi Pertanian Berkelanjutan untuk Masa Depan',
                        'excerpt' => 'Pertanian berkelanjutan semakin penting untuk menghadapi perubahan iklim dan menjaga ketersediaan pangan...',
                        'image' => 'https://picsum.photos/id/1016/400/300',
                        'date' => '2024-09-15',
                    ],
                    [
                        'id' => 7,
                        'title' => 'Mengelola Hama Tanpa Pestisida Kimia',
                        'excerpt' => 'Pengendalian hama secara alami kini menjadi tren dalam pertanian organik, meminimalisir penggunaan bahan kimia...',
                        'image' => 'https://picsum.photos/id/1017/400/300',
                        'date' => '2024-09-14',
                    ],
                    [
                        'id' => 8,
                        'title' => 'Cara Efektif Menghemat Air untuk Pertanian',
                        'excerpt' => 'Di tengah krisis air global, mengelola air dengan bijak menjadi kunci keberlanjutan pertanian...',
                        'image' => 'https://picsum.photos/id/1018/400/300',
                        'date' => '2024-09-13',
                    ],
                    [
                        'id' => 9,
                        'title' => 'Diversifikasi Tanaman untuk Meningkatkan Keuntungan',
                        'excerpt' => 'Diversifikasi tanaman adalah strategi penting untuk meningkatkan pendapatan petani dan menjaga keberlanjutan tanah...',
                        'image' => 'https://picsum.photos/id/1019/400/300',
                        'date' => '2024-09-12',
                    ],
                    [
                        'id' => 10,
                        'title' => 'Pertanian Cerdas dengan IoT dan AI',
                        'excerpt' => 'Penggunaan IoT dan AI dalam pertanian memungkinkan pemantauan tanaman secara real-time untuk meningkatkan hasil panen...',
                        'image' => 'https://picsum.photos/id/1020/400/300',
                        'date' => '2024-09-11',
                    ],
                    [
                        'id' => 11,
                        'title' => 'Mengenal Teknologi Penyiraman Otomatis',
                        'excerpt' => 'Sistem penyiraman otomatis memudahkan petani dalam menjaga kelembaban tanah, terutama di musim kemarau...',
                        'image' => 'https://picsum.photos/id/1021/400/300',
                        'date' => '2024-09-10',
                    ],
                    [
                        'id' => 12,
                        'title' => 'Pentingnya Rotasi Tanaman untuk Kesuburan Tanah',
                        'excerpt' => 'Rotasi tanaman membantu menjaga kesuburan tanah dan mengurangi risiko serangan hama yang berulang...',
                        'image' => 'https://picsum.photos/id/1022/400/300',
                        'date' => '2024-09-09',
                    ],
                    [
                        'id' => 13,
                        'title' => 'Potensi Pasar Ekspor Produk Pertanian Indonesia',
                        'excerpt' => 'Produk pertanian Indonesia memiliki potensi besar di pasar internasional, terutama komoditas unggulan seperti kopi dan kakao...',
                        'image' => 'https://picsum.photos/id/1023/400/300',
                        'date' => '2024-09-08',
                    ],
                    [
                        'id' => 14,
                        'title' => 'Cara Menghadapi Perubahan Iklim dalam Pertanian',
                        'excerpt' => 'Perubahan iklim menjadi tantangan utama bagi petani, tetapi ada beberapa langkah adaptasi yang bisa diambil...',
                        'image' => 'https://picsum.photos/id/1024/400/300',
                        'date' => '2024-09-07',
                    ],
                    [
                        'id' => 15,
                        'title' => 'Inovasi Benih Unggul untuk Meningkatkan Hasil Panen',
                        'excerpt' => 'Pengembangan benih unggul sangat penting untuk meningkatkan kualitas dan kuantitas hasil panen petani...',
                        'image' => 'https://picsum.photos/id/1025/400/300',
                        'date' => '2024-09-06',
                    ],
                    [
                        'id' => 16,
                        'title' => 'Pentingnya Pemberdayaan Petani Lokal',
                        'excerpt' => 'Pemberdayaan petani lokal adalah kunci untuk mencapai kemandirian pangan dan meningkatkan kesejahteraan petani...',
                        'image' => 'https://picsum.photos/id/1026/400/300',
                        'date' => '2024-09-05',
                    ],
                    [
                        'id' => 17,
                        'title' => 'Perkembangan Teknologi Pertanian di Indonesia',
                        'excerpt' => 'Indonesia terus berinovasi dalam sektor pertanian dengan teknologi yang memudahkan proses penanaman hingga panen...',
                        'image' => 'https://picsum.photos/id/1027/400/300',
                        'date' => '2024-09-04',
                    ],
                    [
                        'id' => 18,
                        'title' => 'Mengoptimalkan Lahan Sempit untuk Pertanian Perkotaan',
                        'excerpt' => 'Dengan pertanian vertikal dan hidroponik, lahan sempit di perkotaan dapat dimanfaatkan untuk produksi pangan...',
                        'image' => 'https://picsum.photos/id/1028/400/300',
                        'date' => '2024-09-03',
                    ],
                    [
                        'id' => 19,
                        'title' => 'Peluang Bisnis Pertanian Organik',
                        'excerpt' => 'Pertanian organik menawarkan peluang bisnis yang besar seiring meningkatnya permintaan pasar akan produk yang sehat...',
                        'image' => 'https://picsum.photos/id/1029/400/300',
                        'date' => '2024-09-02',
                    ],
                    [
                        'id' => 20,
                        'title' => 'Kiat Sukses Menjalankan Usaha Pertanian Kecil',
                        'excerpt' => 'Usaha pertanian skala kecil bisa sukses dengan manajemen yang baik, inovasi, dan penerapan teknologi modern...',
                        'image' => 'https://picsum.photos/id/1030/400/300',
                        'date' => '2024-09-01',
                    ],
                ];

            @endphp
            @foreach($news as $item)
                <article class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $item['title'] }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item['excerpt'], 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $item['date'] }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>

        <div class="mt-12 text-center">
            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                View All News
            </a>
        </div>
    </main>

    <footer class="bg-gray-100 mt-16 py-8">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; 2023 AgriNews. All rights reserved.</p>
        </div>
    </footer>
@include('frontend.layouts.footer')

