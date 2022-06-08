<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="display">
    <button class="btn" value="1">1</button>
    <button class="btn" value="2">2</button>
    <button class="btn" value="3">3</button>
    <button class="btn" value="4">4</button>
    <button class="btn" value="5">5</button>
    <button class="btn" value="6">6</button>
    <button class="btn" value="7">7</button>
    <button class="op" value="+">+</button>
    <button class="op" value="-">-</button>
    <button onclick="finalAns()">=</button>

    <script>
        let element = '';
        let user_value = '';
        let allElements = document.querySelectorAll('.btn');
        let allOp = document.querySelectorAll('.op');
        let inputField = document.getElementById('display');
        
        allElements.forEach(function(ele){
            ele.addEventListener("click", printValue);
        });

        allOp.forEach(function(op){
            op.addEventListener("click", operator);
        });

        function printValue(){
            inputField.value += this.value;
        }

        function operator()
        {
            element=this.value;
            user_value= inputField.value;
            inputField.value = '';
        }

        function finalAns(){

            switch(element){
                case '+':
                result = parseFloat(user_value)+parseFloat(inputField.value);
                break;

            }
            switch(element){
                case '-':
                result = parseFloat(user_value)-parseFloat(inputField.value);
                break;
            }

            inputField.value = result;
        }

    </script>
</body>
</html>