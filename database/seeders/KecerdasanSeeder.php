<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Database\Seeder;

class KecerdasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder paket, soal, dan jawaban kecerdasan paket 1
        Paket::create([
            'id' => 'PNSTKP001',
            'nama_paket' => 'Tryout Psikologi Kecerdasan Paket 1',
            'harga_paket' => 0,
            'durasi_paket' => 5400,
            'aturan_paket' => '
                Selamat datang para peserta tes psikologi <br>

                Sebelum mengerjakan tes, bacalah petunjuk pengerjaan tes psikologi ini dengan saksama. <br>

                Dalam tes kecerdasan ini, Anda akan dihadapkan pada serangkaian soal dimana masing-masing
                persoalan memiliki cara mengerjakan sendiri-sendiri. Anda diminta untuk membaca setiap
                Soal yang ada, dan memberikan jawaban sesuai jawaban yang menurut Anda paling benar.
                Perlu diingat masing-masing soal memiliki jumlah jawaban yang berbeda-beda, ada yang soal
                dengan satu jawaban yang benar dan adapula soal dengan dua jawaban yang benar.
                Adapunpetunjuk untuk mengerjakan soal berpedoman pada beberapa tipe soal yang
                dicontohkan berikut ini: <br>

                Contoh 1. Pilihlah dua kata yang memiliki makna yang sama <br>
                a) Duka b) Buruk c) Sulit d) Sedih e) Jelek <br>

                Pada tipe soal ini Anda diminta untuk mencari dua kata dari pilihan jawaban yang mempunyai
                makna sama atau yang paling dekat. Pada contoh soal di atas terdapat kata "Duka" dan
                "Sedih"memiliki arti sama yaitu suasana hati yang tidak enak. Maka jawaban yang tepat adalah
                pilihan hurut a dan d. <br>

                Contoh 2. Pilihlah dua kata yang memiliki makna yang berlawanan <br>
                a) Lemas b) Lembut c) Licin d) Keras e) Tebal <br>

                Pada tipe soal ini Anda diminta untuk mencari dua kata dari pilihan jawaban yang mempunyai
                arti berlawanan atau yang paling jauh. Pada contoh soal di atas terdapat kata "Lembut" dan
                "keras" memniliki arti berlawanan, Maka jawaban yang tepat adalah pilihan huruf b dan d. <br>

                Contoh 3. Basah : Kering = ......... : .......... <br>
                a) Rentan b) Rawan c) Sayang d) Baik e) Buruk <br>

                Pada tipe soal ini Anda diminta untuk mencari jawaban dua kata yang memiliki hubungan yang
                sama dengan pasangan kata pada soal. Pada contoh diatas, hubungan dari kata "Basah" dan
                "Kering" adalah lawan katanya, maka dari pilihan jawaban yang memiliki hubungan lawan
                kata adalah "Baik"dan "Buruk" Maka jawaban yang tepat adalah pilihan huruf d dan e.',
        ]);

        // Nomor 1
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1,
            'isi_soal' => 'Pilihlah dua kata yang memiliki makna yang berlawanan',
            'gambar_soal' => null,
            'nomor_jawaban' => 14,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Imigrasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Pemukiman',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Imigrasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Emigrasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 0,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Migrasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 2
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 2,
            'isi_soal' => 'Pilihlah dua kata yang memiliki makna yang berlawanan',
            'gambar_soal' => null,
            'nomor_jawaban' => 25,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Eksentrik',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Internal',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Konsensus',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Keserasian',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 1,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Ekstrinsik',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 3
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 3,
            'isi_soal' => 'Pilihlah dua kata yang memiliki makna yang berlawanan',
            'gambar_soal' => null,
            'nomor_jawaban' => 12,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Defensif',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Ofensif',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pasif',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Bertahan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 2,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Serangan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 4
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 4,
            'isi_soal' => 'Pilihlah dua kata yang memiliki makna yang berlawanan',
            'gambar_soal' => null,
            'nomor_jawaban' => 35,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Konsekuen',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Konsisten',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Prominen',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Perintis',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 3,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Biasa',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 5
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 5,
            'isi_soal' => 'Pilihlah dua kata yang memiliki makna yang berlawanan',
            'gambar_soal' => null,
            'nomor_jawaban' => 35,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kesan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Final',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Khianat',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Mapan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 4,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Loyal',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 6
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 6,
            'isi_soal' => '',
            'gambar_soal' => '6.png',
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 5,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 7
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 7,
            'isi_soal' => '',
            'gambar_soal' => '7.png',
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 6,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 8
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 8,
            'isi_soal' => '',
            'gambar_soal' => '8.png',
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 7,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 9
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 9,
            'isi_soal' => '',
            'gambar_soal' => '9.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 8,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 10
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 10,
            'isi_soal' => '',
            'gambar_soal' => '10.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 9,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 11
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 11,
            'isi_soal' => 'Tino senang menabung. Setiap hari kecuali Minggu, Tino diberi uang saku oleh orang tuanya sebanyak Rp. 5000. Biasanya Tino hanya membelanjakan uangnya sebanyak Rp. 1.500,- / hari dan sisanya ditabung di celengan. Berapa banyak uang pecahan Rp.500 yang Tino peroleh jika membongkar celengan selama seminggu?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '49',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '42',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '64',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '56',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 10,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '48',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 12
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 12,
            'isi_soal' => 'Jika seorang buruh digaji selama satu bulan (30 hari) sejumlah Rp. 1.311.000 / bulan karena tidak masuk selama 7 hari, maka berapakah upah per hari buruh tersebut?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Rp50.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Rp50.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Rp47.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Rp45.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 11,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Rp57.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 13
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 13,
            'isi_soal' => 'Dido ingin menjadi seorang Polri, syarat menjadi seorang Polri adalah sehat jasmani. Awalnya Dido dapat berlari di halaman Gelora Bung Karno (GBK) sebanyak 3 putaran. Keliling halaman GBK adalah 700 m. Jika setiap minggu Dido mampu meningkatkan ketahanan berlarinya sebanyak 1 putaran, berapa putaran yang dapat dicapai Dido 4 minggu kemudian jika Dido berlari di Lapangan Bhayangkara Mabes Polri yang hanya 400 m?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '12 Putaran 100 m',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '12 Putaran 250 m',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '10 Putaran 50 m',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '10 Putaran 200 m',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 12,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '11 Putaran 450 m',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 14
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 14,
            'isi_soal' => 'Di dalam sebuah peti terdapat 7 pucuk senjata yang masing masing senjata memiliki tipe dan jenis yang berbeda. Jika di gudang senjata terdapat 137 peti senjata berapa banyak pucuk senjata yang ada di dalam gudang tersebut ?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '900',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '959',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '650',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '859',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 13,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '950',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 15
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 15,
            'isi_soal' => 'Desi menyewakan kedua mobilnya selama satu minggu. Mobil A disewakan dengan harga Rp.2.500/hari. Bila dari penyewaan kedua mobil tersebut Desi menerima uang sebesar Rp36.750,- maka mobil B disewakan Desi per hari dengan harga?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Rp2.600,-',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Rp2.600,-',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Rp2.700,-',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Rp.2.750,-',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 14,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Rp.3.000,-',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 16
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 16,
            'isi_soal' => 'Sebuah bus Trans Jakarta menempuh perjalanan dari halte Ragunan ke halte Kuningan dengan kecepatan rata-rata 40 km / jam dan kembali dengan kecepatan rata-rata 60 km / jam. Jika jarak dari halte Ragunan ke halte Kuningan adalah 120 km. Berapakah kecepatan rata- rata untuk seluruh perjalanan?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '46 km / jam',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '48 km / jam',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '50 km / jam',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '52 km / jam',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 15,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '72 km / jam',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 17
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 17,
            'isi_soal' => 'Demi menambah berat badannya agar dapat bersaing di kelasnya, Chris John berlatih beban selama 25 menit per hari dan banyak mengonsumsi makanan yang mengandung karbohidrat dan protein tinggi sehingga mampu menaikkan berat badannya sebanyak 5 kg. Seandainya Chris John meningkatkan waktu latihannya menjadi 50 menit tiap hari, maka kira-kira berapa kg berat badan yang dapat ia naikkan?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '5 kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '10 kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '15 kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '20 kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 16,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '20,5 kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 18
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 18,
            'isi_soal' => 'Demi menambah berat badannya agar dapat bersaing di kelasnya, Chris John berlatih beban selama 25 menit per hari dan banyak mengonsumsi makanan yang mengandung karbohidrat dan protein tinggi sehingga mampu menaikkan berat badannya sebanyak 5 kg. Seandainya Chris John meningkatkan waktu latihannya menjadi 50 menit tiap hari, maka kira-kira berapa kg berat badan yang dapat ia naikkan?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '20%',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '10%',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '7%',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '5%',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 17,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '2%',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 19
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 19,
            'isi_soal' => 'Dari hasil Klasmen sementara Liga Spanyol, Real Sociedad berada pada urutan sembilan  belas dari atas dan juga termasuk urutan sembilan belas dari bawah. Dari hasil klasmen sementara tersebut, ada berapa klub yang tergabung dalam Liga Spanyol tersebut?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '38 Klub',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '37 Klub',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '29 Klub',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '27 Klub',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 18,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '19 Klub',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 20
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 20,
            'isi_soal' => 'Dari hasil Klasmen sementara Liga Spanyol, Real Sociedad berada pada urutan sembilan  belas dari atas dan juga termasuk urutan sembilan belas dari bawah. Dari hasil klasmen sementara tersebut, ada berapa klub yang tergabung dalam Liga Spanyol tersebut?',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '25 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '10 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '50 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '100 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 19,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '150 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 21
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 21,
            'isi_soal' => '0	2	6	12	20	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '30',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '32',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '34',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '36',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 20,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '38',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 22
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 22,
            'isi_soal' => '4	11	14	21	24	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '42',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '40',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '37',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '34',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 21,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '31',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 23
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 23,
            'isi_soal' => '4	11	14	21	24	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '64',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '74',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '84',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '92',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 22,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '94',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 24
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 24,
            'isi_soal' => '3	9	9	6	10	10	9	11 ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '9',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '10',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '12',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '11',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 23,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '14',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 25
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 25,
            'isi_soal' => '16	12	15	13	14	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '11',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '12',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '13',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '14',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 24,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '15',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 26
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 26,
            'isi_soal' => 'Kaos : Kemeja	= Tirai : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kain',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Canopy',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jendela',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Taplak',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 25,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Gorden',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 27
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 27,
            'isi_soal' => 'Salmon : Sirip	= Kolibri : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ekor',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Madu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Paruh',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Sayap',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 26,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Bulu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 28
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 28,
            'isi_soal' => 'Telinga : Klakson = Hidung : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Lampu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Busuk',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Debu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Lubang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 27,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Cair',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 29
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 29,
            'isi_soal' => 'Taksi : Bajaj	= …… : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Mawar : Melati',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kaya : Miskin',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Kuda :  Keledai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Apel : Anggur',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 28,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Bus : Ojek',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 30
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 30,
            'isi_soal' => 'Kertas : Buku	= Lidi :  ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ijuk',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Tusuk gigi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Daun Kelapa',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Kayu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 29,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sapu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 31
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 31,
            'isi_soal' => '',
            'gambar_soal' => '31.png',
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '2-1-4-3',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-4-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-1-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '3-4-2-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 30,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '4-1-3-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 32
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 32,
            'isi_soal' => '',
            'gambar_soal' => '32.png',
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '3-1-5-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-4-5-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-1-5-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '3-5-4-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 31,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '3-5-1-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 33
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 33,
            'isi_soal' => '',
            'gambar_soal' => '33.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '2-1-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-1-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '3-4-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '2-3-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 32,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '1-3-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 34
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 34,
            'isi_soal' => '',
            'gambar_soal' => '34.png',
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '2-3-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-4-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '1-2-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '3-1-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 33,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '2-1-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 35
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 35,
            'isi_soal' => '',
            'gambar_soal' => '35.png',
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '1-3-4-2-5',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-4-1-2-5',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-4-5-1-3',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '3-2-4-1-5',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 34,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '3-2-4-5-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 36
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 36,
            'isi_soal' => 'Pamen peserta uji kelayakan mengikuti tes tertulis dan wawancara. Kompol Safitri dinyatakan tidak lulus uji kelayakan. Simpulan yang tepat tentang Kompol Safitri adalah ………',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kompol Safitri tidak mengikuti tes tertulis namun tidak ikut wawancara dalam uji kelayakan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kompol Safitri adalah perwira peserta uji kelayakan yang tidak ikut tes tertulis namun boleh  mengikuti wawancara.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Kompol Safitri bukan peserta uji kelayakan yang mengikuti tes tertulis dan wawancara.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Kompol Safitri telah mengikuti tes tertulis dan wawancara dalam uji kelayakan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 35,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Kompol Safitri tidak ikut uji kelayakan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 37
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 37,
            'isi_soal' => 'Semua Perwira Tinggi di Polri pandai berpidato dan berwibawa. Pak Sudirman adalah pimpinan yang berwibawa meski kurang pandai berpidato. Maka : ……...',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Pak Sudirman adalah Perwira Tinggi Polri yang sikapnya berwibawa.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Pak Sudirman bukan Perwira Tinggi Polri yang pandai berpidato.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pak Sudirman adalah Perwira Tinggi Polri yang pandai berpidato.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Pak Sudirman adalah Perwira Tinggi Polri yang berwibawa, meski kurang pandai dalam berpidato.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 36,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Pak Sudirman bukan Perwira Tinggi Polri, meski berwibawa.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 38
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 38,
            'isi_soal' => 'Semua anggota Polri selalu menjunjung nilai disiplin dan bersikap tegas. Meskipun Jawara kurang tegas dalam bersikap, namun ia sangat disiplin. Ini dapat berarti : ………',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Jawara seorang anggota Polri yang kurang bisa bersikap tegas.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Jawara bukan anggota Polri meski menunjukkan sikap disiplin.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Jawara bukan anggota Polri yang tegas meski disiplin.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Jawara seorang anggota Polri yang menjunjung nilai disiplin.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 37,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Jawara anggota Polri yang bersikap tegas.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 39
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 39,
            'isi_soal' => 'Memancing adalah aktifitas Kompol Mirzani setiap hari Minggu. Hari Minggu ini Kompol Mirzani banyak pekerjaan. Ini berarti ………',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Hari Minggu Kompol Mirzani tidak memancing.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kompol Mirzani memancing pada hari selain Minggu.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Hari Minggu Kompol Mirzani ragu untuk memancing.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Kompol Mirzani tidak memancing jika banyak pekerjaan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 38,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Hari Minggu ini Kompol Mirzani pergi memancing meskipun banyak pekerjaan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 40
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 40,
            'isi_soal' => 'Informasi yang Anda butuhkan dapat diperoleh melalui televisi, radio, atau koran. Anda tidak dapat menonton televisi karena tidak tersedia, maka : ………',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Anda tidak dapat memperoleh informasi dari koran dan radio.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Anda tidak dapat memperoleh informasi dari radio.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Anda tidak dapat membaca koran.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Anda tidak dapat memperoleh informasi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 39,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Anda tetap dapat memperoleh informasi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 41
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 41,
            'isi_soal' => 'Samsat Daan Mogot merekrut PHL sebanyak tiga kali jumlah PHL tahun lalu. Tahun lalu PHL nya berjumlah 29 orang, yang keluar tiga orang dan yang masuk sebanyak dua kali lipat dari jumlah yang keluar. Setelah itu jumlah PHL-nya tidak berubah hingga sekarang. Berapakah jumlah PHL Samsat Daan Mogot sekarang?',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '69 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '76 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '96 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '67 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 40,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '70 orang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 42
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 42,
            'isi_soal' => 'Seseorang saat ini berusia 6 windu. 5 tahun masa hidupnya ia habiskan di kota A dan 15 tahun di kota  Kemudian ia menghabiskan 17 tahun hidupnya di kota  Berapa tahun ia tinggal di tempatnya sekarang ini?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '11 tahun',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '12 tahun',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '13 tahun',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '10 tahun',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 41,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '9 tahun',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 43
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 43,
            'isi_soal' => 'Agar dapat sampai ke tempat tugas 2 kali lebih cepat dibandingkan dengan berjalan kaki, Kompol Bima sebaiknya mengendarai motor. Hari ini, Kompol Bima terpaksa berjalan kaki dari rumahnya ke tempat tugas dan itu menghabiskan waktu selama 50 menit. Jarak dari rumahnya ke tempat tugas adalah 1 km. Seandainya Kompol Bima pergi dari rumah ke tempat tugas dengan mengendarai motornya, maka berapa kecepatan rata-rata Kompol Bima untuk sampai ke tempat tugas dari rumahnya?',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '50 meter per menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '45 meter per menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '40 meter per menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '25 meter per menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 42,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '15 meter per menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 44
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 44,
            'isi_soal' => 'AKP Arini yang hendak apel pagi terjebak kemacetan parah di jalan Tendean selama setengah jam. AKP Arini berangkat dari rumah tepat pukul 06.00, namun karena macet, baru tiba di kantor pada pukul 08.30. Jika mobil AKP Arini berkecepatan rata-rata 50 km/jam, maka berapa jarak yang telah ditempuh AKP Arini dari rumah ke kantor?',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '125 km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '120 km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '115 km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '110 km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 43,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '100 km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 45
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 45,
            'isi_soal' => 'Pada HUT Bhayangkara 1 Juli 2017 rombongan Kapolri akan berkunjung ke kota Jayapur Rombongan tersebut berangkat dari Jakarta ke kota Jayapura pada pukul 07.00 dan tiba di kota Jayapura sekitar 5 jam kemudian. Jika waktu di kota Jakarta ternyata lebih cepat 1 jam dari kota Jayapura, maka pada pukul berapa tepatnya rombongan Kapolri tersebut tiba di kota Jayapura?',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '10.30',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '11.00',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '13.00',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '14.00',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 44,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '15.30',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 46
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 46,
            'isi_soal' => 'A	O	P	B	Q	R	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'T',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'T',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'W',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 45,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 47
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 47,
            'isi_soal' => 'A	C	F	J	O	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'T',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'U',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'V',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'W',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 46,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'X',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 48
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 48,
            'isi_soal' => 'Z	X	U	Q	L	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'F',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'G',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'H',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'I',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 47,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'J',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 49
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 49,
            'isi_soal' => 'A	N	C	P	F	S	J	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'T',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'U',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'V',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'W',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 48,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'X',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 50
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 50,
            'isi_soal' => 'C	B	A	P	Q	F	E	D	R	S	……',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'G',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'H',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'I',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'T',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 49,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'U',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 51
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 51,
            'isi_soal' => 'Evokasi = …………....',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Penilaian',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Penggugah rasa',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Penilaian',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Pengungsian',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 50,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Perkembangan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 52
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 52,
            'isi_soal' => 'Baku =  …………....',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Perkiraan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Umum',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Standar',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Normal',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 51,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Asli',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 53
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 53,
            'isi_soal' => 'Citra = …………....',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Mutu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Imajinasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Dimensi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Anggapan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 52,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Gambaran',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 54
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 54,
            'isi_soal' => 'Rancu = …………....',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Semu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kacau',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Canggung',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Jorok',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 53,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Tidak wajar',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 55
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 55,
            'isi_soal' => 'Friksi = …………....',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Perpecahan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Sedih',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Putus harapan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Frustasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 54,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Lunglai',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 56
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 56,
            'isi_soal' => '',
            'gambar_soal' => '56.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 55,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 57
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 57,
            'isi_soal' => '',
            'gambar_soal' => '57.png',
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 56,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 58
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 58,
            'isi_soal' => '',
            'gambar_soal' => '58.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 57,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 59
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 59,
            'isi_soal' => '',
            'gambar_soal' => '59.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 58,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 60
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 60,
            'isi_soal' => '',
            'gambar_soal' => '60.png',
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 59,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 61
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 61,
            'isi_soal' => 'Panitia reuni Sespimmen angkatan 50 mengedarkan undangan kepada 70 orang tamu
            laki-lakidan 50 orang tamu perempuan. Apabila 40% undangan perempuan dan 50%
            undangan laki-laki yang bisa hadir, berapa persen kah undangan yang tidak hadir?',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '34 %',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '44 %',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '54 %',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '64 %',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 60,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '74 %',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 62
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 62,
            'isi_soal' => 'Anita merupakan kakak dari Agus. Mereka masing masing memiliki sepeda. Sepeda
            Anita lebih besar dari sepeda Agus, dan apabila Anita mengayuh sebanyak 2 kali, Agus
            harus mengayuh sebanyak 4 kali. Keliling rumah mereka adalah 400 m apabila Anita
            mengayuh sepeda sebanyak 8 kali dia dapat berjalan sejauh 4 meter, berapa kali Agus
            harus mengayuh sepedanya apabila ingin mengelilingi rumahnya?
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '840 kali',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '1.600 kali',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '600 kali',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '1.200 kali',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 61,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '1.450 kali',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 63
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 63,
            'isi_soal' => 'Dalam setahun Polda X mendapat anggaran dana sebanyak 100 juta yang nantinya akan
            digunakan untuk keperluan operasional polda seperti rapat, jaldis personel, kunjungan,
            gelar pasukan dll. Apabila polda X setiap bulan wajib mengadakan rapat, gelar pasukan
            setahun dilaksanakan sebanyak 6 kali, kunjungan ke Polres dilakukan 10 kali dalam
            setahun dengan jumlah personel yang berangkat sebanyak 5 orang dengan masing
            masing kegiatan mengeluarkan dana yang berbeda yakni :<br>
            • 1 x Rapat = Rp. 3.750.000<br>
            • 1x Gelar pasukan = Rp. 2.410.000<br>
            • 1x Kunjungan = Rp. 3.114.000<br>
            • Jaldis personel Rp. 50.000 / orang.<br>
            Berapa banyak dana yang dapat diserap Polda X selama setahun?<br>',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Rp. 90.600.000 ',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Rp. 61.960.000 ',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Rp. 93.100.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Rp. 48.100.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 62,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Rp. 93.000.000',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 64
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 64,
            'isi_soal' => 'Mahasiswa PTIK sedang menghadapi ujian. Semua mata pelajaran harus diikuti untuk
            lulus pada semester ini. Syarat lulusnya adalah nilai rata-rata 70. Adapun mata
            pelajaran yang diujikan adalah Kepemimpinan, Kapita selekta, KUHP, KUHAP, dan
            Fungsi Intel.<br>
            • Rahmat mendapat nilai 70, 60, 56, 75, dan 50<br>
            • Dani mendapat nilai 70, 68, 72, 55, dan 85<br>
            • Bagus mendapat nilai 50, 85, 75, 70, dan 78<br>
            • Zainal mendapat nilai 60, 80, 77, 91, dan 73<br>
            • Sedangkan Rozi mendapat nilai 67, 71, 58, 75, dan 85<br>
            Dari kelima mahasiswa PTIK tersebut, nilai siapakah yang tertinggi dan yang tidak
            lulus?<br>',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Zainal dan Rahmat',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Dani dan Zainal',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Rozi dan Rahmat',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Bagus dan Dani',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 63,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Rozi dan Bagus',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 65
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 65,
            'isi_soal' => 'Jarak rumah Kompol Taufik ke kantor adalah 15 km, setiap pagi Kompol Taufik berangkat dari rumah pukul 05.00 wib, sebelum kekantor Kompol Taufik harus
            mengantar anaknya terlebih dahulu ke sekolah pada hari Senin, Rabu dan Jumat.
            Sekolah anaknya berjarak 7 km dari rumah, jarak sekolah anak ke kantor adalah 3 km.
            Jika Kompol Taufik dapat menempuh jarak 5 km dalam waktu 30 menit pukul berapa
            Kompol Taufik tiba di kantor pada hari Selasa?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '07.30 wib',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '06.00 wib',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '05.30 wib',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '06.30 wib',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 64,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '07.00 wib',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 66
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 66,
            'isi_soal' => 'Berdasarkan angkatannya, Kompol Daru lebih muda dari Kompol Fidel, namun Kompol
            Fidel masih lebih muda dari Kompol Yudi dan Kompol Indra. Kompol Indra lebih senior
            dari Kompol Yudi. Siapa di antara mereka yang angkatannya paling tua?',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kompol Fidel',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kompol Daru',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Kompol Yudi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Kompol Indra',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 65,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Kompol Musa',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 67
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 67,
            'isi_soal' => 'Dari data Infopers Polri diketahui, Bagas lebih senior dari Rina. Edi lebih senior dari
            Aldo. Siska tidak lebih senior dari Aldo. Tidak ada seorangpun yang memiliki tingkat
            senioritas yang sama. Apabila Bagas tidak lebih senior dari Siska, maka:',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Rina lebih senior dari Bagas.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Edi tidak lebih senior dari Bagas.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Bagas lebih senior dari Edi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Siska lebih senior dari Edi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 66,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Aldo lebih senior dari Bagas.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 68
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 68,
            'isi_soal' => 'Dari hasil babak penyisihan, skor Barcelona kalah tinggi dibanding skor Real Madrid,
            tetapi skor Real Madrid sama dengan skor Valencia. Skor Real Betis adalah yang paling
            tinggi di antara semua tim. Skor Valencia lebih tinggi dari skor Ath.Madrid. Ini berarti:',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Skor Real Madrid tidak lebih baik dari skor Barcelona',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Skor Valencia lebih baik dari skor Barcelon',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Skor Valencia lebih baik dari skor Real Betis.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Skor Barcelona tidak lebih baik dari skor Real Betis.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 67,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Skor Ath.Madrid lebih baik dari skor Real Madrid',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 69
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 69,
            'isi_soal' => '
            <b>Teks 1 (soal nomor 69 dan 70)</b><br>
            <b>Di acara pisah sambut salah seorang perwira tinggi Polri, beberapa tamu VIP datang dengan
            urutan sebagai berikut:<br>
            • Pak Wandi datang sebelum Pak Omar<br>
            • Ibu Lady datang sebelum Pak Wandi<br>
            • Pak Omar datang setelah Ibu Marni</b><br>
            Soal : Jika Pak Wiryo adalah yang tamu yang datang paling akhir, Pak Wandi datang setelah
            Ibu Marni, dan kedatangan Ibu Lady sebelum Ibu Marni. Maka mana urutan di bawah
            ini yang mungkin benar menggambarkan urutan tamu VIP yang datang paling awal
            hingga paling akhir
            adalah:<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ibu Marni, Ibu Lady, Pak Omar, Pak Vito, Pak Wandi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Ibu Lady, Ibu Marni, Pak Wandi, Pak Omar, Pak Wiryo.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pak Wiryo, Pak Wandi, Ibu Marni, Pak Omar, Ibu Lady.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Ibu Lady, Pak Wiryo, Pak Omar, Ibu Marni, Pak Wandi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 68,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Pak Omar, Ibu Marni, Pak Wiryo, Pak Wandi, Ibu Lady.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 70
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 70,
            'isi_soal' => '
            <b>Teks 1 (soal nomor 69 dan 70)</b><br>
            <b>Di acara pisah sambut salah seorang perwira tinggi Polri, beberapa tamu VIP datang dengan
            urutan sebagai berikut:<br>
            • Pak Wandi datang sebelum Pak Omar<br>
            • Ibu Lady datang sebelum Pak Wandi<br>
            • Pak Omar datang setelah Ibu Marni</b><br>
            Soal : Jika ada tamu VIP yang bernama Pak Tjokro datang sebelum Ibu Marni, maka
            pernyataan di bawah ini yang paling mungkin benar adalah:<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Pak Tjokro dan Pak Omar datang bersamaan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Pak Tjokro datang sebelum Pak Omar.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pak Tjokro datang sebelum Ibu Lady.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Pak Tjokro datang paling pertama.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 69,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Pak Wandi datang sebelum Pak Tjokro.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 71
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 71,
            'isi_soal' => '12 13 ….. ….. 22 27',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '19, 12',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '15, 18',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '18, 22',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '22, 24',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 70,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '24, 25',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 72
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 72,
            'isi_soal' => '6 13 12 26 18 39 …… ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '24, 48',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '25, 52',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '24, 52',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '25, 60',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 71,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '25, 48',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 73
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 73,
            'isi_soal' => '0 ½ 4½ 1½ 9 2½ …… ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '13½ , 3½',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '12, 2½',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '3½ , 12½',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '14½ , 4½',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 72,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '12¼ , 3¼',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 74
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 74,
            'isi_soal' => '11 19 10 20 9 21 8 …………',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '7, 22',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '15, 23',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '23, 15',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '22, 7',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 73,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '26, 7',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 75
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 75,
            'isi_soal' => '21 21 22 23 24 24 24 27 25 31 26 …… ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '27, 32',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '29, 30',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '30, 29',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '34, 28',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 74,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '36, 27',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 76
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 76,
            'isi_soal' => 'Televisi : Majalah = Internet : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Koran',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Telepon',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Spanduk',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Radio',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 75,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Android',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 77
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 77,
            'isi_soal' => 'Biji : Pohon = ….. : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kacang : Kecambah',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Anak : Ustadz',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Bayi : Pria',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Menit : Bulan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 76,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Buah : Pohon',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 78
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 78,
            'isi_soal' => 'Waktu : Detik = Berat : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'kg',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'gram',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Menit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'km',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 77,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'ons',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 79
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 79,
            'isi_soal' => 'Tidur : Bantal = Makan : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Restoran',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Minum',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Nasi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Nampan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 78,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sendok',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 80
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 80,
            'isi_soal' => 'Kepak : Sayap = …… : ……',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Mesin : Motor',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Panas : Api',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Banyak : Ringan',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Berat : Sulit',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 79,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Sandar : Kepala',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 81
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 81,
            'isi_soal' => '',
            'gambar_soal' => '81.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '2-1-3-5-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '2-5-3-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-3-1-5-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '2-5-1-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 80,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '2-3-5-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 82
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 82,
            'isi_soal' => '',
            'gambar_soal' => '82.png',
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '4-1-5-3-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '4-1-3-5-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '4-5-1-3-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '4-3-1-5-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 81,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '4-3-5-1-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 83
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 83,
            'isi_soal' => '',
            'gambar_soal' => '83.png',
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '3-4-2-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '1-4-2-3',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '1-3-2-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '4-3-2-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 82,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '4-2-3-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 84
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 84,
            'isi_soal' => '',
            'gambar_soal' => '84.png',
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '3-2-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-1-2-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-4-1-3',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '2-1-4-3',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 83,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '4-2-3-1',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 85
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 85,
            'isi_soal' => '',
            'gambar_soal' => '85.png',
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 1,
            'isi_jawaban' => '1-2-3-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 2,
            'isi_jawaban' => '3-2-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 3,
            'isi_jawaban' => '2-3-1-4',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 4,
            'isi_jawaban' => '3-1-4-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 84,
            'nomor_jawaban' => 5,
            'isi_jawaban' => '1-4-3-2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 86
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 86,
            'isi_soal' => 'Kompol Deri biasanya menempuh perjalanan dari rumah dinasnya ke Mabes Polri
            dengan mobil dalam waktu seperempat jam. Karena mobilnya rusak, Kompol Deri
            akhirnya pergi ke Mabes dari rumah dinasnya dengan berjalan kaki. Ini berarti:',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Perjalanan Kompol Deri adalah seperempat jam.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Perjalanan Kompol Deri kurang dari seperempat jam.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Perjalanan Kompol Deri seperempat jam lebih lambat.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Perjalanan Kompol Deri lebih dari seperempat jam.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 85,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Perjalanan Kompol Deri tidak lebih dan tidak kurang dari seperempat jam.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 87
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 87,
            'isi_soal' => 'Saat tes psikologi seleksi Sespimmen, semua peserta harus menjawab soal tes dengan
            menggunakan pensil 2B apabila tidak membawa pen. Dua orang peserta tes psikologi
            seleksi Sespimmen yaitu Dedi dan Dian, menggunakan pensil 2B untuk menjawab soal
            tes. Ini berarti:',
            'gambar_soal' => null,
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Hanya Dedi yang membawa pena dan pensil 2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Dian hanya membawa pena saja',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Dedi dan Dian tidak membawa pen',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Dedi dan Dian tidak membawa pensil 2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 86,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Dedi maupun Dian tidak membawa pena dan pensil 2',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 88
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 88,
            'isi_soal' => 'Jika Kompol Ashanty rajin bekerja dan patuh pada pimpinan, maka pimpinan
            memberikan promosi jabatan yang lebih tinggi. Pimpinannya tidak memberikan
            promosi jabatan, maka:',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Kompol Ashanty rajin bekerja dan patuh pada pimpinan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Kompol Ashanty tidak rajin bekerja dan tidak patuh pada pimpinan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Kompol Ashanty tidak rajin bekerja atau tidak patuh pada pimpinan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Kompol Ashanty rajin bekerja namun tidak patuh pada pimpinan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 87,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Kompol Ashanty rajin bekerja dan tidak patuh pada pimpinan.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 89
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 89,
            'isi_soal' => 'Personel Polri yang tidak memiliki anak lebih dari tiga orang menerima piagam dan
            hadiah. AKBP Gita Saputri menerima piagam dari Kapolri, tetapi tidak menerima
            hadiah, ini berarti:',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'AKBP Gita Saputri adalah personel Polri yang anaknya kurang dari tiga orang.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'AKBP Gita Saputri adalah personel Polri yang anaknya lebih dari tiga orang.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'AKBP Gita Saputri adalah personel Polri yang berhak menerima hadiah.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'AKBP Gita Saputri bukan personel Polri yang berhak menerima hadiah.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 88,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'AKBP Gita Saputri bukan personel Polri yang anaknya empat orang.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 90
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 90,
            'isi_soal' => 'Semua atlet pandai melompat, dan atlet yang pandai melompat gemar berenang. Atlet
            yang gemar berenang tidak pandai memasak, maka:',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Atlet yang tidak pandai memasak, tidak pandai melompat.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Atlet yang tidak pandai memasak, gemar berenang dan tidak pandai melompat.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Atlet yang tidak pandai memasak, tidak pandai melompat dan tidak gemar berenang.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Atlet yang pandai memasak, tidak pandai melompat dan tidak gemar berenang',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 89,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Atlet yang tidak pandai memasak, pandai melompat.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 91
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 91,
            'isi_soal' => 'Ukuran sepatu Briptu Hilda sama dengan Briptu Fera. Ukuran sepatu Briptu Eka lebih
            besar daripada Briptu Winda. Ukuran sepatu Briptu Avy lebih besar daripada Briptu Tia.
            Apabila diperhatikan, hanya terdapat dua anggota yang memiliki ukuran sepatu sama.
            Lalu, apabila ukuran sepatu Briptu Hilda lebih besar daripada Briptu Avy, maka berarti:',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ukuran sepatu Briptu Winda lebih besar daripada Briptu Avy.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Ukuran sepatu Briptu Eka lebih besar daripada Briptu Tia',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Ukuran sepatu Briptu Hilda lebih besar daripada Briptu Winda',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Ukuran sepatu Briptu Fera lebih besar daripada Briptu Tia',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 90,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Ukuran sepatu Briptu Avy lebih besar daripada Briptu Fera',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 92
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 92,
            'isi_soal' => '
            <b>Teks 2 (soal nomor 92 dan 93)</b><br>
            <b>Dalam pertandingan lari sprint antar wilayah, ada empat orang pelari yang menjadi
            peserta pertandingan itu antara lain Ucup, Ocid, Wakwaw, dan Mastur. Satu sesi
            tanding mempertemukan dua pelari sehingga hasil akhir dari total enam sesi sprint
            yang digelar adalah sebagai berikut:<br>
            • Wakwaw mengalahkan Mastur.<br>
            • Ocid berhasil dikalahkan oleh Ucup<br>
            • Ucup dan Ocid dikalahkan oleh Wakwaw<br>
            • Mastur berhasil mengalahkan Ucup dan Oci</b><br>
            Soal : Siapakah pelari yang selalu kalah dalam bertanding?<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 2,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ucup',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Ocid',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Mastur',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Wakwaw',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 91,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Ucup dan Mastur',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 93
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 93,
            'isi_soal' => '
            <b>Teks 2 (soal nomor 92 dan 93)</b><br>
            <b>Dalam pertandingan lari sprint antar wilayah, ada empat orang pelari yang menjadi
            peserta pertandingan itu antara lain Ucup, Ocid, Wakwaw, dan Mastur. Satu sesi
            tanding mempertemukan dua pelari sehingga hasil akhir dari total enam sesi sprint
            yang digelar adalah sebagai berikut:<br>
            • Wakwaw mengalahkan Mastur.<br>
            • Ocid berhasil dikalahkan oleh Ucup<br>
            • Ucup dan Ocid dikalahkan oleh Wakwaw<br>
            • Mastur berhasil mengalahkan Ucup dan Oci</b><br>
            Soal : Siapakah pelari yang memenangkan semua pertandingan?<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Ucup',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Ocid',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Mastur',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Wakwaw',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 92,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Ucup dan Mastur',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 94
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 94,
            'isi_soal' => '
            <b>Teks 3 (soal nomor 94 dan 95)</b><br>
            <b>Dari data sejumlah perwira menengah yang ada, diketahui:<br>
            • Pangkat Abi lebih rendah daripada Yudo<br>
            • Pangkat Abi lebih rendah daripada Pandu<br>
            • Pangkat Deny lebih tinggi daripada Pandu</b><br>
            Soal : Manakah pernyataan berikut ini yang mungkin paling benar?<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 5,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Pangkat Pandu lebih tinggi daripada Deny',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Pangkat Yudo lebih rendah daripada Deny',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pangkat Yudo lebih rendah daripada Pandu',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Pangkat Deny lebih rendah daripada Abi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 93,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Pangkat Yudo lebih tinggi daripada Abi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        // Nomor 95
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 95,
            'isi_soal' => '
            <b>Teks 3 (soal nomor 94 dan 95)</b><br>
            <b>Dari data sejumlah perwira menengah yang ada, diketahui:<br>
            • Pangkat Abi lebih rendah daripada Yudo<br>
            • Pangkat Abi lebih rendah daripada Pandu<br>
            • Pangkat Deny lebih tinggi daripada Pandu</b><br>
            Soal : Jika ada seorang perwira bernama Dodi yang pangkatnya lebih tinggi daripada Yudo,
            maka manakah pernyataan berikut ini yang benar?<br>
            ',
            'gambar_soal' => null,
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'Pangkat Dodi lebih tinggi daripada Abi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'Pangkat Dodi lebih tinggi daripada Deny',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'Pangkat Deny lebih tinggi daripada Dodi',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'Pangkat Dodi sama dengan pangkat Pandu.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 94,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'Pangkat Pandu lebih tinggi daripada Dodi.',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 96
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 96,
            'isi_soal' => '',
            'gambar_soal' => '96.png',
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 95,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 97
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 97,
            'isi_soal' => '',
            'gambar_soal' => '97.png',
            'nomor_jawaban' => 3,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 96,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 98
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 98,
            'isi_soal' => '',
            'gambar_soal' => '98.png',
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 97,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 99
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 99,
            'isi_soal' => '',
            'gambar_soal' => '99.png',
            'nomor_jawaban' => 4,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 98,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        // Nomor 100
        Soal::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 100,
            'isi_soal' => '',
            'gambar_soal' => '100.png',
            'nomor_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 1,
            'isi_jawaban' => 'A',
            'gambar_jawaban' => null,
            'benar_jawaban' => 1,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 2,
            'isi_jawaban' => 'B',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 3,
            'isi_jawaban' => 'C',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 4,
            'isi_jawaban' => 'D',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);

        Jawaban::create([
            'id_paket' => 'PNSTKP001',
            'nomor_soal' => 1 + 99,
            'nomor_jawaban' => 5,
            'isi_jawaban' => 'E',
            'gambar_jawaban' => null,
            'benar_jawaban' => 0,
        ]);
    }
}
