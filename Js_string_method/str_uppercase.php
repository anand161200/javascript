<!DOCTYPE html>
<html lang="en">
<body>
    <button onclick="convert()"> try it</button>
    <p id="demo"> hello lucifer</p>
    <script>
       function convert()
       {
            let change=document.getElementById("demo").innerHTML;
            document.getElementById("demo").innerHTML =change.toUpperCase();
       }
    </script>
</body>
</html>