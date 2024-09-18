<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Support\Facades\Log; // Import Log facade

class TaniController extends Controller
{
    public function index()
    {
        return view('frontend.tani.index');
    }

    public function chat(Request $request)
    {
        $data = $request->json()->all();
        $text = $data['text'];

        $client = new Client("AIzaSyBjwXRk3Twk1kgq13sz6WHGchYnyc9JgxU");

        $response = $client->geminiPro()->generateContent(
            new TextPart($text)
        );

        return response()->json(['text' => $response->text()]);
    }
}
