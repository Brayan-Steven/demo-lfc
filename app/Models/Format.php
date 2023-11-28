<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;

class Format extends Model
{
    protected $fillable = [
        'format_name', // Agrega 'format_name' aquí
        'format_file',
        'description',
    ];
    public function getDocumentPathAttribute()
    {
        return 'files/' . $this->document;
    }

    public function getDocumentSizeAttribute()
    {
        return Storage::disk('local')->size($this->document_path);
    }


    
=======

class Format extends Model
{
    use HasFactory;
>>>>>>> 1b7866d0e16f03a7880b3ca721177f01cf9060c2
}
