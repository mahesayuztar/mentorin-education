<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Database\Seeder;

class KecermatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder paket, soal, dan jawaban kecermatan paket 1
        Paket::create([
            'id' => 'PNSPCM001',
            'nama_paket' => 'Tryout Psikologi Kecermatan Paket 1',
            'harga_paket' => 0,
            'durasi_paket' => 600,
            'aturan_paket' => '
                KOLOM 1 <br>
                a	b	c	d	e
                Q	W	E	R	T <br>

                T	E	R	W
                a	b	c	d	e <br>
                Jawaban A',
        ]);

        // ======================= KOLOM 1 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 1,
            'isi_soal' => '1 {} Q W E R T {} T E R W',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 2,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 3,
            'isi_soal' => '1 {} Q W E R T {} E R W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 4,
            'isi_soal' => '1 {} Q W E R T {} R T E Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 5,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 6,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 7,
            'isi_soal' => '1 {} Q W E R T {} T Q E R',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 8,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 9,
            'isi_soal' => '1 {} Q W E R T {} W E Q T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 10,
            'isi_soal' => '1 {} Q W E R T {} W E Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 11,
            'isi_soal' => '1 {} Q W E R T {} Q R T E',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 12,
            'isi_soal' => '1 {} Q W E R T {} Q W R E',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 13,
            'isi_soal' => '1 {} Q W E R T {} T Q R E',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 14,
            'isi_soal' => '1 {} Q W E R T {} T W Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 15,
            'isi_soal' => '1 {} Q W E R T {} R E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 16,
            'isi_soal' => '1 {} Q W E R T {} E W Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 17,
            'isi_soal' => '1 {} Q W E R T {} R T W E',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 18,
            'isi_soal' => '1 {} Q W E R T {} W E Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 19,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 20,
            'isi_soal' => '1 {} Q W E R T {} W E Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 21,
            'isi_soal' => '1 {} Q W E R T {} T E Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 22,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 23,
            'isi_soal' => '1 {} Q W E R T {} T E Q R',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 24,
            'isi_soal' => '1 {} Q W E R T {} R T Q E',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 25,
            'isi_soal' => '1 {} Q W E R T {} W Q E T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 26,
            'isi_soal' => '1 {} Q W E R T {} T E W R',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 27,
            'isi_soal' => '1 {} Q W E R T {} Q W E R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 28,
            'isi_soal' => '1 {} Q W E R T {} T E R W',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 29,
            'isi_soal' => '1 {} Q W E R T {} E R W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 30,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 31,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 32,
            'isi_soal' => '1 {} Q W E R T {} W T Q E',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 33,
            'isi_soal' => '1 {} Q W E R T {} T Q R E',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 34,
            'isi_soal' => '1 {} Q W E R T {} W Q R E',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 35,
            'isi_soal' => '1 {} Q W E R T {} E R Q T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 36,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 37,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 38,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 39,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 40,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 41,
            'isi_soal' => '1 {} Q W E R T {} W R Q E',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 42,
            'isi_soal' => '1 {} Q W E R T {} R E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 43,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 44,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 45,
            'isi_soal' => '1 {} Q W E R T {} W E T R',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 46,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 47,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 48,
            'isi_soal' => '1 {} Q W E R T {} T E W Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 49,
            'isi_soal' => '1 {} Q W E R T {} T E W R',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50,
            'isi_soal' => '1 {} Q W E R T {} R E T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // ======================= KOLOM 2 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 1,
            'isi_soal' => '2 {} L K J H G {} L G J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 2,
            'isi_soal' => '2 {} L K J H G {} H K L J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 3,
            'isi_soal' => '2 {} L K J H G {} H L K J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 4,
            'isi_soal' => '2 {} L K J H G {} L K G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 5,
            'isi_soal' => '2 {} L K J H G {} K H J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 6,
            'isi_soal' => '2 {} L K J H G {} L K G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 7,
            'isi_soal' => '2 {} L K J H G {} J G L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 8,
            'isi_soal' => '2 {} L K J H G {} L K H J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 9,
            'isi_soal' => '2 {} L K J H G {} H J L G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 10,
            'isi_soal' => '2 {} L K J H G {} K H J G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 11,
            'isi_soal' => '2 {} L K J H G {} J G H K',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 12,
            'isi_soal' => '2 {} L K J H G {} K G H J',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 13,
            'isi_soal' => '2 {} L K J H G {} L K G H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 14,
            'isi_soal' => '2 {} L K J H G {} J G L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 15,
            'isi_soal' => '2 {} L K J H G {} K H J G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 16,
            'isi_soal' => '2 {} L K J H G {} G H J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 17,
            'isi_soal' => '2 {} L K J H G {} K G H J',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 18,
            'isi_soal' => '2 {} L K J H G {} G K L H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 19,
            'isi_soal' => '2 {} L K J H G {} L K G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 20,
            'isi_soal' => '2 {} L K J H G {} K J G L',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 21,
            'isi_soal' => '2 {} L K J H G {} J H L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 22,
            'isi_soal' => '2 {} L K J H G {} L K G H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 23,
            'isi_soal' => '2 {} L K J H G {} L J H K',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 24,
            'isi_soal' => '2 {} L K J H G {} K G J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 25,
            'isi_soal' => '2 {} L K J H G {} J G L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 26,
            'isi_soal' => '2 {} L K J H G {} J H L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 27,
            'isi_soal' => '2 {} L K J H G {} K H G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 28,
            'isi_soal' => '2 {} L K J H G {} L G J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 29,
            'isi_soal' => '2 {} L K J H G {} J G H L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 30,
            'isi_soal' => '2 {} L K J H G {} G K J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 31,
            'isi_soal' => '2 {} L K J H G {} K J G H',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 32,
            'isi_soal' => '2 {} L K J H G {} G J H L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 33,
            'isi_soal' => '2 {} L K J H G {} L K H 4',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 34,
            'isi_soal' => '2 {} L K J H G {} K G J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 35,
            'isi_soal' => '2 {} L K J H G {} J H L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 36,
            'isi_soal' => '2 {} L K J H G {} G J L K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 37,
            'isi_soal' => '2 {} L K J H G {} G J H K',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 38,
            'isi_soal' => '2 {} L K J H G {} L H G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 39,
            'isi_soal' => '2 {} L K J H G {} L K G H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 40,
            'isi_soal' => '2 {} L K J H G {} G H J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 41,
            'isi_soal' => '2 {} L K J H G {} L G H K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 42,
            'isi_soal' => '2 {} L K J H G {} L J G H',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 43,
            'isi_soal' => '2 {} L K J H G {} G J H L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 44,
            'isi_soal' => '2 {} L K J H G {} L G K J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 45,
            'isi_soal' => '2 {} L K J H G {} G H J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 46,
            'isi_soal' => '2 {} L K J H G {} L G J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 47,
            'isi_soal' => '2 {} L K J H G {} K H J L',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 48,
            'isi_soal' => '2 {} L K J H G {} J G H L',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 49,
            'isi_soal' => '2 {} L K J H G {} L G J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 50 + 50,
            'isi_soal' => '2 {} L K J H G {} L G H J',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // ======================= KOLOM 3 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 1,
            'isi_soal' => '3 {} D F G A S {} G A F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 2,
            'isi_soal' => '3 {} D F G A S {} A S F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 3,
            'isi_soal' => '3 {} D F G A S {} D F A G',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 4,
            'isi_soal' => '3 {} D F G A S {} G F A D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 5,
            'isi_soal' => '3 {} D F G A S {} A D F G',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 6,
            'isi_soal' => '3 {} D F G A S {} A S F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 7,
            'isi_soal' => '3 {} D F G A S {} A S G F',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 8,
            'isi_soal' => '3 {} D F G A S {} A S D G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 9,
            'isi_soal' => '3 {} D F G A S {} D A S F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 10,
            'isi_soal' => '3 {} D F G A S {} D G F S',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 11,
            'isi_soal' => '3 {} D F G A S {} D F G A',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 12,
            'isi_soal' => '3 {} D F G A S {} G F A S',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 13,
            'isi_soal' => '3 {} D F G A S {} A G S D',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 14,
            'isi_soal' => '3 {} D F G A S {} A S G F',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 15,
            'isi_soal' => '3 {} D F G A S {} D A F G',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 16,
            'isi_soal' => '3 {} D F G A S {} F G A D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 17,
            'isi_soal' => '3 {} D F G A S {} G A D F',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 18,
            'isi_soal' => '3 {} D F G A S {} G D A F',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 19,
            'isi_soal' => '3 {} D F G A S {} A D F G',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 20,
            'isi_soal' => '3 {} D F G A S {} G D A S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 21,
            'isi_soal' => '3 {} D F G A S {} G D F A',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 22,
            'isi_soal' => '3 {} D F G A S {} G D A S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 23,
            'isi_soal' => '3 {} D F G A S {} A D G S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 24,
            'isi_soal' => '3 {} D F G A S {} D A G S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 25,
            'isi_soal' => '3 {} D F G A S {} F G S A',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 26,
            'isi_soal' => '3 {} D F G A S {} A G F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 27,
            'isi_soal' => '3 {} D F G A S {} F D S A',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 28,
            'isi_soal' => '3 {} D F G A S {} G A D S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 29,
            'isi_soal' => '3 {} D F G A S {} A G S F',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 30,
            'isi_soal' => '3 {} D F G A S {} S A G D',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 31,
            'isi_soal' => '3 {} D F G A S {} D A S F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 32,
            'isi_soal' => '3 {} D F G A S {} D A S G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 33,
            'isi_soal' => '3 {} D F G A S {} G A F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 34,
            'isi_soal' => '3 {} D F G A S {} A S F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 35,
            'isi_soal' => '3 {} D F G A S {} D F S G',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 36,
            'isi_soal' => '3 {} D F G A S {} S A D F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 37,
            'isi_soal' => '3 {} D F G A S {} A D S F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 38,
            'isi_soal' => '3 {} D F G A S {} A S D G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 39,
            'isi_soal' => '3 {} D F G A S {} S G F A',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 40,
            'isi_soal' => '3 {} D F G A S {} A G F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 41,
            'isi_soal' => '3 {} D F G A S {} D A F S',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 42,
            'isi_soal' => '3 {} D F G A S {} S D F A',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 43,
            'isi_soal' => '3 {} D F G A S {} A S D G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 44,
            'isi_soal' => '3 {} D F G A S {} A F G D',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 45,
            'isi_soal' => '3 {} D F G A S {} S A F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 46,
            'isi_soal' => '3 {} D F G A S {} A S F G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 47,
            'isi_soal' => '3 {} D F G A S {} S G F D',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 48,
            'isi_soal' => '3 {} D F G A S {} G A D F',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 49,
            'isi_soal' => '3 {} D F G A S {} D A F G',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 100 + 50,
            'isi_soal' => '3 {} D F G A S {} A D S F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // ======================= KOLOM 4 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 1,
            'isi_soal' => '4 {} Z X C V B {} X V B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 2,
            'isi_soal' => '4 {} Z X C V B {} C Z B V',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 3,
            'isi_soal' => '4 {} Z X C V B {} B X V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 4,
            'isi_soal' => '4 {} Z X C V B {} C B V Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 5,
            'isi_soal' => '4 {} Z X C V B {} B C Z V',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 6,
            'isi_soal' => '4 {} Z X C V B {} X C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 7,
            'isi_soal' => '4 {} Z X C V B {} B C V X ',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 8,
            'isi_soal' => '4 {} Z X C V B {} V C B X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 9,
            'isi_soal' => '4 {} Z X C V B {} X C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 10,
            'isi_soal' => '4 {} Z X C V B {} B V C X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 11,
            'isi_soal' => '4 {} Z X C V B {} X C Z B',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 12,
            'isi_soal' => '4 {} Z X C V B {} B V C X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 13,
            'isi_soal' => '4 {} Z X C V B {} V B C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 14,
            'isi_soal' => '4 {} Z X C V B {} X C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 15,
            'isi_soal' => '4 {} Z X C V B {} B C X Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 16,
            'isi_soal' => '4 {} Z X C V B {} B C V X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 17,
            'isi_soal' => '4 {} Z X C V B {} V B C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 18,
            'isi_soal' => '4 {} Z X C V B {} V B X Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 19,
            'isi_soal' => '4 {} Z X C V B {} B C V Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 20,
            'isi_soal' => '4 {} Z X C V B {} V C B X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 21,
            'isi_soal' => '4 {} Z X C V B {} B C V X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 22,
            'isi_soal' => '4 {} Z X C V B {} Z B X V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 23,
            'isi_soal' => '4 {} Z X C V B {} V X B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 24,
            'isi_soal' => '4 {} Z X C V B {} Z C V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 25,
            'isi_soal' => '4 {} Z X C V B {} Z C B X',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 26,
            'isi_soal' => '4 {} Z X C V B {} X C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 27,
            'isi_soal' => '4 {} Z X C V B {} C B Z X',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 28,
            'isi_soal' => '4 {} Z X C V B {} V B C X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 29,
            'isi_soal' => '4 {} Z X C V B {} X V B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 30,
            'isi_soal' => '4 {} Z X C V B {} V B C X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 31,
            'isi_soal' => '4 {} Z X C V B {} X C Z B',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 32,
            'isi_soal' => '4 {} Z X C V B {} C B Z V',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 33,
            'isi_soal' => '4 {} Z X C V B {} V C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 34,
            'isi_soal' => '4 {} Z X C V B {} X C B V',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 35,
            'isi_soal' => '4 {} Z X C V B {} B V C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 36,
            'isi_soal' => '4 {} Z X C V B {} C V B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 37,
            'isi_soal' => '4 {} Z X C V B {} X B V Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 38,
            'isi_soal' => '4 {} Z X C V B {} V C Z B',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 39,
            'isi_soal' => '4 {} Z X C V B {} X V C B',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 40,
            'isi_soal' => '4 {} Z X C V B {} B X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 41,
            'isi_soal' => '4 {} Z X C V B {} V C B X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 42,
            'isi_soal' => '4 {} Z X C V B {} V C B Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 43,
            'isi_soal' => '4 {} Z X C V B {} C Z X B',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 44,
            'isi_soal' => '4 {} Z X C V B {} C X Z V',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 45,
            'isi_soal' => '4 {} Z X C V B {} B X C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 46,
            'isi_soal' => '4 {} Z X C V B {} B X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 47,
            'isi_soal' => '4 {} Z X C V B {} X C B V',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 48,
            'isi_soal' => '4 {} Z X C V B {} X B V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 49,
            'isi_soal' => '4 {} Z X C V B {} B C Z X',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 150 + 50,
            'isi_soal' => '4 {} Z X C V B {} V B C X',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // ======================= KOLOM 5 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 1,
            'isi_soal' => '5 {} M N B V C {} N B M V',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 2,
            'isi_soal' => '5 {} M N B V C {} V N C M',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 3,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 4,
            'isi_soal' => '5 {} M N B V C {} N M B V',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 5,
            'isi_soal' => '5 {} M N B V C {} N C M V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 6,
            'isi_soal' => '5 {} M N B V C {} M N V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 7,
            'isi_soal' => '5 {} M N B V C {} M V B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 8,
            'isi_soal' => '5 {} M N B V C {} N M B V',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 9,
            'isi_soal' => '5 {} M N B V C {} N M C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 10,
            'isi_soal' => '5 {} M N B V C {} V N M B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 11,
            'isi_soal' => '5 {} M N B V C {} B M C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 12,
            'isi_soal' => '5 {} M N B V C {} N M B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 13,
            'isi_soal' => '5 {} M N B V C {} V N M B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 14,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 15,
            'isi_soal' => '5 {} M N B V C {} B N V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 16,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 17,
            'isi_soal' => '5 {} M N B V C {} N M B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 18,
            'isi_soal' => '5 {} M N B V C {} B N M C',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 19,
            'isi_soal' => '5 {} M N B V C {} B N C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 20,
            'isi_soal' => '5 {} M N B V C {} V N C B',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 21,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 22,
            'isi_soal' => '5 {} M N B V C {} B N V M',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 23,
            'isi_soal' => '5 {} M N B V C {} B C V M',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 24,
            'isi_soal' => '5 {} M N B V C {} C V N M',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 25,
            'isi_soal' => '5 {} M N B V C {} M C N V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 26,
            'isi_soal' => '5 {} M N B V C {} N C B M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 27,
            'isi_soal' => '5 {} M N B V C {} N C V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 28,
            'isi_soal' => '5 {} M N B V C {} N M B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 29,
            'isi_soal' => '5 {} M N B V C {} M N V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 30,
            'isi_soal' => '5 {} M N B V C {} V B C M',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 31,
            'isi_soal' => '5 {} M N B V C {} N V M C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 32,
            'isi_soal' => '5 {} M N B V C {} V N M B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 33,
            'isi_soal' => '5 {} M N B V C {} N M B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 34,
            'isi_soal' => '5 {} M N B V C {} N M C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 35,
            'isi_soal' => '5 {} M N B V C {} N M V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 36,
            'isi_soal' => '5 {} M N B V C {} N M C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 37,
            'isi_soal' => '5 {} M N B V C {} B M C V',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 38,
            'isi_soal' => '5 {} M N B V C {} V C M B',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 39,
            'isi_soal' => '5 {} M N B V C {} B N V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 40,
            'isi_soal' => '5 {} M N B V C {} N M V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 41,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 42,
            'isi_soal' => '5 {} M N B V C {} V C N B',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 43,
            'isi_soal' => '5 {} M N B V C {} B N V M',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 44,
            'isi_soal' => '5 {} M N B V C {} V B C N',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 45,
            'isi_soal' => '5 {} M N B V C {} N M V B',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 46,
            'isi_soal' => '5 {} M N B V C {} N C V M',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 47,
            'isi_soal' => '5 {} M N B V C {} N V C B',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 48,
            'isi_soal' => '5 {} M N B V C {} M V B C',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 49,
            'isi_soal' => '5 {} M N B V C {} B V N C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 200 + 50,
            'isi_soal' => '5 {} M N B V C {} N M V C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // ======================= KOLOM 6 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 1,
            'isi_soal' => '6 {} Y U I P K {} U Y K P',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 2,
            'isi_soal' => '6 {} Y U I P K {} P U I K',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 3,
            'isi_soal' => '6 {} Y U I P K {} P Y U I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 4,
            'isi_soal' => '6 {} Y U I P K {} U Y I K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 5,
            'isi_soal' => '6 {} Y U I P K {} P U I K',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 6,
            'isi_soal' => '6 {} Y U I P K {} Y U I P',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 7,
            'isi_soal' => '6 {} Y U I P K {} U Y K I',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 8,
            'isi_soal' => '6 {} Y U I P K {} P K Y U',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 9,
            'isi_soal' => '6 {} Y U I P K {} I Y P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 10,
            'isi_soal' => '6 {} Y U I P K {} P K U I',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 11,
            'isi_soal' => '6 {} Y U I P K {} U Y P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 12,
            'isi_soal' => '6 {} Y U I P K {} K U I Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 13,
            'isi_soal' => '6 {} Y U I P K {} Y U P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 14,
            'isi_soal' => '6 {} Y U I P K {} P U I Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 15,
            'isi_soal' => '6 {} Y U I P K {} K U Y I',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 16,
            'isi_soal' => '6 {} Y U I P K {} U I Y K',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 17,
            'isi_soal' => '6 {} Y U I P K {} K U Y P',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 18,
            'isi_soal' => '6 {} Y U I P K {} P U I Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 19,
            'isi_soal' => '6 {} Y U I P K {} U Y K P',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 20,
            'isi_soal' => '6 {} Y U I P K {} P K U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 21,
            'isi_soal' => '6 {} Y U I P K {} P I K Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 22,
            'isi_soal' => '6 {} Y U I P K {} U I Y P',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 23,
            'isi_soal' => '6 {} Y U I P K {} U Y P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 24,
            'isi_soal' => '6 {} Y U I P K {} K I Y U',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 25,
            'isi_soal' => '6 {} Y U I P K {} U Y P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 26,
            'isi_soal' => '6 {} Y U I P K {} U Y P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 27,
            'isi_soal' => '6 {} Y U I P K {} Y I P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 28,
            'isi_soal' => '6 {} Y U I P K {} P K U I',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 29,
            'isi_soal' => '6 {} Y U I P K {} P Y I U',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 30,
            'isi_soal' => '6 {} Y U I P K {} U Y P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 31,
            'isi_soal' => '6 {} Y U I P K {} K P I U',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 32,
            'isi_soal' => '6 {} Y U I P K {} U P K Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 33,
            'isi_soal' => '6 {} Y U I P K {} I U K Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 34,
            'isi_soal' => '6 {} Y U I P K {} K P I U',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 35,
            'isi_soal' => '6 {} Y U I P K {} U I P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 36,
            'isi_soal' => '6 {} Y U I P K {} P K U I',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 37,
            'isi_soal' => '6 {} Y U I P K {} Y U P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 38,
            'isi_soal' => '6 {} Y U I P K {} P K U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 39,
            'isi_soal' => '6 {} Y U I P K {} P U I Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 40,
            'isi_soal' => '6 {} Y U I P K {} P K U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 41,
            'isi_soal' => '6 {} Y U I P K {} Y U P K',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 42,
            'isi_soal' => '6 {} Y U I P K {} Y U P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 43,
            'isi_soal' => '6 {} Y U I P K {} P K I U',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 44,
            'isi_soal' => '6 {} Y U I P K {} U Y P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 45,
            'isi_soal' => '6 {} Y U I P K {} U Y K I',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 46,
            'isi_soal' => '6 {} Y U I P K {} P K U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 47,
            'isi_soal' => '6 {} Y U I P K {} K I U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 48,
            'isi_soal' => '6 {} Y U I P K {} Y U P I',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 49,
            'isi_soal' => '6 {} Y U I P K {} P K U Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 250 + 50,
            'isi_soal' => '6 {} Y U I P K {} U Y P K
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // ======================= KOLOM 7 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 1,
            'isi_soal' => '7 {} X Y Z C H {} X Y C H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 2,
            'isi_soal' => '7 {} X Y Z C H {} C Y Z H',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 3,
            'isi_soal' => '7 {} X Y Z C H {} Y X H C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 4,
            'isi_soal' => '7 {} X Y Z C H {} Y X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 5,
            'isi_soal' => '7 {} X Y Z C H {} H C Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 6,
            'isi_soal' => '7 {} X Y Z C H {} H Y C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 7,
            'isi_soal' => '7 {} X Y Z C H {} Y X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 8,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 9,
            'isi_soal' => '7 {} X Y Z C H {} Y X Z C',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 10,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 11,
            'isi_soal' => '7 {} X Y Z C H {} X Y Z C',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 12,
            'isi_soal' => '7 {} X Y Z C H {} X C H Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 13,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 14,
            'isi_soal' => '7 {} X Y Z C H {} H C Y Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 15,
            'isi_soal' => '7 {} X Y Z C H {} Y X H Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 16,
            'isi_soal' => '7 {} X Y Z C H {} Y X C H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 17,
            'isi_soal' => '7 {} X Y Z C H {} H C Z Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 18,
            'isi_soal' => '7 {} X Y Z C H {} Y X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 19,
            'isi_soal' => '7 {} X Y Z C H {} Y H C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 20,
            'isi_soal' => '7 {} X Y Z C H {} X Y C H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 21,
            'isi_soal' => '7 {} X Y Z C H {} C Y X Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 22,
            'isi_soal' => '7 {} X Y Z C H {} Y X Z C',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 23,
            'isi_soal' => '7 {} X Y Z C H {} Y H Z C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 24,
            'isi_soal' => '7 {} X Y Z C H {} X H Z C',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 25,
            'isi_soal' => '7 {} X Y Z C H {} C H Y Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 26,
            'isi_soal' => '7 {} X Y Z C H {} X Z C Y',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 27,
            'isi_soal' => '7 {} X Y Z C H {} X Y Z H',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 28,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 29,
            'isi_soal' => '7 {} X Y Z C H {} H Y Z X',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 30,
            'isi_soal' => '7 {} X Y Z C H {} Y Z H C',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 31,
            'isi_soal' => '7 {} X Y Z C H {} X Y C H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 32,
            'isi_soal' => '7 {} X Y Z C H {} C Y Z X',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 33,
            'isi_soal' => '7 {} X Y Z C H {} H Y C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 34,
            'isi_soal' => '7 {} X Y Z C H {} H C Y Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 35,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 36,
            'isi_soal' => '7 {} X Y Z C H {} C Y X Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 37,
            'isi_soal' => '7 {} X Y Z C H {} H X Y Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 38,
            'isi_soal' => '7 {} X Y Z C H {} C H Y Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 39,
            'isi_soal' => '7 {} X Y Z C H {} Y X C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 40,
            'isi_soal' => '7 {} X Y Z C H {} X Y H Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 41,
            'isi_soal' => '7 {} X Y Z C H {} X Y Z H',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 42,
            'isi_soal' => '7 {} X Y Z C H {} H C Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 43,
            'isi_soal' => '7 {} X Y Z C H {} H Z Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 44,
            'isi_soal' => '7 {} X Y Z C H {} X H C Z',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 45,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 46,
            'isi_soal' => '7 {} X Y Z C H {} X Y C H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 47,
            'isi_soal' => '7 {} X Y Z C H {} C Y Z X',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 48,
            'isi_soal' => '7 {} X Y Z C H {} H Y X C',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 49,
            'isi_soal' => '7 {} X Y Z C H {} Y X Z H',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 300 + 50,
            'isi_soal' => '7 {} X Y Z C H {} C H Y X',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // ======================= KOLOM 8 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 1,
            'isi_soal' => '8 {} J H G T Q {} G H T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 2,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 3,
            'isi_soal' => '8 {} J H G T Q {} Q J T H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 4,
            'isi_soal' => '8 {} J H G T Q {} H J Q T',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 5,
            'isi_soal' => '8 {} J H G T Q {} H J G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 6,
            'isi_soal' => '8 {} J H G T Q {} G J T H',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 7,
            'isi_soal' => '8 {} J H G T Q {} J T Q G',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 8,
            'isi_soal' => '8 {} J H G T Q {} G H T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 9,
            'isi_soal' => '8 {} J H G T Q {} Q J H G',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 10,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 11,
            'isi_soal' => '8 {} J H G T Q {} Q H T G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 12,
            'isi_soal' => '8 {} J H G T Q {} H J G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 13,
            'isi_soal' => '8 {} J H G T Q {} G J H T',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 14,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 15,
            'isi_soal' => '8 {} J H G T Q {} H Q T J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 16,
            'isi_soal' => '8 {} J H G T Q {} J H Q G',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 17,
            'isi_soal' => '8 {} J H G T Q {} G H T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 18,
            'isi_soal' => '8 {} J H G T Q {} Q H 6 J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 19,
            'isi_soal' => '8 {} J H G T Q {} J H T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 20,
            'isi_soal' => '8 {} J H G T Q {} G H J Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 21,
            'isi_soal' => '8 {} J H G T Q {} J H G T',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 22,
            'isi_soal' => '8 {} J H G T Q {} T Q H G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 23,
            'isi_soal' => '8 {} J H G T Q {} G H J T',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 24,
            'isi_soal' => '8 {} J H G T Q {} H G J Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 25,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 26,
            'isi_soal' => '8 {} J H G T Q {} Q H T J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 27,
            'isi_soal' => '8 {} J H G T Q {} H J G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 28,
            'isi_soal' => '8 {} J H G T Q {} G J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 29,
            'isi_soal' => '8 {} J H G T Q {} Q T J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 30,
            'isi_soal' => '8 {} J H G T Q {} H J G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 31,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 32,
            'isi_soal' => '8 {} J H G T Q {} H Q T G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 33,
            'isi_soal' => '8 {} J H G T Q {} H G J T',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 34,
            'isi_soal' => '8 {} J H G T Q {} T Q J H',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 35,
            'isi_soal' => '8 {} J H G T Q {} Q H T J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 36,
            'isi_soal' => '8 {} J H G T Q {} J H G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 37,
            'isi_soal' => '8 {} J H G T Q {} H T J Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 38,
            'isi_soal' => '8 {} J H G T Q {} G J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 39,
            'isi_soal' => '8 {} J H G T Q {} H Q T J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 40,
            'isi_soal' => '8 {} J H G T Q {} G J Q T',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 41,
            'isi_soal' => '8 {} J H G T Q {} J Q H T',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 42,
            'isi_soal' => '8 {} J H G T Q {} H Q G T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 43,
            'isi_soal' => '8 {} J H G T Q {} H Q T G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 44,
            'isi_soal' => '8 {} J H G T Q {} G H Q J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 45,
            'isi_soal' => '8 {} J H G T Q {} Q T H J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 46,
            'isi_soal' => '8 {} J H G T Q {} J G Q T',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 47,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 48,
            'isi_soal' => '8 {} J H G T Q {} H J T Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 49,
            'isi_soal' => '8 {} J H G T Q {} Q H T J',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 350 + 50,
            'isi_soal' => '8 {} J H G T Q {} T J G Q',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // ======================= KOLOM 9 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 1,
            'isi_soal' => '9 {} R G J N S {} N G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 2,
            'isi_soal' => '9 {} R G J N S {} G R S J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 3,
            'isi_soal' => '9 {} R G J N S {} S G R N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 4,
            'isi_soal' => '9 {} R G J N S {} N G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 5,
            'isi_soal' => '9 {} R G J N S {} G R N J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 6,
            'isi_soal' => '9 {} R G J N S {} S G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 7,
            'isi_soal' => '9 {} R G J N S {} S N G R',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 8,
            'isi_soal' => '9 {} R G J N S {} S R G J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 9,
            'isi_soal' => '9 {} R G J N S {} S N J R',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 10,
            'isi_soal' => '9 {} R G J N S {} G N J R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 11,
            'isi_soal' => '9 {} R G J N S {} R G J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 12,
            'isi_soal' => '9 {} R G J N S {} N G J R',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 13,
            'isi_soal' => '9 {} R G J N S {} N G S R',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 14,
            'isi_soal' => '9 {} R G J N S {} S G R N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 15,
            'isi_soal' => '9 {} R G J N S {} S G J R',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 16,
            'isi_soal' => '9 {} R G J N S {} S G R N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 17,
            'isi_soal' => '9 {} R G J N S {} G R S N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 18,
            'isi_soal' => '9 {} R G J N S {} G R S J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 19,
            'isi_soal' => '9 {} R G J N S {} R G S N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 20,
            'isi_soal' => '9 {} R G J N S {} N G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 21,
            'isi_soal' => '9 {} R G J N S {} S G R N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 22,
            'isi_soal' => '9 {} R G J N S {} S G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 23,
            'isi_soal' => '9 {} R G J N S {} R G S N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 24,
            'isi_soal' => '9 {} R G J N S {} N S R G',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 25,
            'isi_soal' => '9 {} R G J N S {} G J R S',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 26,
            'isi_soal' => '9 {} R G J N S {} S G N J',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 27,
            'isi_soal' => '9 {} R G J N S {} S R G N',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 28,
            'isi_soal' => '9 {} R G J N S {} R S J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 29,
            'isi_soal' => '9 {} R G J N S {} G R S J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 30,
            'isi_soal' => '9 {} R G J N S {} S N G R',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 31,
            'isi_soal' => '9 {} R G J N S {} J R N S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 32,
            'isi_soal' => '9 {} R G J N S {} S N J G',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 33,
            'isi_soal' => '9 {} R G J N S {} G R J S',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 34,
            'isi_soal' => '9 {} R G J N S {} S N R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 35,
            'isi_soal' => '9 {} R G J N S {} S J R N',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 36,
            'isi_soal' => '9 {} R G J N S {} S G J R',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 37,
            'isi_soal' => '9 {} R G J N S {} G S J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 38,
            'isi_soal' => '9 {} R G J N S {} G R S J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 39,
            'isi_soal' => '9 {} R G J N S {} R S J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 40,
            'isi_soal' => '9 {} R G J N S {} N R J S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 41,
            'isi_soal' => '9 {} R G J N S {} G R S J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 42,
            'isi_soal' => '9 {} R G J N S {} G N R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 43,
            'isi_soal' => '9 {} R G J N S {} G N J S',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 44,
            'isi_soal' => '9 {} R G J N S {} S G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 45,
            'isi_soal' => '9 {} R G J N S {} N G R J',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 46,
            'isi_soal' => '9 {} R G J N S {} S R J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 47,
            'isi_soal' => '9 {} R G J N S {} N J R S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 48,
            'isi_soal' => '9 {} R G J N S {} R S J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 49,
            'isi_soal' => '9 {} R G J N S {} N J R S',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 400 + 50,
            'isi_soal' => '9 {} R G J N S {} G S J N',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // ======================= KOLOM 10 =======================
        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 1,
            'isi_soal' => '10 {} F L M W T {} M W T L',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 2,
            'isi_soal' => '10 {} F L M W T {} M L F T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 3,
            'isi_soal' => '10 {} F L M W T {} L F T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 4,
            'isi_soal' => '10 {} F L M W T {} L W M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 5,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 6,
            'isi_soal' => '10 {} F L M W T {} W T F M',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 7,
            'isi_soal' => '10 {} F L M W T {} M F T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 8,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 9,
            'isi_soal' => '10 {} F L M W T {} L F T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 10,
            'isi_soal' => '10 {} F L M W T {} M L F T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 11,
            'isi_soal' => '10 {} F L M W T {} L F W M',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 12,
            'isi_soal' => '10 {} F L M W T {} M L W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 13,
            'isi_soal' => '10 {} F L M W T {} L F T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 14,
            'isi_soal' => '10 {} F L M W T {} T F W M',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 15,
            'isi_soal' => '10 {} F L M W T {} M L T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 16,
            'isi_soal' => '10 {} F L M W T {} L F T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 17,
            'isi_soal' => '10 {} F L M W T {} M L W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 18,
            'isi_soal' => '10 {} F L M W T {} L F T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 19,
            'isi_soal' => '10 {} F L M W T {} M W F T',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 20,
            'isi_soal' => '10 {} F L M W T {} F L T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 21,
            'isi_soal' => '10 {} F L M W T {} L F W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 22,
            'isi_soal' => '10 {} F L M W T {} M L W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 23,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 24,
            'isi_soal' => '10 {} F L M W T {} M L T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 25,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 26,
            'isi_soal' => '10 {} F L M W T {} L T W F',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 27,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 28,
            'isi_soal' => '10 {} F L M W T {} L W F T',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 29,
            'isi_soal' => '10 {} F L M W T {} M F T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 30,
            'isi_soal' => '10 {} F L M W T {} M F L T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 31,
            'isi_soal' => '10 {} F L M W T {} L W F T',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 32,
            'isi_soal' => '10 {} F L M W T {} L W M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 33,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 34,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 35,
            'isi_soal' => '10 {} F L M W T {} L M W T',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 36,
            'isi_soal' => '10 {} F L M W T {} T F W L',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 37,
            'isi_soal' => '10 {} F L M W T {} L F M W',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 38,
            'isi_soal' => '10 {} F L M W T {} L F T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 39,
            'isi_soal' => '10 {} F L M W T {} T W F L',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 40,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 41,
            'isi_soal' => '10 {} F L M W T {} M F T L',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 42,
            'isi_soal' => '10 {} F L M W T {} L F M W',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 43,
            'isi_soal' => '10 {} F L M W T {} T F W L',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 44,
            'isi_soal' => '10 {} F L M W T {} L T W M',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 45,
            'isi_soal' => '10 {} F L M W T {} L F T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 46,
            'isi_soal' => '10 {} F L M W T {} W F T L',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 47,
            'isi_soal' => '10 {} F L M W T {} L F M T',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 48,
            'isi_soal' => '10 {} F L M W T {} M F T L',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 49,
            'isi_soal' => '10 {} F L M W T {} M L T W',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSPCM001',
            'nomor_soal' => 450 + 50,
            'isi_soal' => '10 {} F L M W T {} L F T M',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

    }
}
