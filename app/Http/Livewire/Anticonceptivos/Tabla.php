<?php

namespace App\Http\Livewire\Anticonceptivos;

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
        $anticonceptivos = DB::table('vw_anticonceptivos')
                            ->where('paciente','like',"%$this->busqueda%")
                            ->orWhere('medicamento','like',"%$this->busqueda%")
                            ->orWhere('created_at','like',"%$this->busqueda%")
                            ->orderBy('id','desc')
                            ->paginate($this->paginate);
        return view('livewire.anticonceptivos.tabla',compact('anticonceptivos'));
    }
}
