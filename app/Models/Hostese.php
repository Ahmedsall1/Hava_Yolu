<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Hostese extends Personel
{
    use HasFactory;



    public function Gettip():string{
        return "Hostese";
    }
}
