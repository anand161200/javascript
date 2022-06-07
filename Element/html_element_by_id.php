<!DOCTYPE html>
<html lang="en">
<body>
    <h2>JavaScript HTML DOM </h2>

    <p id="intro">javascript </p>
    <p id="demo">
        welcome to
    </p>
   
    <script>
        let list=document.getElementById("intro");
        document.getElementById("demo").innerHTML +=list.innerHTML;
    </script>
</body>
</html>