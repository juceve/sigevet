<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use JeroenNoten\LaravelAdminLte\AdminLte;
use Livewire\Component;

class Historial extends Component
{
    public $paciente_id;

    public function mount($paciente_id){
        $this->paciente_id = $paciente_id;
    }
    
    public function render()
    {
        $consultas = Consulta::where('paciente_id',$this->paciente_id)
                                ->where('anamnesis','<>','01-Vacunacion')
                                ->where('anamnesis','<>','02-Anticonceptivos')
                                ->orderBy('id', 'DESC')
                                ->get();
        return view('livewire.historial', compact('consultas'))->extends('adminlte::page');
    }
}
