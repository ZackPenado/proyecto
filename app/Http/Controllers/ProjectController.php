<?php

namespace App\Http\Controllers;

use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use PDF;

class ProjectController extends Controller
{
    public function index()
    {
        $proyectos = Project::all();
        return view('projects.index', compact('proyectos'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create([
            'nombreProyecto' => $request->nombreProyecto,
            'fuenteFondos' => $request->fuenteFondos,
            'montoPlanificado' => $request->montoPlanificado,
            'montoPatrocinado' => $request->montoPatrocinado,
            'montoFondosPropios' => $request->montoFondosPropios
        ]);

        return redirect()->route('projects.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project = Project::find($project->id);
        $project->update([
            'nombreProyecto' => $request->nombreProyecto,
            'fuenteFondos' => $request->fuenteFondos,
            'montoPlanificado' => $request->montoPlanificado,
            'montoPatrocinado' => $request->montoPatrocinado,
            'montoFondosPropios' => $request->montoFondosPropios
        ]);

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        Project::destroy($project->id);

        return redirect()->route('projects.index');
    }

    public function report()
    {
        $proyectos = Project::all();
        $pdf = PDF::loadView('projects.pdf_report', compact('proyectos'));

        return $pdf->stream('prueba.pdf');
    }
}
