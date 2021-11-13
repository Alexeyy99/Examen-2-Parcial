<div>
    <div class="mx-auto card" style="width: 25rem;">
        <div class="card-body text-center">
          <h5 class="card-title">{{$empleado->id}} {{$empleado->primerNombre}} {{$empleado->apellidoPaterno}}</h5>
          <p class="card-text">{{$empleado->estado}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('empleados.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
      </div>
</div>
