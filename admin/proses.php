<?php
require "connect.php";
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];


  if($username=='adminisfi' && $password=='isfioke'){
  header('location: dashboard.php');
}else{
  echo "<script>
    alert ('Gagal Login! coba lagi');
    window.location= 'index.php';
    </script>";
}
}
?>
