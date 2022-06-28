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
        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body bg-light text-black">
                        <h5 class="card-title">Total : <span class="card-text" id="item_count">0</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body  bg-light text-black">
                        <h5 class="card-title">Complete : <span class="card-text" id="complete">0</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body bg-light text-black">
                        <h5 class="card-title">InComplete : <span class="card-text" id="incomplete">0</span></h5>
                    </div>
                </div>
            </div>
     </div>
        <select class="form-select mt-3" id="user_list" aria-label="Default select example">
        <option value="">Open this select menu</option> 
        </select>
        <div class="mt-3">
            <ul class="list-group" id="user_data">
            </ul>
        </div>
    </div>
    <script>
        let user_list=document.getElementById('user_list');
        let user_data=document.getElementById('user_data');
        let total = document.getElementById('item_count');
        let complete = document.getElementById('complete');
        let incomplete = document.getElementById('incomplete');

        let alldata= '';
        let total_complate=0;

        fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(data => data.forEach(function(user_data) {
            user_list.innerHTML += `<option value="${user_data.id}">
                    ${user_data.name}
              </option>` 
        }))

        document.getElementById("user_list").addEventListener('change', (event) => {
              // console.log(event.target.value)
                fetch(`https://jsonplaceholder.typicode.com/todos?userId=${event.target.value}`)
                .then(response => response.json())
                .then(data => {
                    alldata = data;  // new variable define array store in variable
                    reload();
                }); 
            });

            function reload(){
                user_data.innerHTML="";
                total_complate=0;
                
                alldata.forEach(function(user){
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
                        <button class="btn btn-danger btn-sm" data-objectid="${user.id}" onclick="remove(this)">x
                        </button>
                    </li>`;

                    if(user.completed === true)
                    {
                        total_complate++;
                    }
                })
                calculation();
            }
    
        function updateStatus(element) {

            let objectId = alldata.findIndex(function(todo) {
                return todo.id.toString() === element.dataset.objectid
            });

            let checkBox= document.getElementById(`check_${element.dataset.objectid}`)

            if (checkBox.checked == true){
                alldata[objectId].completed=true;
            } 
            else{
                alldata[objectId].completed=false;
            }
            reload();
        }

        function remove(element)
        {
            let objectId = alldata.findIndex(function(todo) {
                return todo.id.toString() === element.dataset.objectid
            });

            alldata.splice(objectId,1);
            reload();
        }

        function calculation()
        {     
            total.innerHTML=alldata.length;
            complete.innerHTML=total_complate;
            incomplete.innerHTML=alldata.length-total_complate;
        }
        
    </script>  
</body>
</html>