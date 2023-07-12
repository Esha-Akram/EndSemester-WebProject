<?php
    require_once('../Includes/connect.php');

    $db = new Database();
    
    $category_title = $_POST['category_title'];
    $insert = $db->add_categories($category_title);

?>