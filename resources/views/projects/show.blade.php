<!doctype html>

<title>Project</title> 
<link rel="stylesheet" href="/app.css">

<body>
    <article>
        <a href="/projects">
            Back To Projects
        </a>
        <h1>{{$project->title}}</h1>
        <p>{{$project->description}}</p>
        <form method="POST" action="/projects/{{$project->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Project</button>
        </form>
        <br/>
        <a href="/projects/{{$project->id}}/edit">Edit Project</a>
        <br/>
        <h2>Tasks</h2>
        <form method="POST" action="/tasks">
            @csrf
            <input type="text" placeholder="Task Description" name="description">
            <input type="hidden" value="{{$project->id}}" name="project_id">
            <button type="submit">Add New Task</button>
        </form>
        <ul>
            @foreach ($project->tasks as $task)
                <li>
                    {{$task->description;}}
                    <a href="/tasks/{{$task->id}}/edit">Edit Task</a>
                    <form method="POST" action="/tasks/{{$task->id}}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$project->id}}" name="project_id">
                        <button>Delete Task</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </article>
</body>