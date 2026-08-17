<?php

namespace App\Support;

use App\Models\Jawaban;
use App\Models\Order;
use App\Models\Paket;
use App\Models\Soal;
use Carbon\Carbon;
use Illuminate\Support\Collection;

final class ControllerData
{
    public static function activeOrdersForUser(int $userId, bool $includeCompleted = false): Collection
    {
        return Order::query()
            ->where('id_user', $userId)
            ->where(function ($query) use ($includeCompleted) {
                $query->where(function ($pending) {
                    $pending->where('status', 0)
                        ->where('created_at', '>', Carbon::now()->subHours(24));
                });

                $includeCompleted
                    ? $query->orWhere('status', '>', 0)
                    : $query->orWhere('status', 1);
            })
            ->orderBy('updated_at')
            ->get();
    }

    public static function packagesById(iterable $packageIds): Collection
    {
        $ids = collect($packageIds)->filter()->unique()->values();

        return $ids->isEmpty()
            ? collect()
            : Paket::whereIn('id', $ids)->get()->keyBy('id');
    }

    public static function questionData(string $packageId): array
    {
        $questions = Soal::where('id_paket', $packageId)
            ->orderBy('nomor_soal')
            ->get();
        $answers = Jawaban::where('id_paket', $packageId)
            ->orderBy('nomor_soal')
            ->orderBy('nomor_jawaban')
            ->get();

        return [
            'questions' => $questions,
            'questions_by_number' => $questions->keyBy('nomor_soal'),
            'answers' => $answers,
            'answers_by_question' => $answers->groupBy('nomor_soal'),
            'answers_by_key' => $answers->keyBy(
                fn (Jawaban $answer) => $answer->nomor_soal.':'.$answer->nomor_jawaban
            ),
        ];
    }
}
