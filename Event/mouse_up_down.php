<!DOCTYPE html>
<html lang="en">
<body>
    <div id="animate" onmousedown="mDown(this)" onmouseup="mUp(this)" style="background-color:#D94A38;width:90px;height:20px;padding:40px;">
        <p><button onclick="myMove()">Click Me</button></p>
    </div>
    <Script>
        function mDown(obj) {
            obj.style.backgroundColor = "red";
            obj.innerHTML = "Hello"
        }
        function mUp(obj) {
            obj.style.backgroundColor = "Yellow";
            obj.innerHTML = "Thank You"
        }
    </Script>
</body>
</html>