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
</div>
<script>
   
    let node_list=document.getElementById('name');
    let node_element = document.getElementById('user_list');
    let node_data=[
        {
            name:"anand"
        },
        {
            name:"nibhay"
        }
    ];

    window.onload = function(){ 
        reloadUserList();
    }

    function reloadUserList(){

        node_element.innerHTML = '';
        
        node_data.forEach(function(user_list , index){     
            node_element.innerHTML +=`<li id="user_${index}" onclick="manageStrike(${index})" 
            class="list-group-item bg-light d-flex justify-content-between align-items-center">
            <span class="${((index + 1)%2==0)? 'text-danger' : 'text-success'}"> ${index + 1} . ${user_list.name}
            </span> 
            <button class="btn btn-danger" onclick="remove(${index})">x</button>
            </li>`;
        }); 

    }

    function add()
    {
       if( node_list.value =="")
       {
           alert("please Enter name");
       }
       else{
        node_data.push({
            'name' : node_list.value
        });
        
        reloadUserList();
        node_list.value="";  
       }
    }

    function remove(index)
    {
        let remove=confirm("are you sure want to delete this record ?")
        if(remove)
        { 
            node_data.splice(index, 1);
            reloadUserList(); 
        } 
    }

    function manageStrike(index)
    {
        strick=document.getElementById(`user_${index}`);
        
    }
       
</script>
</body>
</html>

