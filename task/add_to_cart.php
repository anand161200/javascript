<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add to Cart</title>
</head>
<body>
    <div class="container mt-5 p-2" style="margin-top: 100px;">
        <h4 class="text-center mt-3">Product list</h4>
        <div class="row mt-5">
            <div id="product_list" class="row">
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">product</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="cart_table">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>

        let product =[
            {
                product_name : "product 1",
                price :100,
                stoke :5,
            },
            {
                product_name : "product 2",
                price :120,
                stoke :6,
            },

            {
                product_name : "product 3",
                price :140,
                stoke :7,
            },
        ];

        product_list=document.getElementById("product_list");
        cart_table=document.getElementById("cart_table");

        window.onload=function(){
            product_item();
        }

        function product_item(){

            product.forEach(function(item,index){
                product_list.innerHTML += 
                `<div class="col-sm-4">
                    <div class="card">
                        <div class="card-body  text-black">
                            <h5 class="card-title">product:-${item.product_name}</h5>
                            <h5 class="card-title">Price:-${item.price}</h5>
                            <h5 class="card-title">Stoke:-${item.stoke}</h5>
                            <button class="btn btn-success btn-sm" onclick="cart(${index})">Add To Cart</button>
                        </div>
                    </div>
                </div>`
            })
        }

        function cart(index) {
          //  console.log(product[index])
            cart_table.innerHTML += 
            `<tr> 
                <td>${product[index].product_name}</td>
                <td>${product[index].price} </td>
                <td>
                    <div class="input-group mb-3">
                        <button class="btn btn-danger btn-sm" id="minus" onclick="minusButton(${index})">-</button>
                        <input type="number" class="form-control"  id="input_filed_${index}" 
                          min="1" max="10" value="1"  style="width:2px;">
                        <button class="btn btn-success btn-sm" id="plus" onclick="plusButton(${index})">+</button>
                    </div>
                </td>
                <td></td>
                <td><button class="btn btn-danger btn-sm" onclick="remove(this)">x</button> </td>
            </tr>`
        }

        function minusButton(index)
        {
            let minus=document.getElementById(`input_filed_${index}`);
            minus.value = parseInt(minus.value)- 1;
        }

        function plusButton(index)
        {
            let plus=document.getElementById(`input_filed_${index}`)
            plus.value = parseInt(plus.value) + 1;
        }

        function remove(btn)
        {
            let row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);  
        }

    </script>

</body>
</html>