<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="mt-5 text-center" >
            <h2> My To Do List</h2>
        </div>
        <div class="input-group mt-5">
            <input type="text" id="user_name" class="form-control" >
            <div class="input-group-append">
                <button class="btn btn-success" onclick="add()" type="button">+ ADD</button>
            </div>
        </div>
        <div class="mt-3">
            <ul class="list-group" id="user_list" >
            </ul>
        </div>
    </div>
    <script>
        let user_name = document.getElementById('user_name');
        let user_list = document.getElementById('user_list');

        let user_data= [
            {
                name :'Virat Kohli',
                strike : false
            },
            {
                name :'Rohit Sarma',
                strike : false
            }
        ];

        window.onload=function(){
            reload();
        }

        function reload() {
            user_list.innerHTML='';

            user_data.forEach(function(user_input, index){
                user_list.innerHTML+= `<li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="check_${index}" onclick="Strike(${index})"
                         ${(user_input.strike == true) ? 'checked' : ''}>
                        <span class="${(user_input.strike == true ) ? 'text-decoration-line-through' : ''}">
                         ${user_input.name} </span>
                    </label>
                </div>
                <button class="btn btn-danger" onclick="remove(${index})">x</button></li>`;   
            });
        }  
        
        function add() {
            user_data.push({
                name : user_name.value,
                strike: false
            });
            reload();
                user_name.value='';
        }

        function remove(index) {
            //console.log(index);
            user_data.splice(index,1);
            reload();
        }

        function Strike(index) {
            let checkBox=document.getElementById(`check_${index}`)

            if (checkBox.checked == true){
               user_data[index].strike=true;
            } 
            else{
                user_data[index].strike=false;
            }
            reload();    
        }

    </script>  
</body>
</html>