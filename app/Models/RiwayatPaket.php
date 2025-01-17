<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_paket',
        'status',
        'time',
        'benar',
        'salah',
        'kosong',
        'paketan',
        'score',
        'created_at',
        'updated_at',
    ];
}
