<?php

namespace App\Livewire\Navegation;

use Livewire\Component;

class Footer extends Component
{
    public $correo = 'cundifutbol@hotmail.com';
    public $direccion = 'Diag 61 C # 24-38, Bogotá D.C.';
    public $telefono = '57-1-7552687 / 57-1-7552689';
    
    public function render()
    {
        return view('livewire.navegation.footer');
    }
}
