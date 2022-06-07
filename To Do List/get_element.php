<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Java script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2> My To Do List</h2>
<div>
    <input type="text" id="name" placeholder="title">
    <button type="button" class="btn btn-primary" onclick='document.getElementById("demo").
    innerHTML += document.getElementById("name").value'>ADD</button>

<p id="demo"></p>
   
</div>
</div>  
</body>
</html>