<!DOCTYPE html>
<html>
<body>

<h2>JavaScript addEventListener</h2>

<button id="myBtn" value="123">Try it</button>

<p id="name">Anand</p>

<p id="demo"></p>

<script>
var x = document.getElementById("myBtn");
x.addEventListener("mouseover", myFirstFunction);
x.addEventListener("click", mySecondFunction);
x.addEventListener("mouseout", myThirdFunction);

function myFirstFunction() {
  document.getElementById("demo").innerHTML += "Moused over!<br>";
  document.getElementById('name').style.display = "block";
}

function mySecondFunction() {
  document.getElementById("demo").innerHTML += "Clicked!<br>";
}

function myThirdFunction() {
  document.getElementById("demo").innerHTML += "Moused out!<br>";
  document.getElementById('name').style.display = "none";
}
</script>

</body>
</html>
