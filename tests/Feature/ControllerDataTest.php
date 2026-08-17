<?php

namespace Tests\Feature;

use App\Models\Jawaban;
use App\Models\Order;
use App\Models\Paket;
use App\Models\Soal;
use App\Models\User;
use App\Support\ControllerData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ControllerDataTest extends TestCase
{
    use RefreshDatabase;

    public function test_question_lookup_uses_a_constant_number_of_queries(): void
    {
        foreach (range(1, 10) as $number) {
            $question = new Soal;
            $question->id_paket = 'POLPPH001';
            $question->nomor_soal = $number;
            $question->isi_soal = 'Question '.$number;
            $question->nomor_jawaban = 1;
            $question->save();

            foreach (range(1, 2) as $answerNumber) {
                $answer = new Jawaban;
                $answer->id_paket = 'POLPPH001';
                $answer->nomor_soal = $number;
                $answer->nomor_jawaban = $answerNumber;
                $answer->isi_jawaban = 'Answer '.$answerNumber;
                $answer->benar_jawaban = $answerNumber === 1;
                $answer->save();
            }
        }

        DB::flushQueryLog();
        DB::enableQueryLog();

        $data = ControllerData::questionData('POLPPH001');

        $this->assertCount(10, $data['questions']);
        $this->assertCount(20, $data['answers']);
        $this->assertCount(2, $data['answers_by_question']->get(1));
        $this->assertCount(2, DB::getQueryLog());
    }

    public function test_question_page_query_count_does_not_grow_with_questions(): void
    {
        $user = User::factory()->create();
        $package = new Paket;
        $package->id = 'POLPPH001';
        $package->nama_paket = 'Pass Hand';
        $package->harga_paket = 0;
        $package->durasi_paket = 2700;
        $package->latihan_soal = 0;
        $package->save();

        Order::create([
            'id_user' => $user->id,
            'id_paket' => $package->id,
            'nama_paket' => $package->nama_paket,
            'total_amount' => 0,
            'status' => 1,
        ]);

        foreach (range(1, 10) as $number) {
            $question = new Soal;
            $question->id_paket = $package->id;
            $question->nomor_soal = $number;
            $question->isi_soal = 'Question '.$number;
            $question->nomor_jawaban = 1;
            $question->save();
        }

        DB::flushQueryLog();
        DB::enableQueryLog();

        $response = $this->actingAs($user)->get('/soal/'.$package->id);

        $response->assertOk();
        $this->assertLessThanOrEqual(10, count(DB::getQueryLog()));
    }
}
