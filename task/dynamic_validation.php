<!DOCTYPE html>
<html lang="en">
<body>
    <h2> javascript </h2>
    <div>
        <div>
            <input type="text" id="value1" placeholder="Enter first value"><br><br>
        </div>
        <div>
            <input type="text" id="value2" placeholder="Enter first value"><br><br>
        </div>
        <div>
            <input type="text" id="value3" placeholder="Enter first value"><br><br>
        </div>
        <button type="submit" onclick="submit()">submit</button>
    </div>
    <script> 
        
        let filed1= document.getElementById("value1");
        let filed2= document.getElementById("value2");
        let filed3= document.getElementById("value3");     

        function validation(element)
        {
         
            if(element.value == "")
            {
                innerHTML = "please enter value"; 
            }
        }
        function submit() 
        {
          validation(filed1,filed2,filed3);
        }
    </script>
</body>
</html>