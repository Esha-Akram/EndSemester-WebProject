<?php 
session_start();
require_once '../Includes/connect.php';
$db = new Database();
$_SESSION['username'] = $_POST['username'];
//$username = $_POST['username'];
$password = md5($_POST['password']);
$db->admin_login($_SESSION['username'], $password);
?>