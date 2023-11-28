<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
        protected $fillable = [
            'league_name', 
            'start_date',
            'end_date',
            'category_name',
            'sponsor_name',
        ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_name');
    }
    public function Sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'sponsor_name');
    }

}
