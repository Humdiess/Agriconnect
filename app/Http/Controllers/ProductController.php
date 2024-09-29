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
        return view('product.index', compact('products', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'product';
        return view('product.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => auth()->id(),  // Menyimpan id user yang menjual produk
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,
            'created_at' => now(),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        DB::table('products')->insert($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $active = 'product';

        return view('product.show', compact('product', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $active = 'product';
        return view('product.edit', compact('product', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',
        ]);

        // Ambil data yang ada di tabel products berdasarkan id
        $product = DB::table('products')->where('id', $product->id)->first();

        if (!$product) {
            return redirect()->back()->withErrors('Product not found!');
        }

        // Siapkan data yang akan diperbarui
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,
            'updated_at' => now(),
        ];

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // Update data produk di database
        DB::table('products')->where('id', $product->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Cari produk berdasarkan id
        $product = DB::table('products')->where('id', $product->id)->first();

        if (!$product) {
            return redirect()->back()->withErrors('Product not found!');
        }

        // Hapus gambar dari storage jika ada
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Hapus produk dari database
        DB::table('products')->where('id', $product->id)->delete();

        // Redirect kembali dengan pesan sukses
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
}
