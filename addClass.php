<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mystyle {
  width: 100%;
  padding: 25px;
  background-color: coral;
  color: white;
  font-size: 25px;
  box-sizing: border-box;
}
</style>
</head>
<body>
    <button onclick="myfunction()"> TRY it</button>
    <div id="demo">
        teccel software
    </div>
    <script>
            function myfunction()
            {
                let element=document.getElementById('demo');
                    element.classList.add("mystyle")
            }
    </script>  
</body>
</html>