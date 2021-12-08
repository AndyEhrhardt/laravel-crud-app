<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;


class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all()
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        $project->load('tasks');
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        
        return redirect('/projects/' . $project->id);
    }
    
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
