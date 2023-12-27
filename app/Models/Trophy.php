<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    protected $fillable = [
        'trophy_name',
        'category_name',
        'description',
        'sponsor_name',
        'imge_url_trophy',
    ];
    
    public function category()
    {
        return $this->belongsTo(category::class, 'category_name');
    }
    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'sponsor_name');
    }


    use HasFactory;

}
