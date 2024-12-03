<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;

/**
 * PetaniController berfungsi untuk mengatur tampilan dan logika aplikasi petani.
 *
 * @package App\Http\Controllers
 */
class PetaniController extends Controller
{
    /**
     * Menampilkan dashboard petani dengan data sensor.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $hasSettings = Setting::count() > 5;
        // Mengambil IP dari database atau menggunakan nilai default jika tidak tersedia
        $esp32_ip = Setting::get('esp32_ip', 'http://default-ip');

        // var isi ip tambah endpoint;
        $ip = $esp32_ip . '/moisture';

        try {
            // Mengambil data sensor dari ESP32
            $response = file_get_contents($esp32_ip . '/moisture');
            $data = json_decode($response, true);
            $temperature = $data['suhu'] ?? 32;
            $moisture = $data['moisture'] ?? 50;
        } catch (\Exception $e) {
            // Jika gagal menghubungi ESP32, gunakan nilai default dan tampilkan error
            $temperature = 32;
            $moisture = 50;
            session()->flash('error', 'Gagal menghubungi ESP32 di IP: ' . $esp32_ip);
        }

        $active = 'dashboard';
        return view('petani.dashboard', compact('active', 'moisture', 'temperature', 'ip', 'hasSettings'));
    }

    /**
     * Menghasilkan rekomendasi berdasarkan teks yang diberikan.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateRecommendation(Request $request) {
        try {
            // Mengambil data JSON dari request
            $data = $request->json()->all();

            // Memastikan bahwa kunci 'text' ada dalam request
            if (!isset($data['text'])) {
                return response()->json(['error' => 'Text key not provided in request'], 400);
            }

            // Mengambil teks dari request
            $text = $data['text'];

            // Membuat klien GeminiAPI dengan API key
            $client = new Client("AIzaSyBjwXRk3Twk1kgq13sz6WHGchYnyc9JgxU");
            // Menghasilkan konten berdasarkan teks menggunakan GeminiPro
            $response = $client->geminiPro()->generateContent(
                new TextPart($text)
            );

            // Mengembalikan teks hasil rekomendasi dalam format JSON
            return response()->json(['text' => $response->text()]);
        } catch (\Exception $e) {
            // Mengembalikan pesan error jika terjadi kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

       /**
     * Menyimpan alamat IP ESP32 yang dimasukkan oleh pengguna.
     */
    public function updateIp(Request $request)
    {
        // Validasi input
        $request->validate([
            'ip_address' => 'required|ip'
        ]);

        // Simpan alamat IP ke database
        Setting::set('esp32_ip', 'http://' . $request->input('ip_address'));

        // Redirect kembali ke dashboard dengan pesan sukses
        return redirect()->route('petani.index')->with('success', 'Alamat IP ESP32 diperbarui!');
    }

}
