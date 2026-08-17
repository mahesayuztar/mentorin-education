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
        Schema::create('pakets', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama_paket');
            $table->integer('harga_paket');
            $table->integer('durasi_paket')->default(60 * 60 * 3);
            $table->text('aturan_paket')->nullable();
            $table->string('gambar_paket')->nullable();
            $table->string('solusi_paket')->nullable();
            $table->integer('minimal_skor')->default(0);
            $table->integer('latihan_soal')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
