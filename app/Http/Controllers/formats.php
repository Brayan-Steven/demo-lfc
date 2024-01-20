<?php

namespace App\Http\Controllers;
use App\Models\Format;


use Illuminate\Http\Request;

class formats extends Controller
{
    //

    public function resolution(){
        $formats = Format::all();
        return view('livewire/format',['formats' => $formats]);
    }
}
