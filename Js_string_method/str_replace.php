<!DOCTYPE html>
<html lang="en">
<body>
    <button onclick="replace()">try it</button>
    <p id="demo">Please visit Microsoft</p>
    <script>
        function replace()
        {
           let change=document.getElementById("demo").innerHTML;
              
            document.getElementById("demo").innerHTML =
            change.replace("Microsoft" , "Google");
        }
    </script>  
</body>
</html>