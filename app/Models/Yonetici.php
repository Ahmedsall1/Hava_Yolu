<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yonetici extends User
{
    use HasFactory;


    public function Gettip():string{
        return "Yonetici";
    }
}
