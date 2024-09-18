<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }
    public function contact()
    {
        return view('frontend.home.contact');
    }
    public function blog()
    {
        return view('frontend.home.blog');
    }
    public function agrishop()
    {
        $products = Product::all();
        return view('frontend.home.agrishop', compact('products'));
    }
}