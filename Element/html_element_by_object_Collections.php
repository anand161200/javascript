<!DOCTYPE html>
<html lang="en">
<body>
    <h2>HTML Elements by HTML Object Collections</h2>
    <form id="frm1">
    First name: <input type="text" name="fname" value="Anand"><br>
    First name: <input type="text" name="fname" value="Nirbhay"><br>
    </form>
    <p id="demo"></p>
    <script>
        let x=document.forms["frm1"]
        let text="";
       // console.log(x.elements[0].value)
        for(let i = 0; i < x.length ; i++)
        {
            text += x.elements[i].value + "<br>";
        }
        document.getElementById("demo").innerHTML = text;
    </script> 
</body>
</html>