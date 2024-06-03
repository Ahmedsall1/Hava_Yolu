<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sefer extends Model
{
    use HasFactory;

    protected $fillable = ['nerden', 'nereye', 'tarih'];

    public static function search($query)
    {
        return self::where('nerden', 'LIKE', "%$query%")
                    ->orWhere('nereye', 'LIKE', "%$query%")
                    ->orWhere('tarih', 'LIKE', "%$query%")
                    ->paginate(15);
    }
}
