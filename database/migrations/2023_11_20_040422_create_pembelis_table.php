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
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('trx');
            $table->string('nama');
            $table->string('email');
            $table->string('kode_event');
            $table->string('event');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('lokasi');
            $table->string('harga');
            $table->string('payment');
            $table->string('notif');
            $table->string('scan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelis');
    }
};
