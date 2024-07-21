<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectGetAllController extends Controller
{
    public function getAll()
    {
        $projects = Project::getAll();
        return view('getAllView', compact('projects'));
    }
}
