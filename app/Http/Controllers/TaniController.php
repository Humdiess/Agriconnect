<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Support\Facades\Log; // Import Log facade
use Illuminate\Support\Facades\DB;

class TaniController extends Controller
{
    public function index()
    {
        // dd(env("GEMINI_API_KEY"));

        $active = 'tani-ai';
        return view('frontend.tani.index', compact('active'));
    }
    public function pendaftaran()
    {
        if (auth()->check() && auth()->user()->is_farmer) {
            return redirect()->route('petani.index');
        }

        $active = 'pendaftaran';
        return view('petani.pendaftaran', compact('active'));
    }
    public function submit(Request $request)
    {
        // dd($request);
        // update user
        $user_id = auth()->user()->id;
        $request->validate([
            'phone_number' => 'required|string|min:7|max:15',
            'address' => 'required|string|min:10|max:255',
            // 'city' => 'required|string|min:3|max:100',
            'valid' => 'accepted', // Ensure the checkbox is checked
        ]);

        // Siapkan data yang akan diperbarui
        $data = [
            'phone_number' => $request->name,
            'address' => $request->description,
            // 'city' => $request->price,
            'is_farmer' => true,
            'updated_at' => now(),
        ];


        // Update data produk di database
        DB::table('users')->where('id', $user_id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('petani.index')->with('success', 'Selamat, Anda telah menjadi Petani !');
    }

    public function chat(Request $request)
    {
        $data = $request->json()->all();
        $text = $data['text'];

        // $client = new Client("AIzaSyBgVfmLyjHhdRhotwGz4XSnlXjn6wVedGI");

        $client = new Client(env("GEMINI_API_KEY"));

        $response = $client->geminiPro()->generateContent(
            new TextPart($text)
        );

        return response()->json(['text' => $response->text()]);
    }
}
