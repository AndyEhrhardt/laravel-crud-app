<!doctype html>

<title>Task</title> 
<link rel="stylesheet" href="/app.css">

<body>
<h1>Edit Task</h1>
<form action="/tasks/{{$task->id}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="description" value="{{$task->description;}}"> 
    <input type="hidden" value="{{$task->project_id}}" name="project_id">
    <button type="submit">Save Edited Task</button>
</form>

</body>