<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectDeleteController extends Controller
{
    public function deleteOne($id)
    {
        $project = Project::deleteProject($id);
        return view('deleteOneView', compact('project'));
    }
}
