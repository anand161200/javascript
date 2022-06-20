<!DOCTYPE html>
<html lang="en">
<body>
    <input type="text" id="value1" placeholder="Enter first value"><br>
    <span id="err_1"></span><br>
    <input type="text" id="value2" placeholder="Enter first value"><br>
    <span id="err_2"></span><br>
    <input type="submit" onclick="validation()" value="Submit">

    <script>
    let val1=document.getElementById("value1");
    let val2=document.getElementById("value2"); 
    let err1=document.getElementById("err_1");
    let err2=document.getElementById("err_2");

        function validation()
        {
            reset();
            
            if(val1.value=="" )
            {
                err1.innerHTML = "please enter value"; 
            }

            if(val2.value=="" )
            {
                err2.innerHTML = "please enter value"; 
            }   
        }

        function reset()
        {
            err1.innerHTML = "";
            err2.innerHTML = "";
        }

    </script>

</body>
</html>