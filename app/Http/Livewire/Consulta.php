<?php

namespace App\Http\Livewire;

use App\Models\Consulta as ModelsConsulta;
use Livewire\Component;


class Consulta extends Component
{    

    public function render()
    {
       
        $consulta = new ModelsConsulta();
        return view('livewire.consulta')->extends('adminlte::page');
    }

}
