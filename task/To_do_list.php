<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                name :'Lucifer'
            },
            {
                name : 'Jack spparow' 
            }
        ];

        window.onload=function(){
            relode();
        }

        function relode() {
            user_list.innerHTML='';

            user_data.forEach(function(user_input, index){
                user_list.innerHTML+= `<li class="list-group-item d-flex justify-content-between align-items-center">
                 ${index+1}. ${user_input.name}
                <button class="btn btn-danger" onclick="remove(${index})">x</button></li>`;   
            });
        }  
        
        function add() {
            user_data.push({
                'name': user_name.value
            });
                relode();
                user_name.value='';
        }

        function remove(index) {
            //console.log(index);
            user_data.splice(index,1);
            relode();
        }

        function Strike(index)
        {
            //console.log(index);
        }

    </script>  
</body>
</html>