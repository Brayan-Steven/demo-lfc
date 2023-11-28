<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    protected $fillable = [
        'municipality_name', // Agrega 'format_name' aquí
        'subregion_name',
    ];
    public function subregion()
    {
        return $this->belongsTo(Subregion::class, 'subregion_name');
    }
}
