<!DOCTYPE html>
<html lang="en">
<body>
    <p id="demo"></p>
    <p id="demo2"></p>
    <script>
        let car="BMW , AUDI , I20";
        let str = "Apple, Banana, Kiwi";
        document.getElementById("demo").innerHTML =car.slice(5,10)
        document.getElementById("demo2").innerHTML =str.slice(7)
    </script>
</body>
</html>