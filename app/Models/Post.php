<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function season()
    {
        return $this->belongsTo(season::class, 'season_name');
    }

    public function team()
    {
        return $this->belongsTo(Teams::class, 'team_name');
    }
}
