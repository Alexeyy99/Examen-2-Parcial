<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EditEmpleado extends Component
{
    public Empleado $empleado;

    public function render()
    {
        return view('livewire.empleados.edit-empleado');
    }

    public function mount($empleado)
    {
        $this->carro = $empleado;
    }

    public function editar()
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
