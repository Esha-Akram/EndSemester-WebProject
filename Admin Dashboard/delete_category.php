<?php
    require_once('../Includes/connect.php');

    $db = new Database();
    $id = $_GET['id'];
    $delete = $db->delete_category($id);

    
?>