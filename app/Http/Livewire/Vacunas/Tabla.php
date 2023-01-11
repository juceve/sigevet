<?php

namespace App\Http\Livewire\Vacunas;

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
        $vacunas = DB::table('vw_vacunas')
                            ->where('paciente','like',"%$this->busqueda%")
                            ->orWhere('medicamento','like',"%$this->busqueda%")
                            ->orWhere('numdosis','like',"%$this->busqueda%")
                            ->orWhere('proxdosis','like',"%$this->busqueda%")
                            ->orderBy('id','desc')
                            ->paginate($this->paginate);
        return view('livewire.vacunas.tabla',compact('vacunas'));
    }
}
