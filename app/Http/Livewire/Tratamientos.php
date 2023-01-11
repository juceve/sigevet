<?php

namespace App\Http\Livewire;

use App\Models\Medicamento;
use App\Models\Medxtrat;
use App\Models\Tratamientopred;
use Livewire\Component;

class Tratamientos extends Component
{
    public $selectedMedicamento,$name; 
    public $tratamiento, $tratamientos = NULL, $delTratamiento = NULL;
    public function updatedselectedMedicamento($id){
        $this->medicamento = Medicamento::where('id', $id)->get();
    }

    public function updatedtratamiento($tratamiento){
       
        $this->tratamientos[] = $tratamiento;
    }

    public function updateddelTratamiento($i){
        
        unset($this->tratamientos[$i]);
        $this->tratamientos = array_values($this->tratamientos);

        $this->delTratamiento = NULL;
    }
    public function render()
    {
        $medicamentos = Medicamento::all();
        return view('livewire.tratamientos',compact('medicamentos'))->extends('adminlte::page');
    }

    public function save(){

        $tratamientopred = Tratamientopred::create([
            "name" => $this->name
        ]);

        if(!is_null($this->tratamientos) && count($this->tratamientos) > 0 )
        {
            foreach($this->tratamientos as $item){
                Medxtrat::create([
                    'tratamientopred_id' => $tratamientopred->id,
                    'medicamento_id' => $item['medicamento_id'],
                    'indicaciones' =>$item['indicaciones'],                    
                ]);
            }
        }

        return redirect()->route('tratamientopreds.index')
            ->with('success', 'create');
    }
}
