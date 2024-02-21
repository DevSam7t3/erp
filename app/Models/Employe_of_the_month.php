<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe_of_the_month extends Model
{
    use HasFactory;
    protected $table = "employe_of_the_month";
    protected $primaryKey = "id";

}
