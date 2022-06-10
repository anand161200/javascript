<!DOCTYPE html>
<html lang="en">
<head>
<style> 
    .container {
        border: 1px solid #cccccc;
        box-shadow: 10px 10px 30px 0px rgba(0,0,0,0.75);
        border-radius: 20px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 450px;
        height: auto;
    }
    .reset {

        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
        padding: 10px;
        margin:auto;
    }
    .keys {

        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        padding: 10px;
        margin:auto;
    }
    .button {           

        height: 60px;
        padding: 5px;
        background-color:#bd4996;
        border-radius: 3px;
        border: 1px solid #412c2c;
        background-color: transparent;
        font-size: 2rem;
        color: #333;
        box-shadow: inset 0 0 0 1px rgba(255,255,255,.05), inset 0 1px 0 0 rgba(255,255,255,.45), inset 0 -1px 0 0 rgba(255,255,255,.15), 0 1px 0 0 rgba(255,255,255,.15);
        text-shadow: 0 1px rgba(255,255,255,.4);
    }
    .button:hover {
        background-color: #eaeaea;
        }
        .operator {
        color: #fff;
        background-color: #eebb24;
    }
    .clear {
        background-color: #f0595f;
        border-color: #b0353a;
        color: #fff;
        margin-left:50px;
        margin-right:10px;
        width: 50px;
        height: 40px;  
    }
    .clear:hover {
        background-color: #f17377;
    }
    .equal-sign {
        background-color: #25a8e0;
        border-color: #25a8e0;
        color: #fff;
    }
    .equal-sign:hover {
        background-color: #4e9ed4;
    }
    .screen{

        background-color:hwb(57deg 91% 0%);
        color: black;
        font-size: medium;
        margin-top: 20px;
        width: 90%;
        height: 30%;
        cursor: default;
        padding: 10px; 
        margin-left: 10px;
        margin-bottom: 10px;
    }
</style> 
</head> 
<body>

    <h1 style="text-align:center">Calculator App</h1>

    <div class="container">

    <input type='text' id='result' class ='screen' autofocus>

    <div class="reset">
        <input type='button'  value = '❮' onclick="Back()" style="background-color:#70d4ff;" class="button"/>
        <input type='button' value = 'C' onclick="clearScreen()" style="background-color:#ff9898;" class="button"/>
    </div>

    <div class="keys">
        <input type="button" value="7" class="button" onClick="display('7')"></input>
        <input type="button" value="8" class="button " onClick="display('8')"></input>
        <input type="button" value="9" class="button" onClick="display('9')"></input>
        <input type="button" value="/" class="button" onClick="operator('/')"></input>
        <input type="button" value="4" class="button" onClick="display('4')"></input>
        <input type="button" value="5" class="button" onClick="display('5')"></input>
        <input type="button" value="6" class="button" onClick="display('6')"></input>
        <input type="button" value="*" class="button" onClick="operator('*')"></input>
        <input type="button" value="1" class="button" onClick="display('1')"></input>
        <input type="button" value="2" class="button" onClick="display('2')"></input>
        <input type="button" value="3" class="button" onClick="display('3')"></input>
        <input type="button" value="-" class="button" onClick="operator('-')"></input>
        <input type="button" value="0" class="button" onClick="display('0')"></input>
        <input type="button" value="." class="button" onClick="dotValueCheck('.')"></input>
        <input type="button" value= "=" class="button equal-sign" onClick="solve()"></input>
        <input type="button" value="+" class="button" onClick="operator('+')"></input>

    </div> 
</div>
<script>
            let first_value='';
            let element='';
            let second='';
            let inputField= document.getElementById('result');

           
            document.addEventListener('keyup', (event) => { 
                if(event.key == "0") {display("0")} 
                if(event.key == "1") {display("1")} 
                if(event.key == "2") {display("2")} 
                if(event.key == "3") {display("3")} 
                if(event.key == "4") {display("4")} 
                if(event.key == "5") {display("5")} 
                if(event.key == "6") {display("6")} 
                if(event.key == "7") {display("7")} 
                if(event.key == "8") {display("8")} 
                if(event.key == "9") {display("9")} 
            });

            document.addEventListener('keyup', (event)  => {
              if(event.key == "+") {operator("+")}  
              if(event.key == "-") {operator("-")}  
              if(event.key == "*") {operator("*")}  
              if(event.key == "/") {operator("/")}  
            });

            document.addEventListener('keyup', (event) => {
                if(event.key == ".") {dotValueCheck(".")} 
            });

            document.addEventListener('keyup', (event) => {
                if(event.key == "=") {solve("=")} 
            });

            function display(val){

                // inputField.value += val; 
  
                if(element !='')
                {
                    inputField.value='';
                    second +=val;
                    inputField.value = inputField.value.toString() + second.toString();  
                }
                else
                {  
                  inputField.value = inputField.value.toString() + val.toString();   
                }
            }
            function dotValueCheck(dot)
            {
               // console.log((inputField.value ).includes(dot));

                if((inputField.value ).includes(dot) == false)
                {
                    inputField.value = inputField.value.toString() + dot.toString();
                    second +=dot;
                }
            }
            function operator(operator)
            {
                element=operator;
                first_value = inputField.value;
                second='';
            }
            function Back()
            {
               inputField.value= inputField.value.slice(0, -1);
               second=second.slice(0, -1);
            
            }
            function solve()
            {
                // console.log(first_value);
                // console.log(element);
                // console.log(second);

                let x='';
                let y=second;

                if(first_value !='')
                {
                    x=first_value;
                }
                else
                {
                    x='0';
                }
                switch(element){
                    case '+':
                    result = parseFloat(x)+parseFloat(y);
                    break;

                }
                switch(element){
                    case '-':
                    result = parseFloat(x)-parseFloat(y);
                    break;

                }
                switch(element){
                    case '*':
                    result = parseFloat(x)*parseFloat(y);
                    break;

                }
                switch(element){
                    case '/':
                    result = parseFloat(x)/parseFloat(y);
                    break;

                }

                inputField.value=result;
                // console.log(result);
            }
            function clearScreen(){
                inputField.value = '';
                first_value='';
                secound='';
                element='';
            }
</script>
</body>
</html>




