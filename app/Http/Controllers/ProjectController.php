<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;


class ProjectController extends Controller
{
    public function show(Project $project)
    {
        return view('project', [
            'tasks' => $project->tasks,
            'project' => $project,
        ]);
    }
    public function addProject(Request $req)
    {
        $project = new Project;
        $project->title=$req->title;
        $project->description=$req->description;
        $project->save();
        return redirect('/');
    }
    public function delete(Project $project)
    {
  
        $project->delete();
        
        return redirect('/');
    }
    public function showEdit(Project $project)
    {
        return view('editproject', [
            'project' => $project,
        ]);
    }
    public function edit(Request $req)
    {
        $data=Project::find($req->id);
        $data->title=$req->title;
        $data->description=$req->description;
        $data->save();
        return redirect('/project/'.$req->id);
    }
}
