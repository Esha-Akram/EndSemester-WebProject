<?php
    require_once('../Includes/connect.php');

    $db = new Database();
    $product_title = $_POST['product_title'];
    $product_description = $_POST['description'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $target_dir = "product_images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $insert = $db->add_products($product_title, $product_description,$product_price, $product_category, $target_file);
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//       echo "File is an image - " . $check["mime"] . ".<br>";
//       $uploadOk = 1;
//     } else {
//       echo "File is not an image.<br>";
//       $uploadOk = 0;
//     }
//   }

  
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.<br>";
//     $uploadOk = 0;
//   }
  
  // Check file size
  // if ($_FILES["fileToUpload"]["size"] > 500000) {
  //   echo "Sorry, your file is too large.<br>";
  //   $uploadOk = 0;
  // }

  
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//     echo '<script type="text/javascript">'; 
//     echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>");';
//     echo 'window.location.href = "insert_products.php";';
//     echo '</script>'; 
// }
// else {
//   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
// }

    
?>






