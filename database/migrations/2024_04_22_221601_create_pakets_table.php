<?php

use Carbon\Carbon;
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
            $table->int('minimal_skor')->default(0);
            $table->timestamps();
        });
        // DB::table('pakets')->insert(
        //     [
        //         'id' => 'POLPCM001',
        //         'nama_paket' => 'Tryout Kecermatan Testing 1',
        //         'harga_paket' => 10000,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'gambar_paket' => 'POLPSI001aturan.jpg',
        //     ]
        // );
        DB::table('pakets')->insert(
            [
                'id' => 'POLPSI001',
                'nama_paket' => 'Tryout Paket Psikologi Paket 1',
                'harga_paket' => 10000,
                'durasi_paket' => 12300,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gambar_paket' => 'POLPSI001aturan.jpg',
            ]
        );
        // DB::table('pakets')->insert(
        //     [
        //         'id' => 'POLPKC001',
        //         'nama_paket' => 'Tryout Kecerdasan Testing 1',
        //         'harga_paket' => 10000,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'gambar_paket' => 'POLPSI001aturan.jpg'
        //     ]
        // );
        // DB::table('pakets')->insert(
        //     [
        //         'id' => 'POLAKA001',
        //         'nama_paket' => 'Tryout Akademik Testing 1',
        //         'harga_paket' => 10000,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'gambar_paket' => 'POLPSI001aturan.jpg'
        //     ]
        // );
        // DB::table('pakets')->insert(
        //     [
        //         'id' => 'POLLAI001',
        //         'nama_paket' => 'Tryout Lainnya Testing 1',
        //         'harga_paket' => 10000,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'gambar_paket' => 'POLPSI001aturan.jpg'
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
