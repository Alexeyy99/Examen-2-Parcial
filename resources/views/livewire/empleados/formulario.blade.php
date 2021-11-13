<div>
    <div class="text-center">
        <h1>Añadir empleado</h1>
    </div>

    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Primer Nombre</label>
                        <input wire:model.defer="empleado.primerNombre" type="text" class="form-control" placeholder="">
                        @error('empleado.primerNombre') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input wire:model.defer="empleado.segundoNombre" type="text" class="form-control" placeholder="" >
                        @error('empleado.segundoNombre') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input wire:model.defer="empleado.apellidoPaterno" type="text" class="form-control" placeholder="">
                        @error('empleado.apellidoPaterno') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Apellido Materno</label>
                        <input wire:model.defer="empleado.apellidoMaterno" type="text" class="form-control" placeholder="" >
                        @error('empleado.apellidoMaterno') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Sexo</label>
                        <input wire:model.defer="empleado.sexo" type="text" class="form-control" placeholder="Masculino/Femenino">
                        @error('empleado.sexo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input wire:model.defer="empleado.fNacimiento" type="text" class="form-control" placeholder="Ejemplo 15 de noviembre de 1999">
                        @error('empleado.fNacimiento') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Puesto de trabajo</label>
                        <input wire:model.defer="empleado.puestoTrabajo" type="text" class="form-control" placeholder="">
                        @error('empleado.puestoTrabajo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Curp</label>
                        <input wire:model="empleado.curp" type="text" class="form-control" placeholder="">
                        @error('empleado.curp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

            </div>

        </div>

        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>RFC</label>
                        <input wire:model="empleado.rfc" type="text" class="form-control" placeholder="">
                        @error('empleado.rfc') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <input wire:model.defer="empleado.estado" type="text" class="form-control" placeholder="" >
                        @error('empleado.estado') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Codigo Postal</label>
                        <input wire:model="empleado.codigoPostal" type="text" class="form-control" placeholder="">
                        @error('empleado.codigoPostal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Salario</label>
                        <input wire:model.defer="empleado.salario" type="text" class="form-control" placeholder="" >
                        @error('empleado.salario') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Correo</label>
                        <input wire:model.defer="empleado.correo" type="text" class="form-control" placeholder="">
                        @error('empleado.correo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label >Horario de trabajo</label>
                        <input wire:model.defer="empleado.horarioTrabajo" type="text" class="form-control" placeholder="Matutino/Vespertino">
                        @error('empleado.horarioTrabajo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Area de trabajo</label>
                        <input wire:model.defer="empleado.areaTrabajo" type="text" class="form-control" placeholder="">
                        @error('empleado.areaTrabajo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Facebook</label>
                        <input wire:model.defer="empleado.facebook" type="text" class="form-control" placeholder="">
                        @error('empleado.facebook') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Telefono</label>
                        <input wire:model="empleado.telefono" type="text" class="form-control" placeholder="">
                        @error('empleado.telefono') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer container-fluid mt-2">
            <a href="{{route('empleados.index')}}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button>
        </div>
    </div>



</div>
