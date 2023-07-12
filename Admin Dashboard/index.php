<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--Bootsrap CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--CSS File Link-->
    <link rel="stylesheet" href="../style.css">
   <!--w3school link-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Font Awosome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <style>
    .profile{
        width: 50px;
        object-fit:fill;
        border-radius: 100px;
        height:50px;
    }
    .footer{
        width:100%;
        /* position:absolute; 
        bottom:0;    */
    }
    </style>
</head>
<body>
<script>
    $(document).ready(function () {
        alert();
    $('#datatableId').DataTable();
    });
</script>
<!--navbar-->
<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid ">
        <img src="../images/Logo.png" alt="Logo" class="logo">
        <?php session_start();
            echo "<h5>Welcom " .$_SESSION['username']."!</h5>";
        ?>      
        <nav class="navbar navbar-expand-lg">
            <a>
            <button class="btn btn-warning" type="button"><a href="index.php" class="nav-link text-secondary"><b>Home</b></a></button>
                <button class="btn btn-warning" type="button"><a href="logout.php" class="nav-link text-secondary"><b>Logout</b></a></button>
                <!-- <img src="../images/Profile.webp" alt="profile" class="profile">  -->
            </a>
        </nav>
        </div>
    </nav>
<!--third-->
<div class="col-md-12 bg-secondary p-3 align-items-center">
    <div class="container p-3 ">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-secondary" type="button"><a href="form_products.php" class="nav-link text-light"><b>Insert Products</b></a></button>             
                 <button class="btn btn-secondary" type="button"><a href="index.php?view_products" class="nav-link text-light"><b>View Products</b></a></button>              
                <button class="btn btn-secondary" type="button"><a href="index.php?insert_category" class="nav-link text-light"><b>Insert Categories</b></a></button>
                <button class="btn btn-secondary" type="button"><a href="index.php?view_category" class="nav-link text-light"><b>View Categories</b></a></button>
            </div>
            <!-- <div class="col-md-3">
            <form action="search.php" method="post">
            <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Search">
            <button name="search" class="btn btn-outline-secondary bg-white border"><a href="index.php?search_product" class="nav-link text-secondary"><i class="fa fa-search"></i></a></button>
            </div>
            </form>
            </div> -->
        </div>
     </div>
</div>
<div class="container my-5">
<?php
if(isset($_GET['insert_category'])){
    require_once 'form_categories.php';
}
if(isset($_GET['view_products'])){
    require_once 'view_products.php';
}
if(isset($_GET['view_category'])){
    require_once 'view_categories.php';
}
if(isset($_GET['proid'])){
    require_once 'formUpdate_product.php';
}
if(isset($_GET['cateid'])){
    require_once 'formUpdate_category.php';
}
// if(isset($_GET['search_product'])){
//     require_once 'view_search.php';
// }
?>

</div>
<!--Last Child-->
  <div class="bg-warning p-3 text-center footer">
    <p>All rights are reserved @- Designed by Esha-2023</p>
  </div>
</div>

<!--Bootsrap Js Link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--js file-->
<!-- <script src="../script.js"></script> -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>


