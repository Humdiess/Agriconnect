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
        return view('frontend.blog.index', compact('active'));
    }
    public function agrishop(Request $request)
    {
        $active = 'agrishop';
        // Get query parameters for filtering and searching
        $search = $request->input('search');
        $category = $request->input('category');
        $sort = $request->input('sort');

        // Query builder for products
        $query = Product::query();

        // Apply search filter
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Apply category filter
        if ($category && $category != 'all') {
            $query->where('category', $category);
        }

        // Apply sorting
        if ($sort) {
            switch ($sort) {
                case 'price-asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name-asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name-desc':
                    $query->orderBy('name', 'desc');
                    break;
            }
        }

        // Get the filtered and sorted products
        $products = $query->get();
        return view('frontend.home.agrishop', compact('products', 'active'));
    }
}
