<?php

namespace App\Http\Livewire;


use App\Models\Cliente;
use App\Models\Paciente;
use App\Models\Raza;
use Livewire\Component;

class NuevoPaciente extends Component
{
    public $cliente_id;

    public function mount($id){
        $this->cliente_id = $id;
    }

    public function render()
    {
        $paciente = new Paciente();
        $clientes = Cliente::all();
        $razas = Raza::all();
        return view('livewire.nuevo-paciente', compact('paciente', 'clientes','razas'))->extends('adminlte::page');
    }
}
