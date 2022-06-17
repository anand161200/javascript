<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h5 class="card-title">Total : <span class="card-text" id="item_count"></span></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body  bg-light text-black">
                    <h5 class="card-title">Complete : <span class="card-text" id="complete"></span></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body bg-light text-black">
                    <h5 class="card-title">InComplete : <span class="card-text" id="incomplete"></span></h5>
                </div>
            </div>
        </div>
    </div>
        <div class="input-group mt-3">
            <input type="text" id="user_name" class="form-control" >
            <div class="input-group-append">
                <button class="btn btn-success" onclick="add()" type="button">+</button>
            </div>
        </div>
        <div class="mt-3">
            <ul class="list-group" id="user_list" >
            </ul>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    
        let user_name = document.getElementById('user_name');
        let user_list = document.getElementById('user_list');
        let count=0;
        let total = document.getElementById('item_count');
        let complete = document.getElementById('complete');
        let incomplete = document.getElementById('incomplete');
         
        let user_data= [
            {
                id: 1,
                name :'Virat Kohli',
                is_complate : false
            },
            {
                id: 2,  
                name :'Rohit Sarma',
                is_complate : false
            }
        ];

        window.onload=function(){
            reload();
        }

        function reload() {
            user_list.innerHTML='';
            count=0;

            user_data.forEach(function(user){
                user_list.innerHTML+= `<li class="list-group-item bg-light d-flex justify-content-between align-items-center">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="check_${user.id}" data-objectid="${user.id}"
                         onclick="updateStatus(this)"
                         ${(user.is_complate == true) ? 'checked' : ''}>
                        <span class="${(user.is_complate == true ) ? 'text-decoration-line-through' : ''} ">
                         ${user.name} </span>
                    </label>
                </div>
                <button class="btn btn-danger btn-sm" data-objectid="${user.id}" onclick="remove(this)">x</button></li>`;   

                if(user.is_complate === true)
                {
                    count++;
                }
            });
            calculation(); 
        }
        
        function add() {

            if(user_name.value == "")
            {   
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter your name.'
                })
            }
            else{
                user_data.push({
                    id : Date.now(),
                    name : user_name.value,
                    strike: false
                });
                reload();
                user_name.value='';
            }
        }

        function remove(element) {
            let objectId = user_data.findIndex(function(todo) {
                return todo.id.toString() === element.dataset.objectid
            });
           let name= user_data[objectId].name

            Swal.fire({
                title: 'Are you sure want to delete ?',
                text: name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                    user_data.splice(objectId,1);
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: `${name} delete successfully`,
                    showConfirmButton: false,
                    timer: 1500
                })
                    reload();
                }
            })
        }

        function updateStatus(element) {

            let objectId = user_data.findIndex(function(todo) {
                return todo.id.toString() === element.dataset.objectid
            });

            let checkBox= document.getElementById(`check_${element.dataset.objectid}`)

            if (checkBox.checked == true){
               user_data[objectId].is_complate=true;
            } 
            else{
                user_data[objectId].is_complate=false;
            }
            reload();  
        }

        function calculation()
        {     
            total.innerHTML=user_data.length;
            complete.innerHTML=count;
            incomplete.innerHTML=user_data.length-count;
        }
        
    </script>  
</body>
</html>
