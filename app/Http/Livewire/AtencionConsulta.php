<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use Livewire\Component;
use App\Models\Paciente;
use App\Models\Medicamento;
use App\Models\Medxtrat;
use App\Models\Tratamiento;
use App\Models\Tratamientopred;

class AtencionConsulta extends Component
{
    public $medicamentos;

    public $paciente;

    public $tratamiento, $tratamientos = NULL, $delTratamiento = NULL,$tratamientospreds;
    public $anamnesis, $diagpresuntivo, $diagconclusivo, $fecreconsulta, $recomendaciones, $user_id, $paciente_id, $dateConsulta,$importe;

    protected $rules = [
        "anamnesis" => "required",
       ];

    public function mount($id){
        $this->medicamentos = Medicamento::all();
        $this->paciente = Paciente::where('id', $id)->get();
        
    }

    public function updatedselectedMedicamento($id){
        $this->medicamento = Medicamento::where('id', $id)->get();
    }

    public function updatedtratamiento($tratamiento){
       
        $this->tratamientos[] = $tratamiento;
    }

    public function updatedtratamientospreds($id){
        
        $meds = Medxtrat::where('tratamientopred_id', $id)->get();
        foreach ($meds as $item) {
            $medicamento = Medicamento::find($item->medicamento_id);
            $tratamiento = array(
                "medicamento_id"=> $medicamento->id,
                "medicamento"=> $medicamento->nombre,
                "indicaciones"=> $item->indicaciones
            );
            $this->tratamientos[] = $tratamiento;
        }
    }

    public function updateddelTratamiento($i){
        
        unset($this->tratamientos[$i]);
        $this->tratamientos = array_values($this->tratamientos);

        $this->delTratamiento = NULL;
    }
    public function render()
    {
        $tratamientospred = Tratamientopred::all();
        return view('livewire.atencion-consulta',compact('tratamientospred'))->extends('adminlte::page');
    }

    public function save()
    {
       

       $this->validate($this->rules);

            $id = Consulta::create([
            'anamnesis' => $this->anamnesis,
            'diagpresuntivo' => $this->diagpresuntivo!= "" ? $this->diagpresuntivo : NULL,
            'diagconclusivo' => $this->diagconclusivo!= "" ? $this->diagconclusivo : NULL,
            'fecreconsulta' => $this->fecreconsulta != "" ? $this->fecreconsulta : NULL,
            'recomendaciones' => $this->recomendaciones != "" ? $this->recomendaciones : NULL,
            'dateConsulta' => $this->dateConsulta != "" ? $this->dateConsulta : NULL,
            'importe' => $this->importe != "" ? $this->importe : "0.00",
            'user_id' => auth()->user()->id,
            'paciente_id' => $this->paciente_id
            ])->id;
        if(!is_null($this->tratamientos) && count($this->tratamientos) > 0 )
        {
            foreach($this->tratamientos as $item){
                Tratamiento::create([
                    'medicacion' => $item['medicamento'],
                    'indicaciones' =>$item['indicaciones'],
                    'consulta_id' => $id
                ]);
            }
        }

        

        return redirect()->route('consultas.index')
            ->with('success', 'create');
    }
}
