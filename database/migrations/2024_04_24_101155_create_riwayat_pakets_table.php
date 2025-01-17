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
        Schema::create('riwayat_pakets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('id_paket');
            $table->integer('status')->default(0);
            $table->timestamp('time')->nullable();
            $table->integer('benar')->nullable();
            $table->integer('kosong')->nullable();
            $table->integer('salah')->nullable();
            $table->integer('score')->default(0);
            $table->string('paketan')->nullable();
            $table->text('riwayat_jawaban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pakets');
    }
};
