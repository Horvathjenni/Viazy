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
        Schema::create('foglalasoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('helyszin_id')->constrained('helyszins');
            $table->foreignId('felhasznalo_id')->constrained('felhsznalos');
            $table->integer('letszam');
            $table->integer('aktualis_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foglalasoks');
    }
};
