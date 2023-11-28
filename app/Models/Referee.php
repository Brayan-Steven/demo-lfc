<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = [
        'type_document',
        'referee_name',
        'identity_document',
    ];
}
