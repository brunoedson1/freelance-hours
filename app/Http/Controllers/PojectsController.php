<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PojectsController extends Controller
{
    public function index() {
        return view('projects.index');
    }

    public function show(Project $project) {

        return view('projects.show', compact('project'));
    }
}
