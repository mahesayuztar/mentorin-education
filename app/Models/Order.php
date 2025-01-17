<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_paket',
        'nama_paket',
        'total_amount',
        'status',
        'token',
        'created_at',
        'updated_at',
    ];
}
