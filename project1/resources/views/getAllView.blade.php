<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Lista de proyectos</h1>
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
            @foreach ($projects as $item)
                <tr>
                    <td>{{ $item->getId() }}</td>
                    <td>{{ $item->getNombre() }}</td>
                    <td>{{ $item->getFechaDeInicio() }}</td>
                    <td>{{ $item->getEstado() }}</td>
                    <td>{{ $item->getResponsable() }}</td>
                    <td>{{ $item->GetMonto() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

