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
        Schema::create('last_m_ars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utazasi_id')->constrained('utazasi_csomagoks');
            $table->date('datum');
            $table->integer('szazalek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_m_ars');
    }
};
