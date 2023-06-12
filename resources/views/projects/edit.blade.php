@extends('layouts.app')

@section('title', 'Editar Proyecto')

@section('content')

    <h1 class="text-white text-xl mb-5">Editar Proyecto</h1>

    <form action="{{ route('projects.update', $project) }}" class="text-white" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="text">Nombre Poyecto</label><br>
            <input type="text" name="nombreProyecto" class="form-control text-black mb-3" value="{{ $project->nombreProyecto }}"/>
        </div>
        <div class="form-group">
            <label for="text">Fuente Fondos</label><br>
            <input type="text" name="fuenteFondos" class="form-control text-black mb-3" value="{{ $project->fuenteFondos }}"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Planificado</label><br>
            <input type="text" name="montoPlanificado" class="form-control text-black mb-3" value="{{ $project->montoPlanificado }}"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Patrocinado</label><br>
            <input type="text" name="montoPatrocinado" class="form-control text-black mb-3" value="{{ $project->montoPatrocinado }}"/>
        </div>
        <div class="form-group">
            <label for="text">Monto Fondos Propios</label><br>
            <input type="text" name="montoFondosPropios" class="form-control text-black mb-3" value="{{ $project->montoFondosPropios }}"/>
        </div>
        <input type="submit" value="Editar proyecto" class="btn btn-success w-100">
    </form>

@endsection