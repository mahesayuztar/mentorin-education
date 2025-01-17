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
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->string('id_paket');
            $table->integer('nomor_soal');
            $table->integer('nomor_jawaban');
            $table->string('isi_jawaban');
            $table->string('gambar_jawaban')->nullable();
            $table->integer('benar_jawaban')->default(0);
            $table->integer('skor_jawaban')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawabans');
    }
};
