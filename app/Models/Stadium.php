<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'stadium_name',
        'location',
        'capacity',
    ];

    // Relación con equipos
    public function teams()
    {
        return $this->hasMany(Team::class, 'stadium_name');
    }

    // Relación con partidos (games)
    public function games()
    {
        return $this->hasMany(Game::class, 'stadium_name');
    }
=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
