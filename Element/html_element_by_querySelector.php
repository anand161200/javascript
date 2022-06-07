<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Finding HTML Elements by Query Selector</h2>

    <p class="intro">Javascript!.</</p>
    <p class="intro">Laravel</p>
    <p id="demo"></p>
    <script>
        let element=document.querySelectorAll("p.intro");
            document.getElementById("demo").innerHTML = 'Hello:-'+element[0].innerHTML;
    </script>
    
</body>
</html>