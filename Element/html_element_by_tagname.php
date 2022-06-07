<!DOCTYPE html>
<html lang="en">
<body>
    <p> Body</p>
    <p id="demo"></p>
    <script>
        let element=document.getElementsByTagName("p");
        document.getElementById("demo").innerHTML="HTMl tag name is"+element[0].innerHTML;
    </script>   
</body>
</html>