<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $products = Product::where('user_id', $userId)->get();
        $active = 'product';
        return view('frontend.product.index', compact('products', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'product';
        return view('frontend.product.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',
            'lokasi' => 'nullable|string|max:255',
            'sertifikasi' => 'nullable|string|max:255',
            'pengiriman' => 'nullable|string|max:255',
        ]);

        $validated['id'] = Str::uuid();
        $validated['user_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $active = 'product';

        return view('frontend.product.show', compact('product', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $active = 'product';
        return view('frontend.product.edit', compact('product', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',
            'lokasi' => 'nullable|string|max:255',
            'sertifikasi' => 'nullable|string|max:255',
            'pengiriman' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
    public function agrishop_show(Product $product)
    {
        $active = 'product';

        // Buat pesan WhatsApp
        $nomorHp = $product->user->phone_number; // Misal field nomor penjual ada di dalam tabel product
        $nama = $product->name;
        $harga = $product->price;

        // Buat link WhatsApp
        $whatsappMessage = "Halo, saya ingin memesan produk anda \"$nama\" dengan harga \"$harga\"";
        $whatsappLink = "https://api.whatsapp.com/send?phone={$nomorHp}&text=" . urlencode($whatsappMessage);

        return view('frontend.home.agrishop_show', compact('product', 'active', 'whatsappLink'));
    }
    public function filterProducts(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $sortOrder = $request->input('sortOrder');

        // Query dasar untuk produk
        $products = Product::query();

        // Filter berdasarkan nama produk (search)
        if (!empty($searchTerm)) {
            $products->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Sorting berdasarkan harga
        if ($sortOrder === 'asc') {
            $products->orderBy('price', 'asc');
        } elseif ($sortOrder === 'desc') {
            $products->orderBy('price', 'desc');
        }

        // Ambil produk yang sesuai dengan filter
        $products = $products->get();

        return response()->json([
            'products' => $products
        ]);
    }
}
