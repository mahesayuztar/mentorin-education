<?php

namespace Database\Seeders;

use App\Models\Paket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@gmail.com'], [
            'name' => 'Administrator',
            'username' => 'admin',
            'phoneNumber' => '081234567890',
            'address' => 'Mentorin Education',
            'usertype' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        User::updateOrCreate(['email' => 'user@gmail.com'], [
            'name' => 'Demo User',
            'username' => 'user',
            'phoneNumber' => '081234567891',
            'address' => 'Mentorin Education',
            'usertype' => 'user',
            'password' => Hash::make('12345678'),
        ]);

        $this->call([
            KecerdasanSeeder::class,
            KecermatanSeeder::class,
            KepribadianSeeder::class,
            PassHandSeeder::class,
        ]);

        Paket::updateOrCreate(['id' => 'POLPSI001'], [
            'nama_paket' => 'Tryout Paket Psikologi POLRI Paket 1',
            'harga_paket' => 0,
            'durasi_paket' => 12300,
            'gambar_paket' => 'POLPSI001aturan.jpg',
            'minimal_skor' => 0,
            'latihan_soal' => 0,
        ]);
    }
}
