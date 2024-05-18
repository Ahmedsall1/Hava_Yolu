<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Personel extends User
{
    use HasFactory;

    public function Gettip():string{
        return "Personel";
    }
}
