<!doctype html>

<title>Project</title> 
<link rel="stylesheet" href="/app.css">

<body>
<h1>Edit Project</h1>
<form action="/editproject/{{$project->id}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{$project->title;}}"> 
    <br/> <br/>
    <input type="text" name="description" value="{{$project->description;}}">
    <button type="submit">Save Edited Project</button>
</form>

</body>