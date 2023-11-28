<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
<<<<<<< HEAD
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

=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
