<!DOCTYPE html>
<html lang="en">
<body>
<h2>JavaScript HTML DOM</h2>
<p class="intro">Hello World!</p>
<p id="demo"></p>
    <script>
        let element=document.getElementsByClassName("intro");
        document.getElementById("demo").innerHTML +=element[0].innerHTML;
    </script>
</body>
</html>