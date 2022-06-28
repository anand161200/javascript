<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>pagination</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 text-center text-danger" >
            <h2> Pagination</h2>
        </div>
        <div class="row mt-5" >
            <div id="user_list" class="row">
            </div>
            <div>
                <ul class="pagination mt-4" id="user_page">
                    <li class="page-item active" aria-current="page">
                    <button class="btn btn-primary text-white">1</button>
                    </li>
                    <li class="page-item"><button class="btn btn-primary text-white">2</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white">3</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white">4</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white">5</button></li>
                </ul>
            </div>
        </div>
    </div>
    <script>

        let user_cart=document.getElementById("user_list");
        let page_size = 2;
        let page_number = 5;

        let all_data='';

        fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(data => data.forEach(function(user_data) {
            user_cart.innerHTML += `<div class="col-sm-6">
                <div class="card">
                    <div class="card-body bg-light text-black">
                        <h5 class="card-title">${user_data.name}</h5>
                    </div>
                </div>
            </div>`
            all_data=data;
        }))

        document.getElementById("user_page").addEventListener('click', (event) => {
           // user_cart.innerHTML="";
            console.log(paginate());
            // paginate().forEach(function(user){
            //     user_cart.innerHTML += `<div class="col-sm-6">
            //     <div class="card">
            //         <div class="card-body bg-light text-black">
            //             <h5 class="card-title">${user.name}</h5>
            //         </div>
            //     </div>
            // </div>`

            // }); 
        });
        
       function paginate()
        {
          return all_data.slice((page_number - 1) * page_size, page_number * page_size);
        }

    </script>
</body>
</html>