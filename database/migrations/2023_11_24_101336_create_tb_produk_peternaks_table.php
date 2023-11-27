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
        Schema::create('tb_produk_peternaks', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            
            $table->id();
            $table->string('nama_produk', 20);
            $table->string('kategori_produk', 20);
            $table->string('jenis', 255);
            $table->string('gambar', 255);
            $table->double('stok');
            $table->string('deskripsi', 255);
            $table->double('harga');
            $table->double('berat');
            $table->unsignedBigInteger('terjual'); // Use unsignedBigInteger for an integer field
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produk_peternaks');
    }
};
