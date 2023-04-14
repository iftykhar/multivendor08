<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Testing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="container">
   
<button class="btn btn-info">Check</button>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>price</th>
            <th>discountPercentage</th>
            <th>thumbnail</th>
        </tr>
    </thead>
    <tbody class="alldata">
        
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function(){
       jQuery("button").click(function(){
            jQuery.ajax({
                url:"https://dummyjson.com/products",
                type:"get",
                success:function(respons){
                    var alldata = "";
                    $.each(respons.products, function(key,data){
                        alldata +='<tr>\
                            <td>'+key+'</td>\
                            <td>'+data.title+'</td>\
                            <td>'+data.description+'</td>\
                            <td>'+data.price+'</td>\
                            <td>'+data.discountPercentage+'</td>\
                            <td><img height="80" widht="80" src="'+data.thumbnail+'"></td>\
                            </tr>';
                    });
                    jQuery(".alldata").html(alldata)
                }
            });
       })
    });
</script>

</body>
</html>