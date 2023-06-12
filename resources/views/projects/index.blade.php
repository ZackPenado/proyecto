@extends('layouts.app')

@section('title', 'Lista de Proyectos')

@section('content')
    <h1 class="text-white text-xl mb-5">Lista de Proyectos</h1>

    <div class="mb-5">

        <a href="{{ route('projects.create') }}" class="text-white under-line">+ Agregar un proyecto</a>
    </div>

    @if (count($proyectos) > 0)
        <table class="text-white mb-5">
            <thead>
                <tr>
                    <th class="px-6">Nombre Poyecto</th>
                    <th class="px-6">Fuente Fondos</th>
                    <th class="px-6">Monto Planificado</th>
                    <th class="px-6">Monto Patrocinado</th>
                    <th class="px-6">Monto Fondos Propios</th>
                    <th class="px-6 text-center" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td class="px-6">{{ $proyecto->nombreProyecto }}</td>
                        <td class="px-6">{{ $proyecto->fuenteFondos }}</td>
                        <td class="px-6">{{ $proyecto->montoPlanificado }}</td>
                        <td class="px-6">{{ $proyecto->montoPatrocinado }}</td>
                        <td class="px-6">{{ $proyecto->montoFondosPropios }}</td>
                        <td class="px-6">
                            <a class="btn btn-success" href="{{ route('projects.edit', $proyecto) }}">Editar</a>
                        </td>
                        <td class="px-6">
                            <form action="{{ route('projects.destroy', $proyecto) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" href="{{ route('report') }}" target="_blank">Generar Reporte PDF</a>
    @else
        <span class="text-white text-center text-xl py-3">No hay registros para mostrar...</td>
    @endif
    

@endsection
