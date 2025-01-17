<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Database\Seeder;

class PassHandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder paket, soal, dan jawaban pass hand paket 1
        Paket::create([
            'id' => 'POLPPH001',
            'nama_paket' => 'Tryout Psikologi Pass Hand Paket 1',
            'harga_paket' => 0,
            'durasi_paket' => 2700,
            'aturan_paket' => '
                CONTOH: <br>
                NO	PERNYATAAN <br>
                1.	Saya takut bila berenang di sungai yang berair keruh <br>
                <br>
                Apabila anda merasa Pernyataan tersebut: <br>
                Pilihlah jawaban A jika pernyataan tersebut Menggambarkan Kondisi Anda <br>
                Pilihlah jawaban B jika pernyataan tersebut Tidak Menggambarkan Kondisi anda',
        ]);

        // Nomor 1
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1,
            'isi_soal' => 'Umumnya saya lebih suka bekerja sendiri dengan cara saya sendiri',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 2,
            'isi_soal' => 'Saya cepat mengenal orang baru',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 3,
            'isi_soal' => 'Kadang-kadang saya memikirkan kesalahan-kesalahan kecil yang telah saya lakukan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 4,
            'isi_soal' => 'Saya sering melakukan sesuatu tanpa berpikir',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 5,
            'isi_soal' => 'Saya sulit melupakan persoalan-persoalan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 6,
            'isi_soal' => 'Tidak menjadi masalah bagi saya untuk memulai pekerjaan yang sulit',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 7,
            'isi_soal' => 'Sekalipun semua orang tidak setuju, saya akan mengatakan apa yang saya pikirkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 8,
            'isi_soal' => 'Saya lebih suka jika orang lain yang menjadi pemimpin',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 9,
            'isi_soal' => 'Saya suka melakukan hal-hal yang sama seperti teman-teman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 10,
            'isi_soal' => 'Saya benar-benar mencoba memastikan bahwa saya tidak melukai perasaan orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 11,
            'isi_soal' => 'Saya suka melakukan sesuatu dengan hati-hati untuk memastikan pekerjaan itu dilakukan dengan benar sekalipun hal itu dapat mengorbankan sesuatu yang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 12,
            'isi_soal' => 'Banyak hal yang menyedihkan yang saya baca di buku atau di Koran',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 13,
            'isi_soal' => 'Seringkali sulit bagi saya untuk mengakui kesalahan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 14,
            'isi_soal' => 'Saya biasa menerima kehidupan apa adanya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 15,
            'isi_soal' => 'Saya berpendapat bahwa saya bekerja paling baik dalam satu tim',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 16,
            'isi_soal' => 'Saya selalu menaruh perhatian pada mode mutakhir',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 17,
            'isi_soal' => 'Saya lebih suka di rumah daripada mengunjungi pesta',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 18,
            'isi_soal' => 'Terlalu banyak kesakitan dan kesengsaraan di dunia ini',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 19,
            'isi_soal' => 'Saya tidak suka duduk diam berlama-lama',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 20,
            'isi_soal' => 'Saya cepat mencoba hal-hal baru yang menggairahkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 21,
            'isi_soal' => 'Saya percaya diri dalam banyak keadaan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 22,
            'isi_soal' => 'Saya tidak mudah marah seperti orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 23,
            'isi_soal' => 'Saya mendukung teman-teman saya apapun yang terjadi',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 24,
            'isi_soal' => 'Kadang-kadang saya khawatir mengenai apa yang dipikirkan orang lain tentang diri saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 25,
            'isi_soal' => 'saya hampir selalu mempunyai sesuatu untuk dikatakan dalam diskusi',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 26,
            'isi_soal' => 'Saya kadang-kadang tidak tidur memikirkan hal-hal kecil yang tidak berjalan dengan baik',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 27,
            'isi_soal' => 'Saya tidak keberatan memberitahukan orang lain mengenai perasaan pribadi saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 28,
            'isi_soal' => 'Saya tidak tahu apa yang akan saya lakukan tanpa teman-téman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 29,
            'isi_soal' => 'Saya sering melakukan sesuatu tanpa memberitahukan orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 30,
            'isi_soal' => 'Saya suka mempengaruhi orang lain untuk berpikir seperti yang saya pikirkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 31,
            'isi_soal' => 'Saya sering terganggu ketika melakukan sesuatu',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 32,
            'isi_soal' => 'Setelah mengambil keputusan, saya suka mengubah pikiran saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 33,
            'isi_soal' => 'Saya suka memperkenalkan seseorang kepada orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 34,
            'isi_soal' => 'Senangnya mempunyai rahasia adalah bahwa kita dapat meneruskannya kepada orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 35,
            'isi_soal' => 'Saya sulit mengambil keputusan jika hal itu akan mengganggu orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 36,
            'isi_soal' => 'Saya lebih suka mendengarkan daripada berbicara',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 37,
            'isi_soal' => 'Saya segera menyelesaikan jika sampai terjadi suatu argumentasi',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 38,
            'isi_soal' => 'Saya sudah puas dengan apa adanya saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 39,
            'isi_soal' => 'Saya mau orang lain meminta izin sebelum meminjam barang-barang saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 40,
            'isi_soal' => 'Saya suka menceritakan masalah-masalah saya kepada teman-teman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 41,
            'isi_soal' => 'Saya tidak berkeberatan mengerjakan perintah orang lain, jika perintah itu sesuai dengan kebutuhan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 42,
            'isi_soal' => 'Makanan sederhana pun sangat menarik bagi saya untuk dimakan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 43,
            'isi_soal' => 'Apabila saya bercerita, maka jarang melupakan hal yang mendetail dalam cerita itu',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 44,
            'isi_soal' => 'Saya sering menggambling (untung-untungan) atas apa yang saya lakukan',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 45,
            'isi_soal' => 'Tidak memutuskan sesuatu adalah suatu keputusan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 46,
            'isi_soal' => 'Untuk maju, orang tua yang kaya dan berpengaruh merupakan hal yang paling dominan',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 47,
            'isi_soal' => 'Saya tidak memerlukan suatu analisis diri karena saya sama saja dengan orang di sekitarku',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 48,
            'isi_soal' => 'Kegagalan sebenarnya hanyalah suatu fase dari kesuksesan yang tertunda',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 49,
            'isi_soal' => 'Biasanya komentar dan pendapat dalam koran sesuai dengan penilaianku',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 50,
            'isi_soal' => 'Saya yakin kehidupan yang tak terduga ini mungkin menjadi sesuatu yang membahagiakan dan menyenangkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 51
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 51,
            'isi_soal' => 'Saya tidak keberatan memberitahukan orang lain mengenai perasaan pribadi saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 52
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 52,
            'isi_soal' => 'Saya suka mempengaruhi orang lain untuk berpikir seperti yang saya pikirkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 53
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 53,
            'isi_soal' => 'Saya segera menyelesaikan jika sampai terjadi suatu argumentasi',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 54
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 54,
            'isi_soal' => 'Saya sering terganggu ketika melakukan sesuatu',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 55
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 55,
            'isi_soal' => 'Saya tidak tahu apa yang akan saya lakukan tanpa teman-teman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 56
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 56,
            'isi_soal' => 'Saya lebih suka mendengarkan daripada berbicara',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 57
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 57,
            'isi_soal' => 'Saya sering melakukan sesuatu tanpa memberitahukan orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 58
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 58,
            'isi_soal' => 'Saya sudah puas dengan apa adanya saya ',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 59
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 59,
            'isi_soal' => 'Saya suka memperkenalkan seseorang kepada orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 60
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 60,
            'isi_soal' => 'Saya sulit mengambil keputusan jika hal itu akan mengganggu orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 61
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 61,
            'isi_soal' => 'Setelah mengambil keputusan, saya suka mengubah pikiran saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 62
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 62,
            'isi_soal' => 'Senangnya mempunyai rahasia adalah bahwa kita dapat meneruskannya kepada orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 63
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 63,
            'isi_soal' => 'Saya tidak berkeberatan mengerjakan perintah orang lain, jika perintah itu sesuai dengan kebutuhan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 64
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 64,
            'isi_soal' => 'Saya suka menceritakan masalah-masalah saya kepada teman-teman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 65
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 65,
            'isi_soal' => 'Untuk maju, orang tua yang kaya dan berpengaruh merupakan hal yang paling dominan',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 66
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 66,
            'isi_soal' => 'Makanan sederhana pun sangat menarik bagi saya untuk dimakan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 67
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 67,
            'isi_soal' => 'Saya mau orang lain meminta izin sebelum meminjam barang-barang saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 68
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 68,
            'isi_soal' => 'Tidak memutuskan sesuatu adalah suatu keputusan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 69
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 69,
            'isi_soal' => 'Saya yakin kehidupan yang tak terduga ini mungkin menjadi sesuatu yang membahagiakan dan menyenangkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 70
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 70,
            'isi_soal' => 'Apabila saya bercerita, saya jarang melupakan hal yang mendetail dalam cerita itu',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 71
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 71,
            'isi_soal' => 'Saya sering menggambling (untung-untungan) atas apa yang saya lakukan',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 72
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 72,
            'isi_soal' => 'Kegagalan sebenamya hanyalah suatu fase dari kesuksesan yang tertunda',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 73
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 73,
            'isi_soal' => 'Saya tidak memerlukan suatu analisis diri karena saya sama saja dengan orang di sekitarku',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 74
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 74,
            'isi_soal' => 'Biasanya, komentar dan pendapat dalam koran sesuai dengan penilaianku',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 75
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 75,
            'isi_soal' => 'Tidak menjadi masalah bagi saya untuk memulai pekerjaan yang sulit',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 76
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 76,
            'isi_soal' => 'Saya sering melakukan sesuatu tanpa berpikir',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 77
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 77,
            'isi_soal' => 'Saya hampir selalu mempunyai sesuatu untuk dikatakan dalam diskusi',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 78
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 78,
            'isi_soal' => 'Kadang-kadang saya khawatir mengenai apa yang dipikirkan orang lain tentang diri saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 79
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 79,
            'isi_soal' => 'Umumnya saya lebih suka bekerja sendiri dengan cara saya sendiri',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 80
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 80,
            'isi_soal' => 'Saya benar-benar mencoba memastikan bahwa saya tidak melukai perasaan orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 81
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 81,
            'isi_soal' => 'Kadang-kadang saya memikirkan kesalahan-kesalahan kecil yang telah saya lakukan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 82
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 82,
            'isi_soal' => 'Saya sulit melupakan persoalan-persoalan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 83
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 83,
            'isi_soal' => 'Saya kadang-kadang tidak tidur memikirkan hal-hal kecil yang tidak berjalan dengan baik',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 84
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 84,
            'isi_soal' => 'Saya cepat mengenal orang baru',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 85
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 85,
            'isi_soal' => 'Saya mendukung teman-teman saya apapun yang terjadi',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 86
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 86,
            'isi_soal' => 'Saya cepat mencoba hal-hal baru yang menggairahkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 87
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 87,
            'isi_soal' => 'Sekalipun semua orang tidak setuju, saya akan mengatakan apa yang saya pikirkan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 88
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 88,
            'isi_soal' => 'Saya berpendapat bahwa saya bekerja paling baik dalam satu tim',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 89
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 89,
            'isi_soal' => 'Saya lebih suka di rumah daripada mengunjungi pesta',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 90
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 90,
            'isi_soal' => 'Saya lebih suka jika orang lain yang menjadi pemimpin',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 91
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 91,
            'isi_soal' => 'Saya percaya diri dalam banyak keadaan',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 92
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 92,
            'isi_soal' => 'Seringkali sulit bagi saya untuk mengakui kesalahan saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 93
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 93,
            'isi_soal' => 'Saya tidak mudah marah seperti orang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 94
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 94,
            'isi_soal' => 'Terlalu banyak kesakitan dan kesengsaraan di dunia ini',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 95
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 95,
            'isi_soal' => 'Saya suka melakukan sesuatu dengan hati-hati untuk memastikan pekerjaan itu dilakukan dengan benar sekalipun hal itu dapat mengorbankan sesuatu yang lain',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 96
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 96,
            'isi_soal' => 'Saya tidak suka duduk diam berlama-lama',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 97
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 97,
            'isi_soal' => 'Saya suka melakukan hal-hal yang sama seperti teman-teman saya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 98
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 98,
            'isi_soal' => 'Saya biasa menerima kehidupan apa adanya',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 99
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 99,
            'isi_soal' => 'Banyak hal menyedihkan yang saya baca di buku atau di koran',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 100
        Soal::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 100,
            'isi_soal' => 'Saya selalu menaruh perhatian pada mode mutakhir',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPPH001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);
    }
}
