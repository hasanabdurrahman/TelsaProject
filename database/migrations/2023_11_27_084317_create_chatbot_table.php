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
        Schema::create('chatbot', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan', 300);
            $table->string('jawaban', 300);
            // Add other columns and constraints here

            // Timestamps
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chatbot');
    }
};
