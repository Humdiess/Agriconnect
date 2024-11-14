<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel settings.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();   // Kolom untuk kunci pengaturan (misalnya, 'esp32_ip')
            $table->text('value')->nullable(); // Kolom untuk nilai pengaturan
            $table->timestamps();
        });
    }

    /**
     * Mengembalikan migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
