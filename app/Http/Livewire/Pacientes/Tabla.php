<?php

namespace App\Http\Livewire\Pacientes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Tabla extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $busqueda, $paginate=5;

    public function updatingBusqueda()
    {
        $this->resetPage();
    }
    public function updatedPaginate()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pacientes = DB::table('vw_pacientes')
                            ->where('nombre','like',"%$this->busqueda%")
                            ->orWhere('cliente','like',"%$this->busqueda%")
                            ->orWhere('raza','like',"%$this->busqueda%")
                            ->orWhere('sexo','like',"%$this->busqueda%")
                            ->orderBy('id','desc')
                            ->paginate($this->paginate);
        return view('livewire.pacientes.tabla',compact('pacientes'));
    }
}
