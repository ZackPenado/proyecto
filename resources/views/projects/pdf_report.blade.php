<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">MINISTERIO DE VIVIENDA</h1>
    <h3 style="text-align: center">Reporte de proyectos generado al {{ date('d/m/Y') }}</h3>
    <h5 style="text-align: center">Generado por: Isaac Humberto Penado Cruz</h5>
    
    <table class="text-white">
        <thead>
            <tr>
                <th class="px-6">Nombre Poyecto</th>
                <th class="px-6">Fuente Fondos</th>
                <th class="px-6">Monto Planificado</th>
                <th class="px-6">Monto Patrocinado</th>
                <th class="px-6">Monto Fondos Propios</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>