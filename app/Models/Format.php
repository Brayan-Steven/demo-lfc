<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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


    
}
