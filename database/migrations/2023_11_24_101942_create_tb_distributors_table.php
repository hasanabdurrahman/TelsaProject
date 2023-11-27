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
        Schema::create('tb_distributors', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            
            $table->id();
            $table->string('nama', 25);
            $table->text('alamat');
            $table->string('distrik', 25);
            $table->string('telp', 13);
            $table->text('latitude');
            $table->text('longitude');
            $table->string('image', 30);
            $table->string('deskripsi', 250);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_distributors');
    }
};
