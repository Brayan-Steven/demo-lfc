<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
<<<<<<< HEAD
//    protected $table = 'contacts';

    protected $fillable = [ 
        'contacts_name',
        'contacts_email',
        'contacts_phone',
        'contacts_message'
    ];
=======
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
