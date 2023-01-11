<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use Livewire\Component;

class HistorialAnticonceptivo extends Component
{
    public $anticonceptivos;

    public function mount($id)
    {
        $this->anticonceptivos = Consulta::where('paciente_id',$id)
                                        ->where('anamnesis','02-Anticonceptivos')
                                        ->join('anticonceptivos','consultas.id','=','anticonceptivos.consulta_id')
                                       ->get();
    }
    public function render()
    {
        return view('livewire.historial-anticonceptivo');
    }
}
