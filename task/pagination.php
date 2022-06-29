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
                <ul class="pagination mt-4" id="button">
                    <!-- <li class="page-item active" aria-current="page">
                    <button class="btn btn-primary text-white" onClick="runPaginate('1')">1</button>
                    </li>
                    <li class="page-item"><button class="btn btn-primary text-white" onClick="runPaginate('2')">2</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white" onClick="runPaginate('3')">3</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white" onClick="runPaginate('4')">4</button></li>
                    <li class="page-item"><button class="btn btn-primary text-white" onClick="runPaginate('5')">5</button></li> -->
                </ul>
            </div>
        </div>
    </div>
    <script>

        let user_cart=document.getElementById("user_list");
        let page_size = 2;
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
        paginationButton();

        function paginationButton() {
            
           let button= document.getElementById("button")
          // let page_count=Math.ceil(all_data.length / page_size);
          page_count=5;
            
            for(let i=1; i<page_count +1 ; i++)
            {
              button.innerHTML +=`<li class="page-item"><button class="btn btn-primary text-white" 
                onClick="runPaginate(${i})">${i}</button></li>`
            }
        }
    
        function runPaginate(page_number) {
            user_cart.innerHTML="";
            paginate(page_number).forEach(function(user){
                user_cart.innerHTML += `<div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bg-light text-black">
                            <h5 class="card-title">${user.name}</h5>
                        </div>
                    </div>
                </div>`;
            }); 
        }
        
        function paginate(page_number)
        {
            return all_data.slice((page_number - 1) * page_size, page_number * page_size); 
        }

    </script>
</body>
</html>