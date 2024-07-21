<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectPostController extends Controller
{
    public function createOne(Request $request)
    {
        $id = $request["id"];
        $nombre = $request["nombre"];
        $fecha_inicio = $request["fecha_inicio"];
        $estado = $request["estado"];
        $responsable = $request["responsable"];
        $monto = $request["monto"];
        $requestParse = new Project($id, $nombre, $fecha_inicio, $estado, $responsable, $monto);
        $project = Project::newProject($requestParse);
        return view('newProjectView', compact('project'));
}
}
