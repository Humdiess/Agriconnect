<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User (petani) yang menjual produk
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('price');
            $table->integer('stock');
            $table->string('category')->nullable();
            $table->string('image')->nullable(); // Optional: Menyimpan gambar produk
            $table->string('lokasi')->nullable(); // 
            $table->string('sertifikasi')->nullable(); // 
            $table->string('pengiriman')->nullable(); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};