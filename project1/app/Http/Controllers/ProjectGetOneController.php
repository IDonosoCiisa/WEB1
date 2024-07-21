<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectGetOneController extends Controller
{
    public function getOne($id)
    {
        $project = Project::getById($id);
        return view('getOneView', compact('project'));
    }
}
