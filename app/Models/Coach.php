<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [
        'coach_document',
        'type_document',
        'coach_name',
        'coach_age',
    ];
}
