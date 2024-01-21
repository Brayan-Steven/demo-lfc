<?php

namespace App\Http\Controllers;
use App\Models\Municipality;


use Illuminate\Http\Request;

class HomeLFC extends Controller
{
    public function post(){
        $Municipalitys = Municipality::all();
        return view('index',['Municipalitys' => $Municipalitys]);
    }
}
