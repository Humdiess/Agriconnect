<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class espController extends Controller
{
    public function receive(Request $request) {
        // simpan data dari esp api
        $moisture = 80;

        return view('petani.dashboard', compact('moisture'));
    }
}
