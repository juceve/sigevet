<?php

namespace App\Http\Livewire;

use App\Models\Animale;
use App\Models\Cliente;
use App\Models\Raza;
use Livewire\Component;

class SelectAnimal extends Component
{
    public $animales;
    public $clientes;
    public $razas = NULL;
    public $razaPaciente = NULL;
    public $animale_id = NULL;
    public $selectedAnimale = 0;

    public function mount($razaPaciente)
    {
        if (!is_null($razaPaciente)) {
            $this->razaPaciente = $razaPaciente;
            $this->animale_id = Raza::select('animale_id')->where('id', $razaPaciente)->get();
            $this->razas = Raza::where('animale_id', $this->animale_id[0]->animale_id)->get();
        }


        $this->animales = Animale::all();
        $this->clientes = Cliente::all();
    }

    public function updatedselectedAnimale($animale_id)
    {
        $this->razas = Raza::where('animale_id', $animale_id)->get();
    }

    public function render()
    {
        return view('livewire.select-animal');
    }
}
