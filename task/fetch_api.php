<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fetch api</title>
</head>
<body>

    <div class="container">
        <div class="mt-5 text-center text-danger" >
            <h2> My To Do List</h2>
        </div>
        <select class="form-select mt-3" id="user_list" aria-label="Default select example">
            
        </select>
        <div class="mt-3">
            <ul class="list-group" id="user_data" >
            </ul>
        </div>
    </div>
    <script>
        let user_list=document.getElementById('user_list');
        let user_data=document.getElementById('user_data');

        fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(data => data.forEach(function(user_data) {
            user_list.innerHTML += `<option value="${user_data.id}">
                    ${user_data.name}
              </option>` 
        }))

            document.getElementById("user_list").addEventListener('change', (event) => {
              // console.log(event.target.value)
                user_data.innerHTML="";
                fetch(`https://jsonplaceholder.typicode.com/todos?userId=${event.target.value}`)
                .then(response => response.json())
                .then(data => data.forEach(function(user){
                    user_data.innerHTML +=  
                    `<li class="list-group-item d-flex justify-content-between align-items-center"      style="background-color : ${(user.completed == true ) ? 'lightgrey' : 'white'}">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="check_${user.id}" data-objectid="${user.id}"
                                onclick="updateStatus(this)"
                                ${(user.completed == true) ? 'checked' : ''}>
                                <span class="${(user.completed == true ) ? 'text-decoration-line-through' : ''} ">
                                ${user.title} </span>
                            </label>
                        </div>
                    </li>`; 
                }));
                    
            });
    
        function updateStatus(element , data) {

            let objectId = data.findIndex(function(todo) {
                return todo.id.toString() === element.dataset.objectid
            });

            let checkBox= document.getElementById(`check_${element.dataset.objectid}`)

            if (checkBox.checked == true){
                data[objectId].completed=true;
            } 
            else{
                data[objectId].completed=false;
            } 
        }
        
    </script>  
</body>
</html>