<!doctype html>

<title>Project</title> 
<link rel="stylesheet" href="/app.css">

<body>
<h1>Add New Project</h1>
<form action="/projects" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Project Title"> 
    <br/> <br/>
    <input type="text" name="description" placeholder="Project Description">
    <button type="submit">Add Project</button>
</form>

</body>