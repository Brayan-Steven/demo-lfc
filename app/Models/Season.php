<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'season_name',
        'start_season',
        'end_season',
        'img_url_season',
    ];

     public function setImgUrlSeasonAttribute($value)
    {
        $this->attributes['img_url_season'] = base64_encode($value);
    }

    // Accesor para obtener la imagen en formato base64
    public function getImgUrlSeasonAttribute($value)
    {
        return base64_decode($value);
    }
=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
