<!DOCTYPE html>
<html lang="en">
<body>
    <h2> javascript object</h2>
    <p id="demo"></p>
   <script>

       let person={
           first_name:"anand",
           last_name:"tank",
           age:22
       }

       document.getElementById("demo").innerHTML= person.first_name + "<br>" +person.last_name
       + "<br>" + person.age

   </script> 
</body>
</html>