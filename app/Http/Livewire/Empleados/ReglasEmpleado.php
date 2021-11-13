<?php

namespace App\Http\Livewire\Empleados;

class ReglasEmpleado {
    public static function reglas(){
        return[
            'empleado.primerNombre'=> 'required|string',
            'empleado.segundoNombre'=> '',
            'empleado.apellidoPaterno'=> 'required|string',
            'empleado.apellidoMaterno'=> 'required|string',
            'empleado.sexo'=> 'required|string',
            'empleado.fNacimiento'=> 'required|string',
            'empleado.puestoTrabajo'=> 'required|string',
            'empleado.curp'=> 'required|string',
            'empleado.rfc'=> 'required|string',
            'empleado.estado'=> 'required|string',
            'empleado.codigoPostal'=> 'required|numeric',
            'empleado.salario'=> 'required|numeric',
            'empleado.correo'=> 'required|string',
            'empleado.horarioTrabajo'=> 'required|string',
            'empleado.areaTrabajo'=> 'required|string',
            'empleado.facebook'=> 'required|string',
            'empleado.telefono'=> 'required|string'
        ];
    }
}
