<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;


class TaskController extends Controller
{
    public function addTask(Request $req)
    {
        $task = new Task;
        $task->description=$req->description;
        $task->project_id=$req->project_id;
        $task->save();
        return redirect('/project/'.$req->project_id);
    }
    public function showTaskEdit(Task $task)
    {
        return view('taskedit', [
            'task' => $task,
        ]);
    }
    public function taskEdit(Request $req)
    {
        $data=Task::find($req->id);
        $data->description=$req->description;
        $data->save();
        return redirect('/project/'.$req->project_id);
    }
    public function delete(Task $task)
    {
        Task::find($task->id)->delete();
        return redirect('/project/'.$task->project_id);
    }
}
