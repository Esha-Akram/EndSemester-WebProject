<!--connect file-->
<?php
  require_once 'Includes/connect.php';
  $db = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafoor.pk</title>
    <!--Bootsrap CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awosome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS File Link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
    <img src="images/Logo.png" alt="Logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
       <li class="nav-item">
          <a class="nav-link" href="#">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
  <!--Third Child-->
</nav>
  <div class="bg-light">
    <h3 class="text-center">Product Store</h3>
    <p class="text-center">Style yourself but Save Money, for you Handmades with love</p>
</div>
<!--Third Child-->
<div class="row"> 
  <div class="col-md-10">
  <!--Products-->
    <div class="row">
    <div class="col-md-4 mb-2">
      <div class="card">
        <img class="card-img-top bg-light" src="images/1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
          <a href="#" class="btn btn-secondary">View More</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 mb-2">
      <div class="card">
       <img class="card-img-top bg-light" src="images/2.png" alt="Card image cap">
       <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
      </div>
    </div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="card">
      <img class="card-img-top bg-light" src="images/3.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
      </div>
    </div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="card">
      <img class="card-img-top bg-light" src="images/7.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
      <img class="card-img-top bg-light" src="images/8.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="card">
      <img class="card-img-top bg-light" src="images/9.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
        </div>
      </div>
    </div>    
  </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-warning">
        <a href="#" class="nav-link text-secondary"><h4>Categories</h4></a>
      </li>
      <!-- <?php
        // $select_categories="select * from `categories`";
        // $result_categories=mysqli_query($con,$select_categories);
        // while($row_data=mysqli_fetch_assoc($result_categories)){
        //   $category_title = $row_data['category_title'];
        //   $category_id = $row_data['category_id'];
        //   echo " <li class='nav-item border-bottom'>
        //   <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        // </li>"; 
        // }
      
      ?> -->
  </div>
</div>
<!--Last Child-->
  <div class="bg-warning p-3 text-center">
    <p>All rights are reserved @- Designed by Esha-2023</p>
  </div>
</div>
    <!--Bootsrap Js Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>