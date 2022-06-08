<!DOCTYPE html>
<html lang="en">
<body>
    <input type="text" id="value1" placeholder="Enter first value">
    <span id="err_1"></span>
    <input type="text" id="value2" placeholder="Enter first value">
    <input type="submit" onclick="sum()" value="Submit">
    <p id="demo"></p>

    <script>
        val1=document.getElementById("value1");
        val2=document.getElementById("value2");       
        function sum()
        {
            if(val1.value=="" || val2.value=="")
            {
                alert("please Enter number");
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