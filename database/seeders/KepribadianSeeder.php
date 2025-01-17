<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Database\Seeder;

class KepribadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder paket, soal, dan jawaban kepribadian paket 1
        Paket::create([
            'id' => 'POLPKR001',
            'nama_paket' => 'Tryout Psikologi Kepribadian Paket 1',
            'harga_paket' => 0,
            'durasi_paket' => 3600,
            'aturan_paket' => '
                Berikut adalah cara menjawab soal: <br>
                Pilihlah A bila anda SANGAT TIDAK SESUAI dengan pernyataan tersebut. <br>
                Pilihlah B bila anda TIDAK SESUAI dengan pernyataan tersebut. <br>
                Pilihlah C bila anda SESUAI dengan pernyataan tersebut. <br>
                Pilihlah D bila anda SANGAT SESUAI dengan pernyataan tersebut. <br>
                CONTOH: <br>
                NO	Pernyataan <br>
                1	Pemimpin lebih utama dibanding relawan',
        ]);

        // Nomor 1
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1,
            'isi_soal' => 'Saya ikut menyumbang sedikit uang saku saya untuk sekedar membantu teman yang sakit daripada menabung.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Selalu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Sering',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jarang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sekali Saja',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Tidak Pernah',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 2,
            'isi_soal' => 'Saya lebih tertarik untuk mencoba hal-hal baru dibandingkan melakukan pekerjaan rutin.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Tidak Tahu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 3,
            'isi_soal' => 'Saya lebih memilih mengekspresikan kekecewaan saya dalam bentuk gurauan daripada mengekspresikan apa adanya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Selalu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Sering',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jarang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sekali Saja',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Tidak Pernah',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 4,
            'isi_soal' => 'Dalam sebuah diskusi, saya lebih memilih diam dan mengamati daripada memberikan pendapat yang belum tentu benar.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Tidak Tahu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 5,
            'isi_soal' => 'Saat merasa marah saya memilih diam daripada keluar dari ruangan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Selalu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Sering',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jarang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sekali Saja',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Tidak Pernah',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 6,
            'isi_soal' => 'Mengikuti pendapat teman tidak lebih baik dibanding pendapat sendiri dalam menyelesaikan tugas.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Tidak Tahu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Sesuai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 7,
            'isi_soal' => 'Dalam menyelesaikan masalah, saya cenderung emosional daripada rasional.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Selalu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Sering',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jarang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sekali Saja',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Tidak Pernah',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 8,
            'isi_soal' => 'Saya akan langsung marah apabila teman saya tidak sengaja merusak buku yang dia pinjam.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 9,
            'isi_soal' => 'Saya bisa bertoleransi apabila ada teman yang menggunakan barang tanpa izin.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 10,
            'isi_soal' => 'Saat apa yang diharapkan tidak menjadi kenyataan, saya akan sangat kecewa.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 11,
            'isi_soal' => 'Saya sering merasa jengkel apabila ada teman yang menyela pembicaraan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 12,
            'isi_soal' => 'Saya sulit menerima teguran meskipun itu dari orangtua.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 13,
            'isi_soal' => 'Apabila ada teman yang bercanda menyinggung perasaan, saya tidak marah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 14,
            'isi_soal' => 'Ketika gagal mencapai sesuatu saya melakukan introspeksi dan memperbaiki upaya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 15,
            'isi_soal' => 'Apabila ada teman yang salah memanggil nama, saya akan langsung tersinggung.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 16,
            'isi_soal' => 'Jika hal-hal kecil merusak rencana besar, saya dengan cepat melakukan evaluasi.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 17,
            'isi_soal' => 'Saya langsung menggerutu saat pulang sekolah yang tiba-tiba hujan lebat.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 18,
            'isi_soal' => 'Saya memaklumi apabila teman satu kelompok melakukan kesalahan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 19,
            'isi_soal' => 'Saya lebih suka bercerita kepada sahabat dekat saat memiliki masalah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 20,
            'isi_soal' => 'Saya meninggalkan ruangan diskusi saat terjadi perdebatan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 21,
            'isi_soal' => 'Saya mengkoordinir teman-teman kelas mengumpulkan uang untuk membantu bencana tanah longsor.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 22,
            'isi_soal' => 'Saya enggan menjadi relawan bencana karena hal tersebut akan merepotkan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 23,
            'isi_soal' => 'Ketika menolong orang lain perasaan saya biasa saja.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 24,
            'isi_soal' => 'Saya tidak pernah mengikuti organisasi apapun, karena hal itu membuang-buang waktu.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 25,
            'isi_soal' => 'Saya memilih tidur di rumah daripada mengikuti kerja bakti di lingkungan tempat tinggal.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 26,
            'isi_soal' => 'Mengikuti organisasi merupakan hal yang merepotkan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 27,
            'isi_soal' => 'Saya akan datang takziah ke rumah duka di lingkungan tempat tinggal hanya jika disuruh oleh orangtua.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 28,
            'isi_soal' => 'Saya sesekali tidak mengikuti kegiatan yang diadakan di lingkungan tempat tinggal, seperti perayaan HUT RI.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 29,
            'isi_soal' => 'Saya menyumbangkan sebagian tabungan untuk korban bencana alam.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 30,
            'isi_soal' => 'Saya rutin menyumbangkan pakaian ke panti asuhan setiap akhir tahun.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 31,
            'isi_soal' => 'Saya mengikuti rapat di karang taruna di lingkungan tempat tinggal hanya jika ada waktu luang.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 32,
            'isi_soal' => 'Saya membantu mengajar TPA di masjid dekat rumah hanya jika ada waktu luang.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 33,
            'isi_soal' => 'Saya memberikan bantuan kepada tetangga hanya jika diminta saja.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 34,
            'isi_soal' => 'Saya hanya mau berteman dengan anak-anak yang cerdas.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 35,
            'isi_soal' => 'Saya merasa minder jika berada di antara teman-teman yang pintar.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 36,
            'isi_soal' => 'Saya merasa canggung dengan orang lain selain keluarga, meskipun dengan teman satu kelas.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 37,
            'isi_soal' => 'Saya dapat membuat topik pembicaraan yang menyenangkan meskipun di lingkungan baru.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 38,
            'isi_soal' => 'Saya sesekali merasa rendah diri dan tidak nyaman berada di antara para senior.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 39,
            'isi_soal' => 'Saya sulit untuk tidur nyenyak apabila bukan di kamar sendiri.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 40,
            'isi_soal' => 'Saya tidak suka makan jika bukan masakan dari ibu.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 41,
            'isi_soal' => 'Saya mudah kelelahan jika mengikuti kegiatan seperti berkemah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 42,
            'isi_soal' => 'Saya tidak dapat tidur jika tidak ada lampu.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 43,
            'isi_soal' => 'Saya dapat mandi di mana saja, meskipun itu di sungai.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 44,
            'isi_soal' => 'Saya menyukai kegiatan mendaki gunung dengan teman-teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 45,
            'isi_soal' => 'Saya selalu merasa gugup saat berpidato di depan umum dengan banyak penonton.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 46,
            'isi_soal' => 'Saya senang menjadi pembawa acara pada saat acara PENSI di sekolah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 47,
            'isi_soal' => 'Saya selalu mengajukan diri menjadi pemimpin upacara bendera di sekolah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 48,
            'isi_soal' => 'Saya sering tiba-tiba lupa tentang hal yang harus disampaikan saat presentasi di depan kelas.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 49,
            'isi_soal' => 'Saya takut menyapa orang terlebih dahulu saat berpapasan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 50,
            'isi_soal' => 'Saya sering ragu-ragu saat mengulang perintah dengan tepat dan benar.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 51
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 51,
            'isi_soal' => 'Saya sering ragu-ragu dalam menjawab soal dari guru.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 52
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 52,
            'isi_soal' => 'Saya membutuhkan dukungan dari orang lain untuk melakukan sesuatu hal.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 53
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 53,
            'isi_soal' => 'Saya selalu menghitung sejumlah uang dengan teliti dan yakin hitungan tersebut benar.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 54
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 54,
            'isi_soal' => 'Saya berusaha melakukan segala sesuatu dengan baik.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 55
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 55,
            'isi_soal' => 'Saya berusaha melakukan sesuatu hal dengan baik, supaya orang lain berpendapat saya adalah orang yang baik.',
            'gambar_soal' => null,
            'nomor_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 56
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 56,
            'isi_soal' => 'Saya mengerjakan pekerjaan rumah dengan cepat ketika diawasi orangtua.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 57
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 57,
            'isi_soal' => 'Saya merasa tidak nyaman belajar jika diawasi oleh orangtua.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 58
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 58,
            'isi_soal' => 'Saya mengerjakan dengan menyalin pekerjaan teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 59
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 59,
            'isi_soal' => 'Meskipun teman satu kelas saling mencontek, saya memilih mengerjakan sendiri.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 60
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 60,
            'isi_soal' => 'Saya selalu mencatat dengan rapi setiap pelajaran.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 61
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 61,
            'isi_soal' => 'Saya selalu belajar sehari sebelum ujian dilaksanakan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 62
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 62,
            'isi_soal' => 'Saya malas menyalin catatan, dan meminjam catatan teman untuk difotokopi.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 63
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 63,
            'isi_soal' => 'Mendengarkan guru menjelaskan mata pelajaran merupakan hal yang membosankan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 64
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 64,
            'isi_soal' => 'Saya selalu melatih kembali fisik saya sehari sebelum tes kebugaran dilakukan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 65
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 65,
            'isi_soal' => 'Saya mengerjakan ujian tanpa menyontek, meskipun hampir semua teman satu kelas saling mencontek.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 66
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 66,
            'isi_soal' => 'Saya belajar dengan giat agar berprestasi, lebih dari teman-teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 67
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 67,
            'isi_soal' => 'Saya mengikuti hati nurani saat mengikuti pendaftaran polisi.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 68
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 68,
            'isi_soal' => 'Saya mendaftar polisi sesuai arahan dari orangtua.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 69
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 69,
            'isi_soal' => 'Saya mengambil jurusan SMA sesuai dengan keinginan saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 70
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 70,
            'isi_soal' => 'Saya meminta pendapat pramuniaga untuk memutuskan akan membeli baju motif yang sesuai dengan saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 71
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 71,
            'isi_soal' => 'Saya masuk SMA favorit karena keinginan diri sendiri.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 72
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 72,
            'isi_soal' => 'Saya sering berpikir cukup lama dalam memutuskan pilihan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 73
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 73,
            'isi_soal' => 'Saya senang saat orang lain memberikan masukan dalam pengambilan keputusan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 74
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 74,
            'isi_soal' => 'Saya mudah tidak yakin dalam mengambil sebuah keputusan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 75
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 75,
            'isi_soal' => 'Saya sering merasa takut bahwa keputusan yang saya ambil salah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 76
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 76,
            'isi_soal' => 'Saya tidak ragu-ragu dalam menentukan pilihan untuk masa depan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 77
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 77,
            'isi_soal' => 'Saya memilih masuk polisi berdasarkan minat dan kemampuan saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 78
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 78,
            'isi_soal' => 'Saya selalu datang ke sekolah tepat waktu, tanpa terlambat.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 79
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 79,
            'isi_soal' => 'Saat teman membicarakan kesalahan teman yang lain, saya berusaha tidak ikut berpendapat.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 80
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 80,
            'isi_soal' => 'Saya selalu bersedekah pada hari jumat di sekolah.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 81
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 81,
            'isi_soal' => 'Saat mengendarai motor dan membonceng ayah saya yang berstatus anggota polisi lalu lintas, saya tetap menggunakan helm.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 82
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 82,
            'isi_soal' => 'Saya sering mangkir dari piket kelas yang sudah dijadwalkan.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 83
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 83,
            'isi_soal' => 'Saya sesekali menyeberang jalan tidak melalui zebracross.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 84
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 84,
            'isi_soal' => 'Saya tetap tidak mau mengendarai motor meskipun diizinkan orangtua, karena belum memiliki SIM.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 85
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 85,
            'isi_soal' => 'Saya sesekali mengumpulkan tugas paling akhir.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 86
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 86,
            'isi_soal' => 'Saya sering pulang sekolah terlambat karena nongkrong dengan teman-teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 87
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 87,
            'isi_soal' => 'Saya membolos sekolah biasanya untuk bermain dengan teman-teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 88
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 88,
            'isi_soal' => 'Saat orangtua meminta pertolongan, saya lekas membantu.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 89
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 89,
            'isi_soal' => 'Saya akan mengerjakan tugas saya, baru setelah itu membantu tugas teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 90
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 90,
            'isi_soal' => 'Saya akan membantu teman yang kesulitan dalam mengerjakan tugas hanya jika dia meminta.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 91
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 91,
            'isi_soal' => 'Saya selalu berusaha terbuka dalam kerja kelompok.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 92
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 92,
            'isi_soal' => 'Saya berusaha membantu semua anggota kelompok untuk paham dengan jawaban dari saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 93
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 93,
            'isi_soal' => 'Saya selalu berusaha jujur dalam berkomunikasi dengan siapapun.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 94
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 94,
            'isi_soal' => 'Saya selalu berusaha akrab dengan semua anggota kelompok saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 95
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 95,
            'isi_soal' => 'Saya sering diam ketika berkegiatan dengan anggota kelompok.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 96
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 96,
            'isi_soal' => 'Saya lebih senang ketika mendapat tugas kerja kelompok karena dapat berkumpul dan berbagi tugas bersama dengan teman-teman.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 97
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 97,
            'isi_soal' => 'Saya lebih senang mengerjakan tugas bersama-sama dan saling membantu.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 98
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 98,
            'isi_soal' => 'Di sekolah saya banyak mengikuti kegiatan yang berorganisasi dengan banyak orang.',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 99
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 99,
            'isi_soal' => 'Saya sering merasakan satu kelompok dengan teman-teman yang menurut saya tidak kompeten.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 100
        Soal::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 100,
            'isi_soal' => 'Saya keberatan berada dalam satu kelompok dengan rekan yang tidak sepemikiran dengan saya.',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Sangat Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tidak Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ragu-Ragu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'POLPKR001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sangat Setuju',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);
    }
}
