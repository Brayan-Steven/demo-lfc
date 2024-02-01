<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'body',
        'category_name',
        'category_posts',
        'img_url',
        'match_date',
        'season_name',
        'slug',
        'team_id',
        'title',
        'type',
    ];


    
    // use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'name');
    }

    public function season()
    {
        return $this->belongsTo(season::class, 'season_name');
    }
    public function categoryPost()
    {
        return $this->belongsTo(categoryPost::class, 'category_posts');
    }
    public function category()
    {
        return $this->belongsTo(category::class, 'category_name');
    }
    public function team()
    {
        return $this->belongsTo(team::class, 'team_name');
    }
    public function comment()
    {
        return $this->belongsTo(comment::class, 'contacts_name');
    }
}
