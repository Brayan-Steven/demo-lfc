<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    protected $table = 'trophies';
    public function sponsors()
    {
        return $this->morphToMany(Sponsor::class, 'sponsorable');
    }

}
