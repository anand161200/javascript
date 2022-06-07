<!DOCTYPE html>
<html lang="en">
<head>
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="mt-5 text-center" >
        <h2> My To Do List</h2>
    </div>
    <div class="input-group mb-3 mt-5">
        <input type="text" class="form-control" id="name" placeholder="title">
        <button class="btn btn-success" type="button" onclick="add()">+ Add User</button>
    </div>
    <div class="mt-3">
        <ul class="list-group" id="user_list">     
        </ul>
    </div>
    <script>
          let employees=[
            {
                name:"anand"
            },
            {
                name:"nibhay"
            }
          ];

          let node_element= document.getElementById('user_list');

          employees.forEach(function(employee){

            // console.log(employee);   

            node_element.innerHTML +=`<li class="list-group-item bg-light d-flex justify-content-between       align-items-center">
             ${employee.name}  
             <button class="btn  btn-danger">x</button>
             </li>`;
             
          });
       
    </script>
</div>
</body>
</html>