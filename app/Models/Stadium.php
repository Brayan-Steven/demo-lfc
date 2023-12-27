<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
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
}
