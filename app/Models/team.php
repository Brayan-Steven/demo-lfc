<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model

{ 
    protected $fillable= [
        'team_name',
        'league_name',
        'coach_name',
        'stadium_name',
        'sponsor_name',
        'imge_url',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_name');
    }

    public function league()
    {
        return $this->belongsTo(League::class, 'league_name');
    }

    public function stadium()
    {
        return $this->belongsTo(Stadium::class, 'stadium_name');
    }
    public function Sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'sponsor_name');
    }

}
 
