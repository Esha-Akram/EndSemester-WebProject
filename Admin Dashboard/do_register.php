<!--Registration Setup-->
<?php
  require_once '../Includes/connect.php';
  $db = new Database();
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $email = $_POST['email'];
  $db->admin_registration($username, $email, $password);
?>
