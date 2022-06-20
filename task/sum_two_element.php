<!DOCTYPE html>
<html lang="en">
<body>
    <input type="text" id="value1" placeholder="Enter first value"><br>
    <input type="text" id="value2" placeholder="Enter first value"><br>
    <input type="submit" onclick="sum()" value="Submit">
    <p id="demo"></p>

    <script>
    let val1=document.getElementById("value1");
    let val2=document.getElementById("value2"); 

        function sum()
        {
            if(val1.value=="" || val2.value=="")
            {
              alert("please enter value")
            }
            else{
                let val3= parseInt(val1.value) + parseInt(val2.value);
                document.getElementById("demo").innerHTML=val3;
                val1.value="";
                val2.value="";
            }     
        }

    </script>

</body>
</html>