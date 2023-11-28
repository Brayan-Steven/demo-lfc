<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'player_name',
        'birth_date',
        'position',
        'team_name',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_name');
    }
=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
