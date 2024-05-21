<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilet extends Model
{
    use HasFactory;

    protected $fillable = [
        'biletno',
        'user_id',
        'ucus_id',
        'koltuk_id',
        // add any other fields that should be mass assignable
    ];
}
