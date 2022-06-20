<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
let text = "a,b,c,d,e,f";
const myArray = text.split(",");
document.getElementById("demo").innerHTML = myArray[0]+myArray[1];
</script>

</body>
</html>