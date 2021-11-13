<div>

    <div class="mt-5">
        <div class="mb-2">
            <a href="{{route('empleados.create')}}" type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Nuevo empleado</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table-sm table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Puesto de trabajo</th>
                    <th scope="col">Curp</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Codigo Postal</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Horario de trabajo</th>
                    <th scope="col">Area de trabajo</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            @foreach ($empleados as $empleado)
                <tbody>
                    <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->primerNombre}}</td>
                    <td>{{$empleado->segundoNombre}}</td>
                    <td>{{$empleado->apellidoPaterno}}</td>
                    <td>{{$empleado->apellidoMaterno}}</td>
                    <td>{{$empleado->sexo}}</td>
                    <td>{{$empleado->fNacimiento}}</td>
                    <td>{{$empleado->puestoTrabajo}}</td>
                    <td>{{$empleado->curp}}</td>
                    <td>{{$empleado->rfc}}</td>
                    <td>{{$empleado->estado}}</td>
                    <td>{{$empleado->codigoPostal}}</td>
                    <td>{{$empleado->salario}}</td>
                    <td>{{$empleado->correo}}</td>
                    <td>{{$empleado->horarioTrabajo}}</td>
                    <td>{{$empleado->areaTabajo}}</td>
                    <td>{{$empleado->facebook}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>
                        <a type="button" href="{{route('empleados.edit', $empleado)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a type="button" href="{{route('empleados.delete', $empleado)}}" class="btn btn-danger mt-2 btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    {{$empleados->links()}}
</div>
