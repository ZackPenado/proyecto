@extends('layouts.app')

@section('title', 'Crear Proyecto')

@section('content')

    <h1 class="text-white text-xl mb-5">Crear Proyecto</h1>

    <form action="{{ route('projects.store') }}" method="post" class="text-white">
        @csrf
        <div class="form-group">
            <label for="text">Nombre Poyecto</label><br>
            <input type="text" name="nombreProyecto" class="form-control text-black mb-3" placeholder="Nombre Poyecto"/>
        </div>
        <div class="form-group">
            <label for="text">Fuente Fondos</label><br>
            <input type="text" name="fuenteFondos" class="form-control text-black mb-3" placeholder="Fuente Fondos"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Planificado</label><br>
            <input type="text" name="montoPlanificado" class="form-control text-black mb-3" placeholder="Monto Planificado"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Patrocinado</label><br>
            <input type="text" name="montoPatrocinado" class="form-control text-black mb-3" placeholder="Monto Patrocinado"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Fondos Propios</label><br>
            <input type="text" name="montoFondosPropios" class="form-control text-black mb-3" placeholder="Monto Fondos Propios"/>
        </div>
        <input type="submit" value="Agregar proyecto" class="btn btn-success w-100">
    </form>

@endsection