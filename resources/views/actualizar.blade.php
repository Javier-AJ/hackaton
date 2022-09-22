@extends('layouts/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
@extends('layouts.app')
<div class="card">
    <h5 class="card-header">Actualizar nueva persona</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.update', $contenedores->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Ruta</label>
                <input type="text" name="ruta" class="form-control" required value="{{$contenedores->ruta}}">
                <label for="">Contenedor</label>
                <input type="text" name="contenedor" class="form-control" required value="{{$contenedores->contenedor}}">
                <label for="">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" required value="{{$contenedores->ubicacion}}">
                <label for="">Estatus</label>
                <br>
                <select name="estatus" class="form-control" required>
                <option value="">Elige una opción</option>
                <option value="Vacio">Vacio</option>
                <option value="Medio">Medio</option>
                <option value="Lleno">Lleno</option>
                </select>
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection


