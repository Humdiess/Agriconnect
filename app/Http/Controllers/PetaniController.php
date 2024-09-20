<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniController extends Controller
{
    //
    public function index() // Dashboard
    {
        $active = 'dashboard';
        return view('petani.dashboard', compact('active'));
    }
}
