<p align="center"><a href="https://agriconnect.my.id" target="_blank"><img src="./public/img/logo/app-logo.png" width="400" alt="Agriconnect logo"></a></p>

## Tentang AgriConnect

[AgriConnect](https://agriconnect.my.id) AgriConnect adalah platform inovatif untuk petani tebu di Sidoarjo yang memanfaatkan teknologi IoT dan AI untuk memaksimalkan hasil panen. Kami percaya bahwa teknologi dapat memberikan pengalaman bertani yang lebih efisien dan memberdayakan para petani menuju masa depan yang lebih baik.

Website ini dibangun menggunakan framework Laravel, yang memberikan sintaks ekspresif dan elegan, memudahkan pengembangan aplikasi web yang kokoh dan bertenaga.

### Fitur AgriConnect

- Sistem [IoT dan sensor pintar](https://agriconnect.my.id) untuk monitoring lahan secara real-time.
- Algoritma AI untuk membantu pengambilan keputusan pertanian.
- Penjualan hasil panen langsung ke pasar melalui platform kami.
- Peningkatan produktivitas dengan bantuan teknologi modern.

## Cara Memulai dengan AgriConnect

Untuk mulai menggunakan AgriConnect, kunjungi [agriconnect.my.id](https://agriconnect.my.id) dan daftarkan diri Anda sebagai petani. Platform kami menyediakan panduan untuk menggunakan layanan kami secara efektif.

## Kunjungi Kami

Untuk informasi lebih lanjut, kunjungi website kami di [agriconnect.my.id](https://agriconnect.my.id).

Tentu, berikut adalah bagian tambahan mengenai langkah-langkah menginstal proyek AgriConnect dari GitLab dan menjalankannya:

---

## Langkah-Langkah Menginstal AgriConnect

Jika Anda ingin mengkloning dan menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

### Prasyarat

Pastikan Anda telah menginstal:

- **PHP >= 8.0**
- **Composer** untuk mengelola dependensi
- **Node.js dan NPM/Yarn** untuk pengelolaan JavaScript
- **Git** untuk mengkloning proyek
- **Laravel** untuk menjalankan server lokal

### Langkah Instalasi

1. **Kloning Repository**
   ```
   git clone https://gitlab.com/username/agriconnect.git
   ```

2. **Masuk ke Direktori Proyek**
   ```
   cd agriconnect
   ```

3. **Instal Dependensi PHP dengan Composer**
   ```
   composer install
   ```

4. **Instal Dependensi Frontend**
   ```
   npm install
   ```
   atau jika menggunakan Yarn:
   ```
   yarn install
   ```

5. **Buat File Konfigurasi .env**
   ```
   cp .env.example .env
   ```
   Sesuaikan konfigurasi `.env` sesuai dengan kebutuhan Anda, terutama pengaturan database.

6. **Generate App Key**
   ```
   php artisan key:generate
   ```

7. **Migrasi Database**
   ```
   php artisan migrate
   ```

8. **Menjalankan Server Lokal**
   ```
   php artisan serve
   ```

9. **Jalankan Build Dev untuk Frontend**
   ```
   npm run dev
   ```
   atau jika menggunakan Yarn:
   ```
   yarn dev
   ```

Sekarang, proyek Anda seharusnya berjalan di [http://localhost:8000](http://localhost:8000).
