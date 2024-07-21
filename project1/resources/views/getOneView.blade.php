<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Proyecto por ID</h1>
        <table>
            <thead>
            <td>ID</td>
            <td>Nombre</td>
            <td>Fecha de Inicio</td>
            <td>Estado</td>
            <td>Responsable</td>
            <td>Monto</td>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $project->getId() }}</td>
                    <td>{{ $project->getNombre() }}</td>
                    <td>{{ $project->getFechaDeInicio() }}</td>
                    <td>{{ $project->getEstado() }}</td>
                    <td>{{ $project->getResponsable() }}</td>
                    <td>{{ $project->GetMonto() }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

