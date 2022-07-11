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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        let product =[
            {
                product_name : "product 1",
                price :100,
                stock :5,
            },
            {
                product_name : "product 2",
                price :120,
                stock :6,
            },

            {
                product_name : "product 3",
                price :140,
                stock :7,
            },
        ];

        product_list=document.getElementById("product_list");
        cart_table=document.getElementById("cart_table");
        GrandTotal=0;

        cart_array=[]

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
                            <h5 class="card-title">Stock:-${item.stock}</h5>
                            <button class="btn btn-success btn-sm" onclick="cart(${index})">Add To Cart</button>
                        </div>
                    </div>
                </div>`
            })
        }

        function reload(){ 
            cart_table.innerHTML ='';
            GrandTotal=0;

            cart_array.forEach(function(item,index) {
            cart_table.innerHTML += 
                `<tr> 
                    <td>${item.product_name}</td>
                    <td>${item.price} </td>
                    <td>
                        <div class="input-group mb-3">
                            <button class="btn btn-danger btn-sm " ${(item.quantity <= 1) ? 'disabled' : ''} onclick="minusButton(${index})">-</button>
                            <h2><span class="label label-default" id="input_filed_${index}">${item.quantity}</span></h2>      
                            <button class="btn btn-success btn-sm" ${(item.quantity >= item.stock ) ? 'disabled' : ''} onclick="plusButton(${index})">+</button>
                        </div>
                       
                    </td>
                    <td> ${item.total} </td>
                    <td><button class="btn btn-danger btn-sm" onclick="remove(${index})">x</button> </td>
                </tr>`
                
                GrandTotal += parseInt(item.total) ;  
            });

            cart_table.innerHTML +=
             `<tr>
                    <td colspan="3"></td>
                    <td colspan="2">Grand total : ${GrandTotal}</td>
              </tr> `  
        }      

        function cart(index) {
           // console.log(product[index])
           cart_table.innerHTML='';

           findvalue = cart_array.findIndex((item) => item.product_name === product[index].product_name); 

           if(findvalue < 0)
           {
            cart_array.push({
                product_name :product[index].product_name,
                price :product[index].price,
                stock :product[index].stock,
                quantity: 1,
                total:product[index].price 
             })
           }
           else
           {
              cart_array[findvalue].quantity++;   
              cart_array[index].total =cart_array[index].price * cart_array[index].quantity;
              
              if (cart_array[index].quantity >= cart_array[index].stock)
              {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'This product out of stock.'
                   })
              }
           }
            reload();    
        }

        function minusButton(index)
        {
            let minus=document.getElementById(`input_filed_${index}`);
                minus.value = parseInt(minus.value)- 1;  
                minus=cart_array[index].quantity--;
                minus=cart_array[index].total;
                minus=cart_array[index].total =cart_array[index].total - cart_array[index].price;
                reload();
        }

        function plusButton(index)
        {
            let plus=document.getElementById(`input_filed_${index}`)
                plus.value = parseInt(plus.value) + 1;
                plus=cart_array[index].quantity++;
                plus=cart_array[index].total =cart_array[index].price * cart_array[index].quantity;

               reload();
        }

        function remove(index)
        {
            Swal.fire({
                title: 'Are you sure want to delete ?',
                text: name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                    cart_array.splice(index,1);
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: `${name} delete successfully`,
                    showConfirmButton: false,
                    timer: 1500
                })
                    reload();   
               }
            })
        }

    </script>

</body>
</html>