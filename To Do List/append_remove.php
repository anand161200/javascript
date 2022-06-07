<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Java script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<input type="text" id="name" placeholder="title">
<button onclick="add()">Click Me</button> 
<button  onclick="remove()">delete</button> 
<ul id="demo"></ul>
<script>
      let list=document.getElementById("demo");
      let value=document.getElementById("name").value
        function add()
         {      
            let list=document.getElementById("demo");
            let input=document.getElementById("name");
            let text = document.createTextNode(input.value)
            let newItem = document.createElement("li")
            newItem.appendChild(text)
            list.appendChild(newItem)

            input.value='';

         }
         function remove()
         {
            let list = document.getElementById("demo");
            list.removeChild(list.lastElementChild)
         }
    </script>
</body>
</html>

