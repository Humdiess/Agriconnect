<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $active = 'home';
        return view('frontend.home.index', compact('active'));
    }
    public function contact()
    {
        $active = 'contact';
        return view('frontend.home.contact', compact('active'));
    }
    public function blog()
    {
        $active = 'blog';
        return view('frontend.home.blog', compact('active'));
    }
    public function agrishop()
    {
        $active = 'agrishop';
        $products = Product::all();
        return view('frontend.home.agrishop', compact('products', 'active'));
    }
}
