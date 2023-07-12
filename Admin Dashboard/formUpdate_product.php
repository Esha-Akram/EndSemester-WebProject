<?php
    require_once('../Includes/connect.php');
    $db = new Database();

    if(!isset($_GET['proid'])){
        echo 'error';
    }
    else{
        $id = $_GET['proid'];
        $data = $db->get_products($id);
   
?>
<div class="container mt-5">
        <h2 class="text-center">Update Product</h2>
        <form action="update_products.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $data['product_id']?>" class="form-control" name="product_id" required="required">
            <div class="form-outline w-50 m-auto mb-4">
              <label for="product_title">Product Title</label>
              <input type="text" class="form-control" value="<?php echo $data['product_title']?>" id="product_title" name="product_title" placeholder="Enter Product" autocomplete="off" required="required">
            </div>
            <div class="form-outline w-50 m-auto mb-4">
              <label for="description">Product Description</label>
              <input type="text" class="form-control" value="<?php echo $data['product_discription']?>" id="description" name="description" placeholder="Enter Product Description" required="required">  
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" value="<?php echo $data['product_price']?>" id="product_price" placeholder="Enter product price" class="form-control" required="required">
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="fileToUpload" class="form-label">Product Image</label>
                <input type="file" value="<?php echo $data['product_image']?>" name="fileToUpload" id="fileToUpload" class="form-control" required="required">
            </div> 
            <!-- <div class="mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <div class="mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div> -->
            <div class="form-outline w-50 m-auto mb-4">
            <select name="product_category" value="<?php echo $data['category_id']?>" id="" class="form-select">
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
            <div class="text-center">
                <input type="submit" name="update_product" class="btn btn-warning px-3 mb-3 text-secondary" value = "Update Product" >
            </div> 
          </form>
          <?php }?>
        </div>