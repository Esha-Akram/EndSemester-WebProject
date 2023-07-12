<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
     <!--Bootsrap CSS Link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awosome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS File Link-->
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light" cz-shortcut-listen="true">
<!--Insert Product Form-->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../images/Logo.png" alt="" width="72" height="72">
        <h2>Insert Product</h2>
      </div>
        <form action="insert_products.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
            <div class="row">
              <div class="mb-4 w-50 m-auto">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter Product" autocomplete="off" required="required">
            </div>
            <div class="mb-4 w-50 m-auto">
              <label for="description">Product Description</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Enter Product Description" required="required">  
            </div>
            <div class="mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" placeholder="Enter product price" class="form-control" required="required">
            </div>
            <div class="mb-4 w-50 m-auto">
                <label for="fileToUpload" class="form-label">Product Image</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required="required">
            </div> 
            <!-- <div class="mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <div class="mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div> -->
            <div class="mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
            <?php
               require_once('../Includes/connect.php');
               $db = new Database();
               $display = $db->fetchAllCategories();
               foreach($display as $row){
                    print("<option value='$row[0]'>$row[1]</option>");
                   }
                ?>
            </select>
            </div>
            <hr class="mb-4">
            <div class="form-outline mb-4 d-flex justify-content-between">
                <input type="submit" name="insert_product" class="btn btn-warning mb-3 px-3 nav-link text-secondary fw-bold" value = "Insert Product" >
                <button class="btn btn-warning mb-3 px-3" type="button"><a href="index.php" class="nav-link text-secondary"><b>Back</b></a></button>
                <input type="hidden" name="action" value="addProduct">
                <input type="hidden" name="productid" id="productid" value="">
            </div> 
          </form>
        </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 - Esha</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
  <!--Bootsrap Js Link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    
 

    