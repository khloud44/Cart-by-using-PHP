<?php
session_start();
// echo '<pre>';
// print_r($_GET);
// echo '<pre>';

$_SESSION['cartItems'][]=$_GET;                            // Array_push()----> replaced by []

echo '<pre>';
print_r($_SESSION['cartItems']);
echo '<pre>';
  
// header('location: cart.php');
header('location: index.php');


?>