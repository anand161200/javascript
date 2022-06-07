<!DOCTYPE html>
<html lang="en">
<head>
    <title>javascript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="content"  class="text-danger">
    <h1> ABC</h1>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
         <ul id="list" class="text-success">
            <li>ABC</li>
            <li>BCA</li>
        </ul>
</div>

<script>
   // document.getElementById("content").innerText;   // onlytext
   // document.getElementById("content").innerHTML;   // text with html
   console.log( document.getElementById("list").getAttribute("id"));
   console.log( document.getElementById("list").getAttribute("class"));
</script>
    
</body>
</html>