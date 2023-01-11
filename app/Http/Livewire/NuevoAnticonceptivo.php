<?php

namespace App\Http\Livewire;

use App\Models\Anticonceptivo;
use App\Models\Consulta;
use App\Models\Medicamento;
use App\Models\Paciente;
use Livewire\Component;

class NuevoAnticonceptivo extends Component
{
    public $paciente, $anamnesis;
    public $paciente_id, $recomendaciones, $dateConsulta, $importe;

    public $tratamiento, $tratamientos = NULL, $delTratamiento = NULL;

    protected $listeners = ['save'];

    protected $rules = [
        "anamnesis" => "required",
        'tratamientos' => 'required',
    ];

    public function mount($id)
    {
        $this->paciente = Paciente::where('id', $id)->get();
        $this->paciente_id = $id;
    }

    public function updatedtratamiento($tratamiento)
    {

        $this->tratamientos[] = $tratamiento;
    }

    public function updateddelTratamiento($i)
    {

        unset($this->tratamientos[$i]);
        $this->tratamientos = array_values($this->tratamientos);

        $this->delTratamiento = NULL;
    }
    public function render()
    {
        $medicamentos = Medicamento::all();
        return view('livewire.nuevo-anticonceptivo', compact('medicamentos'))->extends('adminlte::page');
    }
    public function save()
    {


        $this->validate($this->rules);

        $id = Consulta::create([
            'anamnesis' => $this->anamnesis,
            'diagpresuntivo' => NULL,
            'diagconclusivo' => NULL,
            'fecreconsulta' => NULL,
            'recomendaciones' => $this->recomendaciones != "" ? $this->recomendaciones : NULL,
            'dateConsulta' => $this->dateConsulta != "" ? $this->dateConsulta : NULL,
            'importe' => $this->importe != "" ? $this->importe : "0.00",
            'user_id' => auth()->user()->id,
            'paciente_id' => $this->paciente_id
        ])->id;
        if (!is_null($this->tratamientos) && count($this->tratamientos) > 0) {
            foreach ($this->tratamientos as $item) {
                Anticonceptivo::create([
                    'medicamento' => $item['medicamento'],
                    'numdosis' => $item['numdosis'],
                    'proxdosis' => $item['proxdosis'] != "" ? $item['proxdosis'] : NULL,
                    'consulta_id' => $id
                ]);
            }
        }



        return redirect()->route('anticonceptivos.index')
            ->with('success', 'create');
    }
}
