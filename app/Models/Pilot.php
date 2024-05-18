<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pilot extends Personel
{
    use HasFactory;



    public function Gettip():string{
        return "Pilot";
    }
}
