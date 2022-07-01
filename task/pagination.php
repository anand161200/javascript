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
        <div>
            <select class="form-select-sm form-select-sm mt-3" id="data_select" aria-label=".form-select-sm example">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select> 
        </div>
        <div class="row mt-5" >
            <div id="user_list" class="row">
            </div>
        </div>
        <div class="d-flex bd-highlight mb-3 mt-3">
            <div class="me-auto p-2 bd-highlight"><span id="display_entry"> </span></div>
            <div class="p-2 bd-highlight">
                <ul class="pagination" id="button">
                </ul>
            </div>
        </div>
    </div>
    <script>

        let user_cart=document.getElementById("user_list");
        let button= document.getElementById("button");
        let data_select=document.getElementById('data_select');
        let display_entry=document.getElementById('display_entry');
        let page_size=1;
        let all_data='';
        let page=1;
        fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(result => {
            all_data=result;
            reload(); 
        });

        document.getElementById("data_select").addEventListener('change', (event) => {
             page_size = event.target.value;
             user_cart.innerHTML="";
             page=1;
             reload();   
        });

        function reload(){

            data_select.value = page_size;
            paginate().forEach(function(user) {
                user_cart.innerHTML += `<div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bg-light text-black">
                            <h5 class="card-title">${user.name}</h5>
                        </div>
                    </div>
                </div>`;
             });
             paginationButton(); 
             displayEntry();
        }

        function paginationButton() {
            button.innerHTML="";
            let page_count=Math.ceil(all_data.length / page_size);
            for(let i=1; i<page_count +1 ; i++)
            {
              button.innerHTML +=`<li class="page-item ${(i == page)? 'active' : ''}"><button class="btn page-link" 
                onClick="runPaginate(${i})">${i}</button></li>`
            }
        }

        function runPaginate(page_number) {
            page=page_number;
            user_cart.innerHTML="";
            reload(); 
        }
        
        function paginate()
        {
            return all_data.slice((page - 1) * page_size, page * page_size); 
        }
        function displayEntry() {
            total_entry=all_data.length;

            start_point = page * page_size - page_size + 1;
            end_point = page * page_size;
            // console.log(paginate());

            if (end_point > total_entry) 
            {
                end_point = start_point + (paginate().length - 1)
            }
            display_entry.innerHTML=`Showing ${start_point} to ${end_point} of ${total_entry}`    
        }                 
    </script>
</body>
</html>