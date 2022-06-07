<!DOCTYPE html>
<html lang="en">
<head>
    <title>Javascript</title>
</head>
<body>
 <script>
     let a={
         name:"anand",
         age:"22",
         email:"anandtank99@gmail.com",
         favmovie:['KGF','RRR','pushpa'],  // array

         salary : function(){
            return 25000;           //function
         },

         living:{
            city:'somanth',
            country:'india'       //object
         }
     }
     console.log(a);
      document.write(a.living.city)
 </script>   
</body>
</html>