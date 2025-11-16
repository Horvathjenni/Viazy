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
        Schema::create('utazasi_csomagoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('helyszin_id')->constrained('helyszins');
            $table->date('indulasi_datum');
            $table->date('visszaut_datum');
            $table->foreignId('utazasi_mod_id')->constrained('utazasi_mods');
            $table->boolean('lastminute');
            $table->integer('letszam');
            $table->integer('szabad_helyek');
            $table->integer('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utazasi_csomagoks');
    }
};
