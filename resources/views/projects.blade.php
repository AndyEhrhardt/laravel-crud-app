<!doctype html>

<title>Projects</title> 
<link rel="stylesheet" href="/app.css">

<body>
    <a href="/addproject">
        Add Project
    </a>
    <article>
    @foreach ($projects as $project)
        <h1>
            {{$project->title;}}
        </h1>
        <p>{{$project->description}}</p>
        <a href="/project/{{$project->id}}">
            View Tasks
        </a>
    @endforeach
    </article>
</body>
