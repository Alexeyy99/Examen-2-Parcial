<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class CreateEmpleado extends Component
{
    public function mount(){
        $this->empleado = new Empleado();
    }

    public Empleado $empleados;

    public function render()
    {
        return view('livewire.empleados.create-empleado');
    }

    public function crear()
    {
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }

    protected function rules()
    {
        return ReglasEmpleado::reglas();
    }
}
