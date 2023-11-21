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
        Schema::create('list_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gambar');
            $table->string('kode_event');
            $table->string('event');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('lokasi');
            $table->string('harga');
            $table->string('max');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_models');
    }
};
