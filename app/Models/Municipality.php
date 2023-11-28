<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'municipality_name', // Agrega 'format_name' aquí
        'subregion_name',
    ];
    public function subregion()
    {
        return $this->belongsTo(Subregion::class, 'subregion_name');
    }
=======
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
