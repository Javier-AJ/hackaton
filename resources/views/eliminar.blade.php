@extends('layouts/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
@extends('layouts.app')
<div class="card">
    <h5 class="card-header">Eliminar un contenedor!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Ruta</th>
                        <th>Contenedor</th>
                        <th>Ubicacion</th>
                        <th>Estatus</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $contenedores->ruta }}</td>
                            <td>{{ $contenedores->contenedor }}</td>
                            <td>{{ $contenedores->ubicacion }}</td>
                            <td>{{ $contenedores->estatus }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('personas.destroy', $contenedores->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("personas.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection


