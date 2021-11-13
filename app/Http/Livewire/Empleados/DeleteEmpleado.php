<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class DeleteEmpleado extends Component
{
    public Empleado $empleado;

    public function render()
    {
        return view('livewire.empleados.delete-empleado');
    }

    public function delete(){
        $this->empleado->delete();
        return redirect(route('empleados.index'));
    }
}
