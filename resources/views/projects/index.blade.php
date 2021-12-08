<!doctype html>

<title>Projects</title> 
<link rel="stylesheet" href="/app.css">

<body>
    <a href="/projects/create">
        Add Project
    </a>
    <article>
    @foreach ($projects as $project)
        <h1>
            {{ $project->title }}
        </h1>
        <p>{{ $project->description }}</p>
        <a href="/projects/{{ $project->id }}">
            View Tasks
        </a>
    @endforeach
    </article>
</body>
