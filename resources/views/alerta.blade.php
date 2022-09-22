@extends('layouts/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
@extends('layouts.app')
<div class="card">
    <h5 class="card-header">Alertar</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.alertUpdate', $contenedores->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Por favor seleccione el motivo de reporte:</label>
                <br>
                <select name="alert" class="form-control" required>
                <option value="">Elige una opción</option>
                <option value="1">Mal estado</option>
                <option value="2">Lleno</option>
                <option value="3">Destrucción</option>
                </select>
                <br>
                <a href="{{ route("personas.invitado") }}" class="btn btn-info" >
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


