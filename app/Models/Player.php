<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
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
}
