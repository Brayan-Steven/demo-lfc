<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posts';

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'name');
    }

    public function season()
    {
        return $this->belongsTo(season::class, 'season_name');
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'category_name');
    }
    public function team()
    {
        return $this->belongsTo(team::class, 'team_name');
    }
    public function contact()
    {
        return $this->belongsTo(contacts::class, 'contacts_name');
    }
}
