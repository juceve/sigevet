<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use App\Models\Vacuna;
use Livewire\Component;

class HistorialVacunacion extends Component
{
    public $vacunaciones;

    public function mount($id)
    {
        $this->vacunaciones = Consulta::where('paciente_id',$id)
                                        ->where('anamnesis','01-Vacunacion')
                                        ->join('vacunas','consultas.id','=','vacunas.consulta_id')
                                       ->get();
    }
    public function render()
    {
        return view('livewire.historial-vacunacion');
    }
}
