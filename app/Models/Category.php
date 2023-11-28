<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
