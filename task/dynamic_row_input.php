<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light mt-5" style="margin-top: 100px;">
        <h4 class="text-center mt-3">Student Record</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">percentage</th>
                    <th scope="col">Roll-no</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody id="user_table">
            </tbody>
        </table>
        <button type="submit" class="btn btn-success" onclick="addRow()">ADD+</button>
        <button type="submit" class="btn btn-primary" onclick="submitData()">Submit</button>  
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        let user_table=document.getElementById('user_table');
        let result=[];
        let counter=0;

        function addRow()
        {
            raw_count = document.querySelectorAll('tr').length

            if(raw_count > 5 ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sorry can not add more filed.'
                })
            }
            else{
                user_table.innerHTML += 
                `<tr id="raw" class="table_raw" data-rawindex="${counter}">
                    <td>${counter +1}</td>
                    <td><input type="text" id="user_name[${counter}]" class="form-control required"
                    data-error="username"></td>
                    <td><input type="text" id="percentage[${counter}]" class="form-control required"
                    data-error="percentage"></td>
                    <td><input type="text" id="roll_no[${counter}]" class="form-control required"
                    data-error="Roll_no"></td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRaw(this)">x</button><td>
                </tr>`
                counter++;
            }    
        }

        function submitData()
        {
            result=[];

            let table_raws= document.querySelectorAll('.table_raw');

            table_raws.forEach(function(raw) {
                
                let user_name= document.getElementById(`user_name[${raw.dataset.rawindex}]`);
                let percentage= document.getElementById(`percentage[${raw.dataset.rawindex}]`);
                let roll_no= document.getElementById(`roll_no[${raw.dataset.rawindex}]`);
                
                    result.push ({
                    name: user_name.value,
                    percentage: percentage.value,
                    roll_no: roll_no.value
                })

                let input_filed= document.querySelectorAll(".required");

                    input_filed.forEach(function(ele){
                        validation(ele);
                    }) 
            });

             console.log(result);
        }

        function removeRaw(btn) 
        {
            let row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
        }

        function validation(element)
        {
           
            error_msg = element.nextSibling;
            if(error_msg != null)
            {
                error_msg.remove();  
            }

            if(element.value == "")
            {
                
                let error_message=element.dataset.error;
                let error_ele= document.createElement("span");
                error_ele.innerHTML = `Enter ${error_message}`;
                error_ele.classList.add("text-danger");  
                    
                element.insertAdjacentElement("afterend", error_ele); 
            }
          
        }

    </script>
</body>
</html>