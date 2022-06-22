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
                </tr>
            </thead>
            <tbody id="user_table">
            </tbody>
        </table>
        <button type="submit" class="btn btn-success" onclick="addRow()">ADD+</button>
        <button type="submit" class="btn btn-primary" onclick="submitData()">Submit</button>  
    </div>
    <script>

        let user_table=document.getElementById('user_table');
        let result=[];
        let counter=0;

        function addRow()
        {
            user_table.innerHTML += 
            `<tr class="table_raw" data-rawindex="${counter}">
                <td>#</td>
                <td><input type="text" name="user_name_${counter}" class="form-control"></td>
                <td><input type="text" name="percentage_${counter}" class="form-control"></td>
                <td><input type="text" name="roll_no_${counter}" class="form-control"></td>
            </tr>`

            counter++;
        }

        function submitData()
        {
            let table_raws= document.querySelectorAll('.table_raw');
            
                table_raws.forEach(function(raw){
                  console.log( raw.dataset.rawindex) 
                });
        }
    </script>
</body>
</html>