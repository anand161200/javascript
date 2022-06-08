<!DOCTYPE html>
<html lang="en">
<body>

<div onmouseover="mOver(this)" onmouseout="mOut(this)" 
style="background-color:#D94A38;width:120px;height:20px;padding:40px;">
Hello </div>
<script>
    function mOver(input)
    {
        input.innerHTML = "Thank You";
    }
    function mOut(input)
    {
        input.innerHTML="Hello";
    } 
</script>
    
</body>
</html>