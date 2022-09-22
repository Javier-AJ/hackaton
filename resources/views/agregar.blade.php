@extends('layouts/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
@extends('layouts.app')
<div class="card">
    <h5 class="card-header">Agregar nuevo contenedor</h5>
    <div class="card-body">
        
        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="">Nombre de Ruta</label>
                <input type="text" name="ruta" class="form-control" required>
                <label for="">Nombre contenedor</label>
                <input type="text" name="contenedor" class="form-control" required>
                <label for="">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" required>
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
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection


