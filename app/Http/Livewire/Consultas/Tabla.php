<?php

namespace App\Http\Livewire\Consultas;

use App\Models\Consulta;
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
        $consultas = DB::table('vw_consultas')
                            ->where('paciente','like',"%$this->busqueda%")
                            ->orWhere('cliente','like',"%$this->busqueda%")
                            ->orWhere('dateConsulta','like',"%$this->busqueda%")
                            ->orWhere('fecreconsulta','like',"%$this->busqueda%")
                            ->orderBy('id','desc')
                            ->paginate($this->paginate);
        return view('livewire.consultas.tabla',compact('consultas'));
    }
}
