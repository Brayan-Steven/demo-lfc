<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subregion extends Model
{
    protected $fillable = [
        'subregion_name', // Agrega 'format_name' aquí
    ];
}
