<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class category extends Model
{
    protected $fillable = [
        'category_name', 
        'description',
        'age',
        'season_name',
    ];
    
    public function season()
    {
        return $this->belongsTo(season::class, 'season_name');
    }
    
=======
class Category extends Model
{
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
