<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('pakets', 'latihan_soal')) {
            Schema::table('pakets', function (Blueprint $table) {
                $table->integer('latihan_soal')->default(0);
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('pakets', 'latihan_soal')) {
            Schema::table('pakets', function (Blueprint $table) {
                $table->dropColumn('latihan_soal');
            });
        }
    }
};
