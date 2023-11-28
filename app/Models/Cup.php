<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'cup_name',
        'start_date',
        'end_date',
        'trophy_name',
        'category_name',
        'sponsor_name',
        'imge_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_name');
    }
    public function Sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'sponsor_name');
    }

    public function Trophy()
    {
        return $this->belongsTo(Trophy::class,'trophy_name');
    }


=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
