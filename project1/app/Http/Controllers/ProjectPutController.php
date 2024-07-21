<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectPutController extends Controller
{
    public function updateOne(Request $request, $id)
    {;
        $nombre = $request["nombre"];
        $fecha_inicio = $request["fecha_inicio"];
        $estado = $request["estado"];
        $responsable = $request["responsable"];
        $monto = $request["monto"];
        $requestParse = new Project($id, $nombre, $fecha_inicio, $estado, $responsable, $monto);
        $project = Project::updateProject($requestParse, $id);
        return view('updateProjectView', compact('project'));
    }
}
