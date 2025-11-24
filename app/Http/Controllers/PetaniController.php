<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use GeminiAPI\Enums\MimeType;
use GeminiAPI\Resources\Parts\ImagePart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        // Data Mock Rendemen Tebu 5 Tahun Terakhir
        $yieldData = [
            '2020' => 7.5,
            '2021' => 7.8,
            '2022' => 8.2,
            '2023' => 8.0,
            '2024' => 8.5,
        ];

        $active = 'dashboard';
        return view('petani.dashboard', compact('active', 'moisture', 'temperature', 'ip', 'hasSettings', 'yieldData'));
    }

    /**
     * Menghasilkan rekomendasi berdasarkan teks yang diberikan.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /**
     * Menghasilkan rekomendasi berdasarkan data sensor.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateRecommendation(Request $request) {
        try {
            // Validasi input
            $request->validate([
                'temperature' => 'required|numeric',
                'moisture' => 'required|numeric',
            ]);

            $temperature = $request->input('temperature');
            $moisture = $request->input('moisture');

            $apiKey = env('GEMINI_API_KEY');
            if (!$apiKey) {
                Log::error('GEMINI_API_KEY not found in .env');
                return response()->json(['error' => 'Server configuration error'], 500);
            }

            // Prompt Engineering untuk hasil yang lebih terstruktur dan relevan
            $prompt = "Anda adalah ahli agronomi spesialis tanaman tebu. Berdasarkan data sensor berikut:\n" .
                "- Suhu: {$temperature}°C\n" .
                "- Kelembaban Tanah: {$moisture}%\n\n" .
                "Berikan rekomendasi perawatan yang spesifik untuk petani tebu. \n" .
                "Fokus pada 3 aspek utama: Pengairan, Pemupukan, dan Pengendalian Hama/Penyakit (jika kondisi mendukung risiko hama).\n" .
                "Jika kondisi sensor normal/ideal, berikan saran pemeliharaan rutin.\n" .
                "Jika data tidak masuk akal (misal suhu > 60°C atau < 0°C), berikan peringatan.\n\n" .
                "Format respons HARUS berupa JSON valid tanpa markdown formatting (```json ... ```) dengan struktur berikut:\n" .
                "{\n" .
                "  \"recommendations\": [\n" .
                "    {\n" .
                "      \"category\": \"Pengairan\" | \"Pemupukan\" | \"Hama\" | \"Umum\" | \"Peringatan\",\n" .
                "      \"action\": \"Tindakan singkat dan jelas (maks 10 kata)\",\n" .
                "      \"detail\": \"Penjelasan detail termasuk takaran/dosis jika ada (maks 20 kata)\"\n" .
                "    }\n" .
                "  ]\n" .
                "}";

            // Membuat klien GeminiAPI dengan API key
            $client = new Client($apiKey);
            // Menghasilkan konten berdasarkan teks menggunakan GeminiPro
            $response = $client->generativeModel('gemini-2.5-flash')->generateContent(
                new TextPart($prompt)
            );

            $responseText = $response->text();
            
            // Bersihkan markdown formatting jika ada
            $responseText = str_replace(['```json', '```'], '', $responseText);
            
            $jsonResponse = json_decode($responseText, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                 // Fallback jika JSON tidak valid
                 Log::warning('Gemini returned invalid JSON: ' . $responseText);
                 return response()->json([
                     'recommendations' => [
                         [
                             'category' => 'Umum',
                             'action' => 'Periksa kondisi lahan secara langsung',
                             'detail' => 'Sistem gagal memproses rekomendasi spesifik.'
                         ]
                     ]
                 ]);
            }

            // Mengembalikan hasil rekomendasi dalam format JSON
            return response()->json($jsonResponse);

        } catch (\Exception $e) {
            Log::error('Gemini API Error in PetaniController: ' . $e->getMessage());
            // Mengembalikan pesan error jika terjadi kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Menganalisis gambar tanaman menggunakan Gemini.
     */
    public function analyzeImage(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|max:5120', // Max 5MB
            ]);

            $image = $request->file('image');
            $mimeTypeString = $image->getMimeType();
            $imageData = base64_encode(file_get_contents($image->getRealPath()));

            $apiKey = env('GEMINI_API_KEY');
            if (!$apiKey) {
                return response()->json(['error' => 'Server configuration error'], 500);
            }

            // Try to convert string mime type to Enum
            try {
                $mimeType = MimeType::from($mimeTypeString);
            } catch (\ValueError $e) {
                return response()->json(['error' => 'Format gambar tidak didukung oleh AI.'], 400);
            }

            $client = new Client($apiKey);
            
            // Use Gemini 2.5 Flash for multimodal capabilities
            $response = $client->generativeModel('gemini-2.5-flash')->generateContent(
                new TextPart('Analisis gambar ini. Jika ini adalah tanaman tebu atau tanaman pertanian lainnya, jelaskan kondisinya, apakah ada penyakit, dan berikan saran perawatan. Jika bukan tanaman, katakan bahwa Anda hanya dapat menganalisis tanaman.'),
                new ImagePart($mimeType, $imageData)
            );

            return response()->json(['text' => $response->text()]);

        } catch (\Exception $e) {
            Log::error('Gemini Image Analysis Error: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menganalisis gambar: ' . $e->getMessage()], 500);
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
