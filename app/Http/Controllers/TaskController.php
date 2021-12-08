<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;


class TaskController extends Controller
{
    public function index() {
        //
    }
    public function show()
    {
        //
    }
    public function create(){
        //
    }
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect('/projects/' . $request->project_id);
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/projects/' . $task->project_id);
    }
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task,
        ]);
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect('/projects/' . $task->project_id);
    }
}
