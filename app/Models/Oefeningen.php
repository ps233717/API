<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefeningen extends Model
{
    public $fillable = ['name', 'description_nl', 'description_en'];

    use HasFactory;
}
