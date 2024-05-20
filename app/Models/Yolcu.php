<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yolcu extends User
{
    use HasFactory;



    public function Gettip():string{
        return "Yolcu";
    }
}
