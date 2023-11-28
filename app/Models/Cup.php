<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    protected $table = 'cups';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function sponsors()
    {
        return $this->morphToMany(Sponsor::class, 'sponsorable');
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }


}
