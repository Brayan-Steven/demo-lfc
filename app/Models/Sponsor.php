<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'sponsor_name',
        'contact',
        'sponsorship_type',
        'imge_url',
    ];

    public function teams()
    {
        return $this->morphedByMany(Team::class, 'sponsor_name');
    }

    public function tournaments()
    {
        return $this->morphedByMany(Tournament::class, 'sponsor_name');
    }

    public function leagues()
    {
        return $this->morphedByMany(League::class, 'sponsor_name');
    }

    public function cups()
    {
        return $this->morphedByMany(Cup::class, 'sponsor_name');
    }

}
