<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $table = 'games';

    public function stadium()
    {
        return $this->belongsTo(Stadium::class, 'stadium_name');
    }

    public function referee()
    {
        return $this->belongsTo(Referee::class, 'referee_name');
    }

    public function league()
    {
        return $this->belongsTo(League::class, 'league_name');
    }

    public function cup()
    {
        return $this->belongsTo(Cup::class, 'cup_name');
    }

    public function season()
    {
        return $this->belongsTo(Season::class, 'season_name');
    }

    public function trophy()
    {
        return $this->belongsTo(Trophy::class, 'trophy_name');
    }
    public function municipalities()
{
    return $this->belongsTo(Municipalities::class, 'municipality_name');
}

}
