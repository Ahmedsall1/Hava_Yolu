<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'yonetici_id',
        'image',
    ];
}
