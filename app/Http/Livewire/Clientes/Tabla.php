<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
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
        $clientes = Cliente::where('nombre','like','%'.$this->busqueda.'%')
                            ->orderBy('id','desc')
                            ->paginate($this->paginate);
        return view('livewire.clientes.tabla',compact('clientes'));
    }
}
