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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string('id_paket');
            $table->integer('nomor_soal');
            $table->text('isi_soal');
            $table->string('gambar_soal')->nullable();
            $table->integer('nomor_jawaban');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE soals AUTO_INCREMENT = 0;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
