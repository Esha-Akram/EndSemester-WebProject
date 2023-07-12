<?php
    require_once('../Includes/connect.php');

    $db = new Database();
    if(isset($_POST['search'])){
        $keyword = $_POST['keyword'];
        $search= $db->search_products($keyword);
    }
   
?>