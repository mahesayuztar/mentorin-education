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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('id_paket');
            $table->string('nama_paket');
            $table->integer('total_amount');
            $table->integer('status')->default(0);
            $table->string('token')->default('dummy');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE orders AUTO_INCREMENT = 20;');
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Paket Testing 1',
        //         'id_paket' => 'POLPSI001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Kecermatan Testing 1',
        //         'id_paket' => 'POLPCM001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Kecerdasan Testing 1',
        //         'id_paket' => 'POLPKC001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Kepribadian Testing 1',
        //         'id_paket' => 'POLPKR001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Akademik Testing 1',
        //         'id_paket' => 'POLAKA001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'id_user' => 1,
        //         'nama_paket' => 'Tryout Lainnya Testing 1',
        //         'id_paket' => 'POLLAI001',
        //         'total_amount' => 10000,
        //         'status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
