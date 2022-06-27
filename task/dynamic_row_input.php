<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 p-2" style="margin-top: 100px;">
        <h4 class="text-center mt-3">Student Record</h4>
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col">Seat no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject 1</th>
                    <th scope="col">Subject 2</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody id="user_table">
            </tbody>
        </table>
        <button type="submit" class="btn btn-success" onclick="addRow()">Add Row</button>
        <button type="submit" class="btn btn-primary" onclick="submitData()">Submit</button>
        <table class="table text-center table-bordered mt-3">
            <thead>
                <tr>
                <th scope="col">Seat no</th>
                <th scope="col">Name</th>
                <th scope="col">Subject 1</th>
                <th scope="col">Subject 2</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody id="user_list">
            </tbody>
        </table>  
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        let user_table=document.getElementById('user_table');
        let user_list=document.getElementById('user_list');
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
                user_table.innerHTML += `<tr class="table_raw" data-rawindex="${counter}">
                    <td><input type="number" id="seat_no[${counter}]" class="form-control required"
                    data-error="seat no"></td>
                    <td><input type="text" id="student_name[${counter}]" class="form-control required"
                    data-error="name"></td>
                    <td><input type="number" id="subjet_1[${counter}]" class="form-control required"
                    data-error="subject 1"></td>
                    <td><input type="number" id="subjet_2[${counter}]" class="form-control required"
                    data-error="subject 2"></td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRaw(this)">x</button></td>
                </tr>`
                counter++;
            }   
        }

        function submitData()
        {
            validation();

            result=[];

            user_list.innerHTML = '';

            if(document.querySelectorAll('.error-msg').length == 0)
            {
                let table_raws= document.querySelectorAll('.table_raw');

                table_raws.forEach(function(raw) {
                    
                    let seat_no= document.getElementById(`seat_no[${raw.dataset.rawindex}]`);
                    let student_name= document.getElementById(`student_name[${raw.dataset.rawindex}]`);
                    let subjet_1= document.getElementById(`subjet_1[${raw.dataset.rawindex}]`);
                    let subjet_2= document.getElementById(`subjet_2[${raw.dataset.rawindex}]`);
                    
                    result.push ({
                        seat_no: seat_no.value,
                        student_name: student_name.value,
                        subjet_1: subjet_1.value,
                        subjet_2: subjet_2.value
                    })
                });

                result.forEach(function(row)
                {
                    user_list.innerHTML += `<tr>
                        <td>${row.seat_no}</td>
                        <td>${row.student_name}</td>
                        <td>${row.subjet_1}</td>
                        <td>${row.subjet_2}</td>
                        <td> ${parseInt(row.subjet_1) + parseInt(row.subjet_2)}</td>
                    </tr>`;
                });
            }
        }

        function removeRaw(btn) 
        {
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
                    let row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    Swal.fire({
                        position: 'top-end',

                        icon: 'success',
                        title: `${name} delete successfully`,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        }

        function validation()
        {
            let input_filed= document.querySelectorAll(".required");

            input_filed.forEach(function(ele){

                error_msg = ele.nextSibling;

                if(error_msg != null)
                {
                    error_msg.remove();  
                }

                if(ele.value == "")
                {
                    let error_message=ele.dataset.error;
                    let error_ele= document.createElement("span");
                    error_ele.innerHTML = `Enter ${error_message}`;
                    error_ele.classList.add("text-danger");  
                    error_ele.classList.add("error-msg");  
                    ele.insertAdjacentElement("afterend", error_ele);   
                }
            })
        }    
    </script>
</body>
</html>