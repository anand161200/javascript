<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light mb-5" style="margin-top: 100px;">
        <h4 class="text-center mt-1">Form validation</h4>
        <div class="row">
            <div class="col-5 offset-4">
                <div class="col-lg-12">
                    <label for="user_name" class="form-label">Username</label>
                    <input type="text" id="value1" data-error="username"
                     class="form-control required" placeholder="Enter username">
                </div>
                <div class="col-lg-12">
                    <label for="user_name" class="form-label">First name</label>
                    <input type="text" id="value2" data-error="firstname" 
                    class="form-control required" placeholder="Enter first name">
                </div>
                <div class="col-lg-12">
                    <label for="user_name" class="form-label">Lastname</label>
                    <input type="text" id="value3" data-error="lastname"
                     class="form-control required" placeholder="Enter last name">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" onclick="submit()">Submit</button>
            </div>
         </div>
    </div>
    
    <script> 
    
        function validation(element)
        { 
            if(element.value == "")
            {
                element.nextSibling.remove();
                let error_message=element.dataset.error;
                let error_ele= document.createElement("span");
                error_ele.innerHTML = `Enter ${error_message}`;
                error_ele.classList.add("text-danger"); 
                    
                element.insertAdjacentElement("afterend", error_ele);   
            }
            else
            {
                element.nextSibling.remove();
            }
        }
        
        function submit() 
        {
            let input_filed= document.querySelectorAll(".required");

            input_filed.forEach(function(ele){
                validation(ele);
            })

        }
    </script>
</body>
</html>