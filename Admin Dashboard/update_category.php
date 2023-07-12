<?php
    require_once('../Includes/connect.php');
    $db = new Database();
    $category_id = $_POST['category_id'];
    $category_title = $_POST['category_title'];
    $update = $db->update_categories($category_id,$category_title);
?>