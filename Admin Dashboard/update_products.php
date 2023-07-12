<?php
    require_once('../Includes/connect.php');
    $db = new Database();
    
    $id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_description = $_POST['description'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $target_dir = "product_images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	
    $update = $db->update_product($id,$product_title,$product_description,$product_price,$product_category,$target_file);
   
?>