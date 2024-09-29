<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        // product 1
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Tebu Segar Varietas PS 862 (1 KG)',
            'description' => 'Tebu segar untuk bahan baku gula dengan kandungan sukrosa tinggi. Ideal untuk produksi gula pasir dan minuman.',
            'price' => '2500', // Harga per kilo
            'stock' => '500',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/tebusegar.webp', // Sesuaikan dan rapihkan file gambar
            'lokasi' => 'Kediri, Jawa Timur', // Lokasi penjual
            'sertifikasi' => 'Bebas pestisida, diproduksi secara ramah lingkungan', // Sertifikasi
            'pengiriman' => 'Dapat dikirim dalam bentuk utuh atau dipotong, tersedia pengiriman dengan truk atau motor box.', // Info pengiriman
        ]);

        // product 2
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Gula Merah Organik (500g)',
            'description' => 'Gula merah alami yang diproses dari tebu organik, bebas bahan kimia. Cocok untuk minuman tradisional dan pembuatan kue.',
            'price' => '18000',
            'stock' => '300',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/gulamerahorganik.webp',
            'lokasi' => 'Solo, Jawa Tengah',
            'sertifikasi' => 'Sertifikasi organik oleh Sucofindo',
            'pengiriman' => 'JNE, SiCepat, dan GoSend',
        ]);

        // product 3
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Molase Industri (1 Liter)',
            'description' => 'Tetes tebu (molase) berkualitas tinggi untuk bahan baku pakan ternak dan bioetanol. Diproses dari tebu pilihan dengan metode fermentasi modern.',
            'price' => '10000',
            'stock' => '1000',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/molase.webp',
            'lokasi' => 'Pabrik Tebu, Jember, Jawa Timur',
            'sertifikasi' => 'Standar Industri Indonesia (SNI)',
            'pengiriman' => 'Tersedia untuk pembelian dalam jumlah besar dengan pengiriman truk tangki.',
        ]);

        // product 4
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Bioetanol Tebu 99,5% (1 Liter)',
            'description' => 'Bioetanol berkadar tinggi hasil fermentasi tebu. Dapat digunakan sebagai bahan bakar alternatif atau bahan campuran bensin.',
            'price' => '15000',
            'stock' => '2000',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/bioetanol.webp',
            'lokasi' => 'Pabrik Bioetanol, Mojokerto, Jawa Timur',
            'sertifikasi' => 'ISO 9001 dan ISO 14001',
            'pengiriman' => 'Disediakan pengiriman khusus untuk pembelian bulk dengan truk kontainer.',
        ]);

        // product 5
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Pupuk Kompos Ampas Tebu (25 KG)',
            'description' => 'Pupuk kompos alami dari ampas tebu, kaya akan nutrisi organik untuk meningkatkan kesuburan tanah. Cocok untuk pertanian organik.',
            'price' => '35000',
            'stock' => '200',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/pupukampas.webp',
            'lokasi' => 'Surabaya, Jawa Timur',
            'sertifikasi' => 'Produk organik terverifikasi oleh Organik Indonesia',
            'pengiriman' => 'Pengiriman nasional dengan biaya tambahan untuk luar Jawa.',
        ]);

        // product 6
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Gula Cair Tebu (1 Liter)',
            'description' => 'Gula cair dari tebu, siap digunakan untuk industri makanan dan minuman. Lebih mudah larut dibanding gula pasir, cocok untuk produksi skala besar.',
            'price' => '20000',
            'stock' => '800',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/gulacair.webp',
            'lokasi' => 'Sidoarjo, Jawa Timur',
            'pengiriman' => 'Dikirim dalam kemasan jerigen, tersedia opsi pengiriman bulk.',
        ]);

        // product 7
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Pre-Order Tebu Musim Panen 2024 (1 KG)',
            'description' => 'Tebu segar siap panen pada Juni 2024, ideal untuk produksi gula dengan hasil tinggi. Sistem pre-order untuk memastikan pasokan tebu segar sesuai dengan jadwal panen.',
            'price' => '2300',
            'stock' => '0', // Pre-order
            'category' => 'Olahan Tebu',
            'image' => 'tebu/preorderttebu.webp',
            'lokasi' => 'Lamongan, Jawa Timur',
            'sertifikasi' => 'Good Agricultural Practices (GAP)',
            'pengiriman' => 'Pengiriman dijadwalkan berdasarkan kesepakatan pre-order.',
        ]);

        // product 8
        Product::create([
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'Gula Semut Tebu (250g)',
            'description' => 'Gula semut kering dari tebu yang dikristalkan, cocok untuk digunakan dalam minuman atau masakan. Lebih praktis dibandingkan gula merah padat.',
            'price' => '25000',
            'stock' => '600',
            'category' => 'Olahan Tebu',
            'image' => 'tebu/gulasemut.webp',
            'lokasi' => 'Bantul, Yogyakarta',
            'sertifikasi' => '', // Sertifikasi tidak disebutkan
            'pengiriman' => 'Tersedia pengiriman cepat melalui GoSend dan GrabExpress.',
        ]);
    }
}
