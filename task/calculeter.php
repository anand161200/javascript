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
        height: 400px;
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
        background-color: #fff;
        border-radius: 3px;
        border: 1px solid #c4c4c4;
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
        margin-left:100px;
        width: 100px;
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

        background-color:rgb(171, 219, 231);
        color: black;
        font-size: medium;
        width: 100%;
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

    <br>
    <table>
        <tr>
            <td colspan="3"><input type='text' id='result' readonly class ='screen'></td>
            <td>
                <input type='button' value = 'C' onclick="clearScreen()" class="clear"/>
            </td>
        </tr>
    </table>

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
            let user_value='';
            let element='';
            let inputField= document.getElementById('result');

            function display(val){
                inputField.value = inputField.value.toString() + val.toString();
                // inputField.value += val; 

                if(element !='')
                {
                    inputField.value=''; 
                }
            }
            function dotValueCheck(dot)
            {
               // console.log((inputField.value ).includes(dot));

                if((inputField.value ).includes(dot) == false)
                {
                    inputField.value = inputField.value.toString() + dot.toString();
                }
            }
            function operator(operator)
            {
                element=operator;
                user_value = inputField.value;

               // inputField.value = '';
            }
            function solve()
            {
                console.log(user_value);
                console.log(element);
                
                let new_val=inputField;
                let x=user_value;
                let y=new_val.value;

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
            }
            function clearScreen(){
                inputField.value = '';

            }
</script>
</body>
</html>




