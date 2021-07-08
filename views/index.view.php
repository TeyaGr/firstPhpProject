
<?php  



  $product_id=filter_input(INPUT_GET, 'product_id',FILTER_VALIDATE_INT);
 $category=filter_input(INPUT_GET,'category',FILTER_VALIDATE_INT);
 $limit=filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

 if($product_id==false||$category==false||$limit==false){
   $category=1;
   $product_id=5;
   $limit=1;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Fundamentals:<?php:$model?></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">PHP Fundamentals</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<br/> <br/>
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<!--<h1 class="mt-5">"My favourite colors"</h1>
<br/>
<div class="row">
<!-- <table class="table table-striped">
<tr><td><?=$product_id?></td>
<td><?="Showing category:"." ".$category?></td>
<td><?="And limit:"." ".$limit?></td></tr>

</table> -->



</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</html> 