
@extends('layouts/plantilla')

@section('tituloPagina', 'ITAT')

@section('contenido')

@extends('layouts.app')

<div class="card">
    <h5 class="card-header">Contendor Inteligente</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                
            </div>
        </div>
        <h5 class="card-title text-center">Listado contenedores en la ciudad</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo contenedor
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Ruta</th>
                        <th>Contenedor</th>
                        <th>Ubicación</th>
                        <th>Estatus</th>
                        <th colspan="3">Opciones</th>
                        
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->ruta }}</td>
                            <td>{{ $item->contenedor }}</td>
                            <td>{{ $item->ubicacion }}</td>
                            <td>{{ $item->estatus }}</td>
                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-info btn-sm">
                                        <span class="fas fa-location-arrow"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </p>
    </div>
</div>

@endsection 