<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{
    use HasFactory;
    // protected $fillable = [ 
    //     'contacts_name',
    //     'contacts_email',
    //     'contacts_phone',
    //     'contacts_message'
    // ];

    protected $guarded =[];
    public  function Posts(): BelongsTo{
        return $this->belongsTo(Post::class);
    }
}
