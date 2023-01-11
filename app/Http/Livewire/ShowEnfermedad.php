<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowEnfermedad extends Component
{
    public $enfermedad;

    public function mount($enfermedad_id)
    {
        
    }
    public function render()
    {
        return view('livewire.show-enfermedad');
    }
}
